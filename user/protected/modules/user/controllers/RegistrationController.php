<?php

class RegistrationController extends Controller
{
	public $defaultAction = 'registration';
	


	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return (isset($_POST['ajax']) && $_POST['ajax']==='registration-form')?array():array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}
	/**
	 * Registration user
	 */
	public function actionRegistration() {
            $model = new RegistrationForm;
            $profile=new Profile;
            $profile->regMode = true;
            
			// ajax validator
			if(isset($_POST['ajax']) && $_POST['ajax']==='registration-form')
			{
				echo UActiveForm::validate(array($model,$profile));
				Yii::app()->end();
			}
			
		    if (Yii::app()->user->id) {
		    	$this->redirect(Yii::app()->controller->module->profileUrl);
		    } else {
		    	if(isset($_POST['RegistrationForm'])) {
					$model->attributes=$_POST['RegistrationForm'];
					$profile->attributes=((isset($_POST['Profile'])?$_POST['Profile']:array()));
					if($model->validate()&&$profile->validate())
					{
						$soucePassword = $model->password;

            
            //adding crypt support
            if(Yii::app()->getModule('user')->hash=='crypt')
              $salt = Randomness::blowfishSalt();
            else
              $salt="";

						$model->password=UserModule::encrypting($model->password,$salt);
						$model->verifyPassword=UserModule::encrypting($model->verifyPassword,$salt);
						$model->createtime=time();
						$model->lastvisit=((Yii::app()->controller->module->loginNotActiv||(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false))&&Yii::app()->controller->module->autoLogin)?time():0;
						$model->superuser=0;
						$model->status=((Yii::app()->controller->module->activeAfterRegister)?User::STATUS_ACTIVE:User::STATUS_NOACTIVE);
            $model->salt = $salt;
						
						if ($model->save()) {
							$profile->user_id=$model->id;
							$profile->save();
							if (Yii::app()->controller->module->sendActivationMail) {
                $this->doSendActivationMail($model);
							}
							
							if ((Yii::app()->controller->module->loginNotActiv||(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false))&&Yii::app()->controller->module->autoLogin) {
									$identity=new UserIdentity($model->username,$soucePassword);
									$identity->authenticate();
									Yii::app()->user->login($identity,0);
									$this->redirect(Yii::app()->controller->module->returnUrl);
							} else {
								if (!Yii::app()->controller->module->activeAfterRegister&&!Yii::app()->controller->module->sendActivationMail) {
									Yii::app()->user->setFlash('registration',UserModule::t("Thank you for your registration. Contact Admin to activate your account."));
								} elseif(Yii::app()->controller->module->activeAfterRegister&&Yii::app()->controller->module->sendActivationMail==false) {
									Yii::app()->user->setFlash('registration',UserModule::t("Thank you for your registration. Please {{login}}.",array('{{login}}'=>CHtml::link(UserModule::t('Login'),Yii::app()->controller->module->loginUrl))));
								} elseif(Yii::app()->controller->module->loginNotActiv) {
									Yii::app()->user->setFlash('registration',UserModule::t("Thank you for your registration. Please check your email or login."));
								} else {
									Yii::app()->user->setFlash('registration',UserModule::t("Thank you for your registration. Please check your email."));
								}
								$this->refresh();
							}
              
						}
					} else $profile->validate();
				}
			    $this->render('/user/registration',array('model'=>$model,'profile'=>$profile));
		    }
	}
	public function actionResend() {
    $model = new ResendForm;
    // ajax validator
    if(isset($_POST['ajax']) && $_POST['ajax']==='resend-form'){
      echo UActiveForm::validate(array($model));
      Yii::app()->end();
    }
    if (Yii::app()->user->id) {
      $this->redirect(Yii::app()->controller->module->profileUrl);
    }else{
      if(isset($_POST['ResendForm'])) {
          $model->attributes=$_POST['ResendForm'];
        if($model->validate()){
          $usermodel = User::model()->find("email='$model->email'");
          
          if($usermodel->status == 1){
            Yii::app()->user->setFlash('resend',UserModule::t("Your account is already activated. Please retry to login."));
          }else{
            $this::doSendActivationMail($usermodel);
          }
        } 
      }
      $this->render('/user/resend',array('model'=>$model));
    }
  }
  function doSendActivationMail($model){
			$model->activkey=urlencode(uniqid(true));
      $model->save();
      $activation_url = $this->createAbsoluteUrl('/user/activation/activation',array("activkey" => $model->activkey, "email" => $model->email));
      UserModule::sendMail($model->email,UserModule::t("You registered from {site_name}",array('{site_name}'=>Yii::app()->name)),UserModule::t("Please activate you account go to {activation_url}",array('{activation_url}'=>$activation_url)));
      Yii::app()->user->setFlash('resend',UserModule::t("An email will be sent to you shortly with a new activation code. Remember to check your spams folder"));
      $this->refresh();
  }
}

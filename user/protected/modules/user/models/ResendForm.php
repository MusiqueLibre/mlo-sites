<?php
/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * user registration form data. It is used by the 'registration' action of 'UserController'.
 */
class ResendForm extends User {
	public $verifyPassword;
	public $verifyCode;
	
	public function rules() {
		$rules = array(
			array('email', 'email'),
			array('email', 'exist', 'message' => UserModule::t("This user's email doesn't exists.")),
		);
		return $rules;
	}
	
}

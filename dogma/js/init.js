$(function(){
  //transpations
  remove = "Enlever";
  reload = "La playlist ne s'est pas chargée";
  ajaxify();
  startPlayer();
});
//use this when you need something to be reloaded after the ajax call as well as at normal page load
function initAtPageLoad(){
  if($('.band_album_list').length > 0){
    playlistPageButtons();
  }
}


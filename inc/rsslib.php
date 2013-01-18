<?php
function rss_reader($feed_url,$limit=5,$want_title=true,$want_link=true){
  setlocale (LC_TIME, 'fr_FR.utf8','fra');
  $rss = new DOMDocument();
  $rss->load($feed_url);
  $feed = array();
  foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
  }
  //Creating unordered list
  $rss_result = '<ul class = "rss">';
  for($x=0;$x<$limit;$x++) {
    $link = $feed[$x]['link'];
    //creating list element
    $rss_result .='<li class="rsslist">';
    //
    //optionnal title
    if($want_title){
      $title = utf8_decode($feed[$x]['title']);
      if($want_link){
        $title = '<a href="'.$link.'" title="'.$title.'" class="rsstitle">'.$title.'</a>';
      }
      else{
        $title = '<span class="rsstitle">'.$title.'</span>';
      }
      $rss_result .= $title;
    }

    $description = utf8_decode($feed[$x]['desc']);
    $date = utf8_decode(strftime("%a %d %B %G, %k:%M", strtotime($feed[$x]['date'])));
    //adding the item
    $rss_result .= '<span class="rssdate">'.$date.'</span><span class="rssdesc">'.$description.'</span>';

    //Closing list element
    $rss_result .= '</li>';
     
  }
  return $rss_result .= '</ul>';
}
?>

<?php
		
  // RSS feeden hentes. Gemmes som obejct i $feed
  $feed = simplexml_load_file('https://www.jagttegn.dk/PublicPages/OpenCoursesRSS');
			
  //Taeller til at begrænse antallet af nyheder
  $taeller  = 0;
  $antal = 1000;

  //alt køres igennem utf8_decode() Der returner  ISO-8859-1
  foreach($feed->channel->item as $item){
      while($taeller<$antal){
        if (strpos($item->title, 'Bue') !== false)
         print ("<h2>{$item->title}</h2>");
        if (strpos($item->title, 'Bue') !== false)
         print ("<p>{$item->description}</p>");
         break;
         }
      $taeller ++;
      }  
?>

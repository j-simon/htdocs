<?php
 
  $formular_input='<b class="red"><em>Hallo guten Tag!</em></b>';

  //$formular_input=str_replace("<b>","",$formular_input);
  //$formular_input=str_replace("</b>","",$formular_input);
  
  echo strip_tags($formular_input,"<b>");
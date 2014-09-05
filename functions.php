<?php

add_shortcode('a2studio', 'a2studio_handler');

function a2studio_handler($atts, $content=null, $code="") {
   return '<a href="mailto:info@a2studio.co.uk">A2studio</a>';
}

?>
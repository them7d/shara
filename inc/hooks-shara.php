<?php

add_action("shara_get_header", "get_header_img", 5);
add_action("shara_get_header", "shara_nav_menu", 10);
add_action("shara_get_header", "shara_get_search_form", 15);
add_action("shara_get_header", "shara_get_cart", 20);
add_action("wp_enqueue_scripts","shara_enqueue_styles");
?>
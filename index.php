<?php
get_header();
      if(have_posts()){
            while(have_posts()){
                  the_post();
                  the_content(
                        sprintf(__("continue reading","shara"))
                  );
            }
      }
get_footer();
?>
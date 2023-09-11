<!DOCTYPE html>
<html>
      <head>
            <?php wp_head(); ?>
      </head>
      <body <?php body_class()?>>
            <?php do_action( "shara_before_get_header" )?>

            <header>

                  <?php echo do_action( "shara_get_header" );?>
                  
            </header>

            <?php do_action( "shara_after_get_header" );?>
<?php 

     $options = get_theme_options();


		ob_start(); 


 echo '<style type="text/css">
body{
    color: '.$options["color-theme-main"].';

}
</style>' ;
		$dynamic_css = ob_get_contents();
		ob_end_clean();

?>
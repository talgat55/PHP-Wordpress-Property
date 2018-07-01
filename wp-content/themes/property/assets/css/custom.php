<?php 

     $options = get_theme_options();


		ob_start(); 


			echo '<style type="text/css">';


		    echo '</style>';
		
		
		$dynamic_css = ob_get_contents();
		ob_end_clean();



	
	
	


?>
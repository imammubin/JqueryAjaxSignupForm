<?php

	foreach($_POST as $key =>$val){
		if(empty($val)){
			echo 'field '.$key.' must be field';
		}
		exit;
	}

    /* 
      Saving Proses Code Here 
      when running correctly print ok
      
    */

	echo 'ok';

?>

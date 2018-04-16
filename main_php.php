
<?php

require_once('dachshund_class.php');
require_once('plush_labrador_class.php');
require_once('pug_class.php');
require_once('rubber_dachshund_class.php');
require_once('siba_inu_class.php');

switch ($argv[1]) {
    case "dachshund":
        if(!isset($argv[2])) {
			echo "no action specified";
			break;
		}
        if ( ($argv[2] != "voice") && ($argv[2] != "hunt") ) {
        	echo "the dog can not this - ".$argv[2];
        	break;
        }
        $dog = new dachshund;
        $res = $dog->entity_fun($argv[2]);
        echo $res;
        break;
    case "plush_labrador":
        if(!isset($argv[2])) {
			echo "no action specified";
			break;
		}
    	$dog = new plush_labrador;
        $res = $dog->entity_fun($argv[2]);
        echo $res;
        break;
    case "pug":
        if(!isset($argv[2])) {
			echo "no action specified";
			break;
		}
        $dog = new pug;
        $res = $dog->entity_fun($argv[2]);
        echo $res;
        if ($argv[2] != "voice")
        	echo "the dog can not this - ".$argv[2];
        break;
    case "rubber_dachshund":
        if(!isset($argv[2])) {
			echo "no action specified";
			break;
		}
        $dog = new rubber_dachshund;
        $res = $dog->entity_fun($argv[2]);
        echo $res;
        if ($argv[2] != "squeak")
        	echo "the dog can not this - ".$argv[2];
        break;
    case "siba_inu":
        if(!isset($argv[2])) {
			echo "no action specified";
			break;
		}
        if ( ($argv[2] != "voice") && ($argv[2] != "hunt") ){
        	echo "the dog can not this - ".$argv[2];
        	break;
        }
        $dog = new siba_inu;
        $res = $dog->entity_fun($argv[2]);
        echo $res;
        break;
    default:
    	echo "wrong command";
    	break;
}

?>
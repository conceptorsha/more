<?php

//SETUP DATABASE FIRST TO INCLUDE THIS
require_once 'models/database.php';
require_once 'models/contact.php';
require_once 'models/login.php';
require_once 'models/signup.php';


require_once 'views/new_header.php';
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

 $action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'home';
    }
}


switch ($action) {
    case 'home':
        include_once 'views/home.php';
        break;
		case 'gallery':
			include_once 'views/gallery.php';
			break;
	case 'about':
		include_once 'views/about.php';
		break;
	case 'service':
		include_once 'views/service.php';
		break;
				
	case 'contact':
		include_once 'views/contact.php';
		break;

	case "contact-us":
		create_contac($name,$email,$message);
		include_once 'views/contact.php';
		break;

        case "login":
			//create_login($email,$password);
			include_once 'views/login.php';
			break;
			case "signin":
				signin_sign($email,$password);
				//var_dump([$name,$email,$password]);
				include_once "view/home.php";
				break;
			
			case "signup":
				//create_login($email,$password);
				include_once 'views/signup.php';
				break;
	     case "register":
		register_user($name, $email,$password);
		//var_dump([$name,$email,$password]);
		include_once "view/home.php";
		break;
	
	default:
        include_once 'views/home.php';
        break;
	}
//footer.php
require_once 'views/footer.php';

<?php
require_once("includes/initialize.php");
$content = 'home.php';
$view = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : '';
$account = 'guest/update.php';
$small_nav = 'theme/small-navbar.php';
switch ($view) {

	case '1':
		$title = "Home";
		$content = 'home.php';
		break;
	case 'gallery':
		$title = "Gallery";
		$content = 'gallery.php';
		break;
	case 'about':
		$title = "About Us";
		$content = 'about.php';
		break;

	case 'rooms':
		$title = "Rooms and Rates";
		$content = 'rooms.php';
		break;
		
	case 'team':
		$title = "Our Team";
		$content = 'team.php';
		break;

	case 'contact':
		$title = "Contacts";
		$content = 'contact.php';
		break;

	case 'booking':
		$title = "Book A Room";
		$content = 'book_room.php';
		break;

	case 'accomodation':
		$title = "Accomodation";
		$content = 'accomodation.php';
		break;

	default:
		$title = "HOME";
		$content = 'home.php';
}

require_once('theme/template.php');

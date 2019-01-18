<?php
switch (($_SERVER["SCRIPT_NAME"])) {
	case '/php/about.php':
		$CURRENT_PAGE = 'About';
		$PAGE_TITLE = "A Propos";
		$PAGE_DESCRIPTION = "L'Armée des 12 Devs c'est un groupe de développeurs et developpeuses !";
		break;
	case '/php/contact.php':
		$CURRENT_PAGE = 'Contact';
		$PAGE_TITLE = "Nous Contacter";
		$PAGE_DESCRIPTION = "Venez prendre un café avec l'armée des douzes Devs";
		break;
	case '/php/users.php':
		$CURRENT_PAGE = 'Users';
		$PAGE_TITLE = "Utilisateurs de type Humain";
		$PAGE_DESCRIPTION = "Nos membres nos sont pas amputés";
		break;

	default:
		$CURRENT_PAGE = 'index';
		$PAGE_TITLE = 'Acceuil';
		$PAGE_DESCRIPTION = 'Bienvenue sur notre site';
		break;
}
?>
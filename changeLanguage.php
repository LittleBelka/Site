<?php 

if (isset($_GET['language'])) {
    changeLanguage($_GET['language'], $_GET['page']);
}

function changeLanguage($language, $page) {
	$language = strtolower($language);
	if (isset($_COOKIE['language'])) {
		if ($language == "ru") {
			setcookie("language", "ru", 0, "/");
		} else {
			setcookie("language", "en", 0, "/");
		}
	} else {
		if ($language == "ru") {
			setcookie("language", "ru", 0, "/");
		} else {
			setcookie("language", "en", 0, "/");
		}
	}
	header("Location: http://localhost:8080" . $page);
}

?>
<?php
$research_ru = "Исследования";
$research_en = "Research";
$publications_ru = "Публикации";
$publications_en = "Publications";
$members_ru = "Сотрудники";
$members_en = "Members";
$othes_ru = "Другое";
$othes_en = "Othes";
$contacts_ru = "Контакты";
$contacts_en = "Contacts";
$language_ru = "RU";
$language_en = "EN";

$research = $research_en;
$publications = $publications_en;
$members = $members_en;
$othes = $othes_en;
$contacts = $contacts_en;
$language = $language_ru;


if (isset($_COOKIE['language'])) {
	echo "cookie exists";
	/*echo $_COOKIE['cookie'][0].name;
	echo $_COOKIE['cookie'][0].value;*/
	if ($_COOKIE['language'] == $language_ru) {
		echo "cookie ru";
		$research = $research_en;
		$publications = $publications_ru;
		$members = $members_ru;
		$othes = $othes_ru;
		$contacts = $contacts_ru;
		$language = $language_en;
	}
}


function changeLanguage() {
	if ($language == $language_ru) {
		echo "There was $language_en, change to $language_ru";

		if (isset($_COOKIE['language'])) {
			echo "there is cookie";
			$_COOKIE['language'] = "ru";
		} else {
			setcookie("language", "ru");
		}
		
		$research = $research_en;
		$publications = $publications_ru;
		$members = $members_ru;
		$othes = $othes_ru;
		$contacts = $contacts_ru;
		$language = $language_en;
	} else {
		echo "There was $language_ru, change to $language_en";

		if (isset($_COOKIE['language'])) {
			echo "there is cookie";
			$_COOKIE['language'] = "en";
		} else {
			setcookie("language", "en");
		}

		$research = $research_en;
		$publications = $publications_en;
		$members = $members_en;
		$othes = $othes_en;
		$contacts = $contacts_en;
		$language = $language_ru;
	}
}
?>
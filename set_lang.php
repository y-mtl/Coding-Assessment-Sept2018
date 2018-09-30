<?php
  // Get the language from the url.
  $uri = $_SERVER['REQUEST_URI'];
  if (mb_substr($uri, -3) !== '=fr') {
    $language = 'en';
  } else {
    $language = 'fr';
  }

  // Set up a list of possible values, and make sure the selected language is valid.
  $allowed_languages = array('en', 'fr');
  if (!in_array($language, $allowed_languages)) {
      $language = 'en';
  }

  // Inlclude the selected language text
  include "./includes/languages/{$language}/nav.php";
  include "./includes/languages/{$language}/text.php";

?>
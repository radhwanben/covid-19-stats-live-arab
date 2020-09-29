<?php
require '../lib/vendor/autoload.php';


use Google\Cloud\Translate\V3\TranslationServiceClient;

$translationClient = new TranslationServiceClient();
$content = ['one', 'two', 'three'];
$targetLanguage = 'es';
$response = $translationClient->translateText(
    $content,
    $targetLanguage,
    TranslationServiceClient::locationName('[847052823450-72eglnhheac7p7plp43o839goa6ioe52.apps.googleusercontent.com]', 'global')
);

foreach ($response->getTranslations() as $key => $translation) {
    $separator = $key === 2
        ? '!'
        : ', ';
    echo $translation->getTranslatedText() . $separator;
}
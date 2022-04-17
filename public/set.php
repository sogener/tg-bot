<?php
// Load composer
require '../vendor/autoload.php';

$bot_api_key = '5267034267:AAGuipXfXHKcPgXwhO4UHaeqTGJgJoZw7-4';
$bot_username = 'wolf_dev_bot';
$hook_url = 'https://16bf-188-186-108-57.eu.ngrok.io/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
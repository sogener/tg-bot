<?php


// Load composer
require '../vendor/autoload.php';

$bot_api_key = '5267034267:AAGuipXfXHKcPgXwhO4UHaeqTGJgJoZw7-4';
$bot_username = 'wolf_dev_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $telegram->addCommandClass(\App\Commands\Message\GenericMessageCommand::class);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    var_dump($e->getMessage());
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}
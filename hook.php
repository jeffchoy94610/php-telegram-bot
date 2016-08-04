<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '242324050:AAG8_xykTkCuy02Y9xy86uSP3BXP00vFi90';
$BOT_NAME = 'wwfaqbot';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e;
}

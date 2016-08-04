<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
$API_KEY = '242324050:AAG8_xykTkCuy02Y9xy86uSP3BXP00vFi90';
$BOT_NAME = 'wwfaqbot';
$hook_url = 'https://jeffhkc.com/wwfaq/src/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    // Set webhook
    $result = $telegram->setWebHook($hook_url);
    // Uncomment to use certificate
    //$result = $telegram->setWebHook($hook_url, $path_certificate);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}

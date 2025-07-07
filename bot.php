<?php
$botToken = "8008542718:AAE1dpJ3pDOENdKe-vR1kma4Z6VR0JsI68M";
$apiURL = "https://api.telegram.org/bot$botToken/";

$update = json_decode(file_get_contents("php://input"), true);

if (isset($update['message']['text']) && $update['message']['text'] === "/start") {
    $chatId = $update['message']['chat']['id'];

    $keyboard = [
        "keyboard" => [[
            [
                "text" => "🚀 Launch App",
                "web_app" => [
                    "url" => "https://your-render-service.onrender.com/index.html"
                ]
            ]
        ]],
        "resize_keyboard" => true,
        "one_time_keyboard" => false
    ];

    $data = [
        "chat_id" => $chatId,
        "text" => "Click below to launch the app 🚀",
        "reply_markup" => json_encode($keyboard)
    ];

    file_get_contents($apiURL . "sendMessage?" . http_build_query($data));
}
?>

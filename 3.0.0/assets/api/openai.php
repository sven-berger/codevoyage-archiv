<?php
$frage = $_POST['frage'] ?? '';
$frage = trim($frage);

if ($frage === '') {
    http_response_code(400);
    echo 'Frage darf nicht leer sein.';
    exit;
}

$apiKey = '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';
$endpoint = 'https://api.openai.com/v1/chat/completions';

$data = [
    'model' => 'gpt-4', // oder 'gpt-3.5-turbo'
    'messages' => [
        ['role' => 'system', 'content' => 'Du bist Sophia, eine hilfsbereite Chat-KI für Supernatural-Fans, aber auch für zukünftige Webentwickler, so wie ich es bin. Ich absolviere bald ein Praktikum und dort ist HTML, CSS, JavaScript, React und Rails wichtig. Antworte locker, freundlich und mit Bezug zur Serie.'],
        ['role' => 'user', 'content' => $frage]
    ],
    'temperature' => 0.7,
    'max_tokens' => 500
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => [
            "Content-Type: application/json",
            "Authorization: Bearer $apiKey"
        ],
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($endpoint, false, $context);

if ($response === false) {
    http_response_code(500);
    echo 'Fehler beim Abrufen der Antwort.';
    exit;
}

$json = json_decode($response, true);
echo $json['choices'][0]['message']['content'] ?? 'Keine Antwort erhalten.';
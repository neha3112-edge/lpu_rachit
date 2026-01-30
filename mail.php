<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('POST required');
}

/* FORM DATA */
$data = [
    'full_name'    => $_POST['full_name'] ?? '',
    'email'        => $_POST['email'] ?? '',
    'phone'        => $_POST['phone'] ?? '',
    'course'       => $_POST['course'] ?? '',
    'state'        => $_POST['state'] ?? '',
    'source'       => $_POST['source'] ?? '',
    'sub_source'   => $_POST['sub_source'] ?? '',
    'utm_source'   => $_POST['utm_source'] ?? '',
    'utm_campaign' => $_POST['utm_campaign'] ?? '',
    'utm_medium'   => $_POST['utm_medium'] ?? '',
    'utm_term'     => $_POST['utm_term'] ?? '',
    'page_url'     => $_POST['page_url'] ?? '',
    'website'      => 'LPU_Online' // 🔥 TAB NAME
];

/* SEND TO GOOGLE SHEET */
$sheet_url = 'https://script.google.com/macros/s/AKfycbzSOEabwc16HTdMnfxdxFuOoEouHyLDSNwId7rRh6MoGdW4Wm29crpXOgdqOeSw3xZy/exec';

$ch = curl_init($sheet_url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10
]);

$response = curl_exec($ch);
curl_close($ch);

/* REDIRECT */
header("Location: thank-you.php");
exit;

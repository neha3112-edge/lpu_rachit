<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'response' => 'error',
        'message'  => 'POST is required'
    ]);
    exit;
}

/* ===============================
   1. COLLECT FORM DATA
================================ */
$full_name = $_POST['full_name'] ?? '';
$email     = $_POST['email'] ?? '';
$phone     = $_POST['phone'] ?? '';
$course    = $_POST['course'] ?? '';
$state     = $_POST['state'] ?? '';

/* ===============================
   2. CAPTURE UTM (POST → GET)
================================ */
$utm_source   = $_POST['utm_source']   ?? $_GET['utm_source']   ?? '';
$utm_medium   = $_POST['utm_medium']   ?? $_GET['utm_medium']   ?? '';
$utm_campaign = $_POST['utm_campaign'] ?? $_GET['utm_campaign'] ?? '';
$utm_term     = $_POST['utm_term']     ?? $_GET['utm_term']     ?? '';

/* ===============================
   3. DEFAULT UTMs TO "Website"
================================ */
$utm_source   = !empty($utm_source)   ? $utm_source   : 'Website';
$utm_medium   = !empty($utm_medium)   ? $utm_medium   : 'Website';
$utm_campaign = !empty($utm_campaign) ? $utm_campaign : 'Website';
$utm_term     = !empty($utm_term)     ? $utm_term     : 'Website';

/* ===============================
   4. SOURCE MAPPING
================================ */
$source = $_POST['source'] ?? '';

if (empty($source)) {
    $source = $utm_source ?: 'Website';
}

$sub_source = $_POST['sub_source'] ?? '';
$page_url = $_POST['page_url'] ?? ($_SERVER['HTTP_REFERER'] ?? '');

/* ===============================
   5. PREPARE LEAD DATA
================================ */
$lead_data = [
    'full_name'    => $full_name,
    'name'         => $full_name,
    'email'        => $email,
    'phone'        => $phone,
    'course'       => $course,
    'state'        => $state,
    'source'       => $source,
    'sub_source'   => $sub_source,
    'utm_source'   => $utm_source,
    'utm_medium'   => $utm_medium,
    'utm_campaign' => $utm_campaign,
    'utm_term'     => $utm_term,
    'page_url'     => $page_url
];

/* ===============================
   6. SEND TO CRM (JSON)
================================ */
$crm_url = 'https://api.crm.mysode.com/api/lead/apicreated';
$crm_api_key = 'a04b4291461f8b060559dfc965864c2c2590e6edd2f5aa7a49388484a1953f22';

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $crm_url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($lead_data),
    CURLOPT_HTTPHEADER => [
        "x-api-key: {$crm_api_key}",
        "Content-Type: application/json"
    ],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10
]);

curl_exec($ch);
curl_close($ch);

/* ===============================
   7. REDIRECT USER
================================ */
header("Location: thank-you.php");
exit;

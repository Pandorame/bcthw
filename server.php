<?php

define('TELEGRAM_BOT_TOKEN', '--M');

function sendMessage($chat_id, $text) {
    $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";
    $post_fields = [
        'chat_id' => $chat_id,
        'text'    => $text
    ];
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_exec($ch);
    curl_close($ch); 
}


$update = json_decode(file_get_contents("php://input"), TRUE);
$chat_id = $update['message']['chat']['id'];
$message = $update['message']['text'];

$private_key_pem = '-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAxSscUQLGsrdBChsS7JeiZ/JWXLXqFQpUb8EQOou7WVqfW8fP
vxO4P0OOsdRLbyR3UoKoP396tqc4sHoH/eKPhL4k/Sy60sl4C+iaHvHTfGtW/l9J
PBBUt7mSw6mt0NpZCf+Bwrg8qLEB7GCcB0Q8k3AjFkzFCWY42X5GX4Okc3z07xoK
VMnYXT2/9udnqgaYBnJpkI/4ebWG2CFRBk39JNhvcuo+EXXIZFn1vl4kpYO0s1uS
qxhm+kEbHxur1ugGdlQM1QqKKmjsdhEAQxZx4TeVcJ81L3lvW+NtYa1QzgBHu/z/
IycXHmLAAfKinDh3eNCuH8Qu0ycojgiNYvoTbQIDAQABAoIBACtXLKRKHe9PBQb5
qJFFS7fZt04t1sTFPoZKRAz6hjZAC2ObankwFoIhkY5ZgjNuKqSCgAVlOk5IN9fj
GzqdwLqHKY5VdMO88Zx8htRiiACDf93uiCSh2l2Ad1h3RfPw6z2dYqKw6PST5D5X
hjS6tS4bqjrOqUlFpR15+nIod8/CtrnD7t9QvkEPOlZKyZsNhZHbktu0W3E7y7kh
iyQcniDmmYoBeNVd7M0NZFOnNhXRK+9w4dD4AXFsM5db0utgoZVQcOEOmfhcDiCi
yF/BQTBbyQYrEVTdjBFzp8MTUbxDQWD0SYkgyb4e5Q8mdbblX5ZdLMLOlqwydqOx
71FkVKkCgYEA+CuzaEVW/NoGCDjpgX1tbWN1VNtlx0Y/5G1xE9FjhhHQRaWJkYP3
6jAb261KpIvdbAJB53lrnE6fnuvte0+0EO9peLdjcduYJEtljlAcQR5SGfeFPnRm
MWldAD9Jxmd7w055i1gCQZa6P0bTh3gPSJN0vFuR4bueTdRJso8j4AMCgYEAy2OA
EaLXzQP0l4z/JRWMQRLr8AHE4XRxCF3fCppRYwm1D6tGrcge1Dw8XxF5r0ewIhVq
0kqgs1SP8g+UONved23uRXkbuK+p5ERikZIip5S2MEUIWC9HHWjqjv3eiGHPBF7p
hEJgmSFKHwdUVKhaZgY4hpyCUAchTzCVZXLH+88CgYEA79zVL4/tbsCPmfzf/E8t
p8+8hQL1UXDdqjv5Ui1MozWudtJzr5i80rYjBuVsQrQIlC9uYXsi/lWjw+fGhivY
H5I2//1IebDEUTgqdS2K0Ymr0vtA5sd8Sn/K6sVA2ioFHhVINt0eeSRk6WncY5Aw
PXaAGtnqmyJK9HCdtp7RDt8CgYAenLNB9EiWyumdhdNBOaUKhlaMoTeI14XLxJU1
e1SUm3ltClJxBZXeS9KqXG78OsX/20lgrWrSkv+3ZzDf/ffV8e3S9w99FLN1b/WG
A4DDyFZDnaBL5ZHGk2v6aat8y3vlJIPxLCxt39zQHsJKm6w/fuAzIotakDgrOxzB
UC1ZcQKBgQCUQ7Ys3tLZzvkZsG4NOgkQ0ZBMa7PfyKlJ4uR8Orc2Wlrg1naMEyOv
AzlKxoH+fx+zN/h2dAF91llAmKM1Ocjd6A1ViRwxfCkY06emkYotvGCgHfPNo5Oy
/fRs9HzhhN8PQQuC0tVA/0/D2Lj9dGQvU9g14XcR3jbSHL+DA1DAkA==
-----END RSA PRIVATE KEY-----';

$public_key_pem = '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxSscUQLGsrdBChsS7Jei
Z/JWXLXqFQpUb8EQOou7WVqfW8fPvxO4P0OOsdRLbyR3UoKoP396tqc4sHoH/eKP
hL4k/Sy60sl4C+iaHvHTfGtW/l9JPBBUt7mSw6mt0NpZCf+Bwrg8qLEB7GCcB0Q8
k3AjFkzFCWY42X5GX4Okc3z07xoKVMnYXT2/9udnqgaYBnJpkI/4ebWG2CFRBk39
JNhvcuo+EXXIZFn1vl4kpYO0s1uSqxhm+kEbHxur1ugGdlQM1QqKKmjsdhEAQxZx
4TeVcJ81L3lvW+NtYa1QzgBHu/z/IycXHmLAAfKinDh3eNCuH8Qu0ycojgiNYvoT
bQIDAQAB
-----END PUBLIC KEY-----';

if (strpos($message, '/start') === 0) {
    sendMessage($chat_id, "Welcome to the Hash & RSA Bot!\nUse the following commands:\n/hash_md5 <text>\n/hash_sha1 <text>\n/encrypt_rsa <text>\n/decrypt_rsa <encrypted_text>");
} elseif (strpos($message, '/hash_md5') === 0) {
    $text = trim(str_replace('/hash_md5', '', $message));
    if ($text) {
        $md5_hash = md5($text);
        sendMessage($chat_id, "MD5 Hash: $md5_hash");
    } else {
        sendMessage($chat_id, "Please provide text to hash.");
    }
} elseif (strpos($message, '/hash_sha1') === 0) {
    $text = trim(str_replace('/hash_sha1', '', $message));
    if ($text) {
        $sha1_hash = sha1($text);
        sendMessage($chat_id, "SHA1 Hash: $sha1_hash");
    } else {
        sendMessage($chat_id, "Please provide text to hash.");
    }
} elseif (strpos($message, '/encrypt_rsa') === 0) {
    $text = trim(str_replace('/encrypt_rsa', '', $message));
    if ($text) {
        openssl_public_encrypt($text, $encrypted_text, $public_key_pem);
        $encrypted_text_base64 = base64_encode($encrypted_text);
        sendMessage($chat_id, "Encrypted (RSA): $encrypted_text_base64");
    } else {
        sendMessage($chat_id, "Please provide text to encrypt.");
    }
} elseif (strpos($message, '/decrypt_rsa') === 0) {
    $encrypted_text_base64 = trim(str_replace('/decrypt_rsa', '', $message));
    if ($encrypted_text_base64) {
        $encrypted_text = base64_decode($encrypted_text_base64);
        if (openssl_private_decrypt($encrypted_text, $decrypted_text, $private_key_pem)) {
    sendMessage($chat_id, "Decrypted (RSA): $decrypted_text");
} else { 
    sendMessage($chat_id, "Decryption failed: " . openssl_error_string());
} } else {
        sendMessage($chat_id, "Please provide encrypted text to decrypt.");
    }
} else {
    sendMessage($chat_id, "Unknown command. Use /start to see available commands.");
}

?>

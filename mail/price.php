<?php
function generateSignature($data, $secretKey) {
    $signature = '';
    foreach ($data as $key => $value) {
        $signature .= $key . '=' . $value . '&';
    }
    $signature .= 'key=' . $secretKey;
    return md5($signature);
}

$data = [
    'merchantId' => 'tu_merchant_id',
    'accountId' => 'tu_account_id',
    'description' => 'Descripción del producto',
    'amount' => '10000',
    'currency' => 'COP',
    'returnUrl' => 'price.html',
    'test' => '1'
];
$secretKey = 'tu_api_key';
$signature = generateSignature($data, $secretKey);
echo $signature;
?>

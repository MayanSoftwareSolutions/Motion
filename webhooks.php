<?php

define('DOMAIN_URL_PROJECT_PATH', 'https://0f03c590987a.ngrok.io/_Shopify/Webhooker/');

$array = array(
  'webhook' = array(
    'topic' => 'products/create',
    'address' => DOMAIN_URL_PROJECT_PATH . 'webhooks/products/create.php',
    'format' => 'json'
  )
);

$webhooks = shopify_call($access_token, $shop_url, "/admin/api/2021-21/webhooks.json", $array, 'POST');
$webhooks = json_decode($webhooks['response'], true);

echo print_r( $webhooks );
?>

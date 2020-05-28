
<?php

function login()
{

define('USER_AGENT', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.2309.372 Safari/537.36');

define('COOKIE_FILE', 'cookie.txt');


define('LOGIN_FORM_URL', 'https://example.com');


define('LOGIN_ACTION_URL', 'https://example.com');

$postValues = array(
    'username' => 'user',
    'password' => 'pass',
    'check' => '',
    'loginSubmit' => ''
);

$curl = curl_init();


curl_setopt($curl, CURLOPT_URL, LOGIN_ACTION_URL);

curl_setopt($curl, CURLOPT_POST, true);

curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postValues));


curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


curl_setopt($curl, CURLOPT_COOKIEJAR, COOKIE_FILE);


curl_setopt($curl, CURLOPT_USERAGENT, USER_AGENT);


curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


curl_setopt($curl, CURLOPT_REFERER, LOGIN_FORM_URL);

curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);


return curl_exec($curl);
}

$login = login();


?>

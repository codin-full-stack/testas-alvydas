<?
echo 'in php';
function getIp(){

    $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    var_dump($ip);
    var_dump(gettype($ip));
    return $ip;
}

$ip = getIP();
var_dump($ip);


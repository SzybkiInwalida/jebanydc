```php
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$data = "IP: $ip | UA: $ua | " . date('Y-m-d H:i:s') . "\n";
file_put_contents("ips.txt", $data, FILE_APPEND);
?>
```


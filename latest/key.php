<?php
$length = isset($argv[1]) ? (int) $argv[1] : 32;

echo 'base64:'.base64_encode(random_bytes($length ?: 32));
echo PHP_EOL;

<?php

require 'vendor/autoload.php';
require 'config.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

$bucket = 'YOUR_BUCKET_NAME'; //Your Bucket Name 
$keyname = 'YOUR_FILE_NAME'; //And Your File Name 

try {
    // Get the object.
    $result = $client->getObject([
        'Bucket' => $bucket,
        'Key'    => $keyname
    ]);

    // Display the object in the browser.
    header("Content-Type: {$result['ContentType']}");
    echo $result['Body'];
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
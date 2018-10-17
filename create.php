<?php
require 'vendor/autoload.php';
require 'config.php';
use Aws\S3\S3Client;
 
$bucketName = 'YOUR_BUCKET_NAME'; // Your Bucket Name

try {
    $result = $client->createBucket([
        'Bucket' => $bucketName, // REQUIRED
        'ACL'    => 'public-read',
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    // output error message if fails
    echo $e->getMessage();
}
?>
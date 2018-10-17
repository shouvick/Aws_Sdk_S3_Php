<?php
require 'vendor/autoload.php';
require 'config.php';
use Aws\S3\S3Client;
 
$bucketName = 'YOUR_BUCKET_NAME';// Bucket Name
$file_Path = "YOUR_FILE_ROOT_DIRECTORY"; // Your Image From Root Directory
$key = basename($file_Path);

 
// Upload a publicly accessible file. The file size and type are determined by the SDK.
try {
    $result = $client->putObject([
        'Bucket' => $bucketName,
        'Key'    => $key,
        'Body'   => fopen($file_Path, 'r'),
        'ACL'    => 'public-read',
    ]);
    echo $result->get('ObjectURL');
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
    echo $e->getMessage();
}
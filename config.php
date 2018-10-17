<?php 
		require 'vendor/autoload.php';
		use Aws\S3\S3Client;

		$client = new S3Client([
		    'version' => 'latest',
		    'region' => 'YOUR_REGION',
		    'credentials' => [
		        'key'    => 'YOUR_ACCESS_KEY',
		        'secret' => 'YOUR_SECRET_KEY'
		    ]
		]);

?>
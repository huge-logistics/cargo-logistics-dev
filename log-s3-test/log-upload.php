<?php

// Include the SDK using the composer autoloader
require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
	'region'  => 'us-east-1',
	'version' => 'latest',
	'credentials' => [
	    'key'    => "AKIAWHEOTHRFSGQITLIY",
	    'secret' => "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",
	]
]);

// Send a PutObject request and get the result object.
$key = 'transact.log';

$result = $s3->putObject([
	'Bucket' => 'huge-logistics-transact',
	'Key'    => $key,
	'SourceFile' => 'transact.log'
]);

// Print the body of the result by indexing into the result object.
var_dump($result);

?>

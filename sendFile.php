<?php
/**
* $Id$
*
* S3 class usage
*/
function send_file($content, $fileNameIn, $source) {

if (!class_exists('S3')) require_once 'S3.php';

// AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJY6WNYPOX4LMCM3Q');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

$theFileName = uniqid($source.".");
$theFileName = $theFileName.".".$fileNameIn;


// Check for CURL
if (!extension_loaded('curl') && !@dl(PHP_SHLIB_SUFFIX == 'so' ? 'curl.so' : 'php_curl.dll'))
	exit("\nERROR: CURL extension not loaded\n\n");

// Instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);


// Put our file (also with public read access)
$s3->putObject($content, "s3test5409641e17cfd", baseName($theFileName), S3::ACL_PUBLIC_READ);

}

?>
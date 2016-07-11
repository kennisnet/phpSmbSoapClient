This is a PHP client for submitting SMO data to Edurep via SOAP.

Requirements:
 - PHP 5.1 or higher compiled with soap and simplexml
 - define a timezone with date_default_timezone_set()
 - $supplierId supplied by Kennisnet
 - Whitelisted IP or IP-range

Usage:
View the example files for the insert, update and delete calls for details using this package.

$client = new SmbSoapClient($supplierId);

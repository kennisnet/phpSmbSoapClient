<?php
# for execution in the composer root dir with kennisnet/smbsoapclient required
require __DIR__ . '/vendor/autoload.php';
use Kennisnet\SmbSoapClient\SmbSoapClient;

date_default_timezone_set('Europe/Amsterdam');

$client = new SmbSoapClient( "kennisnet" );

$client->setSmoId( "smbphp.1" );
$client->delete();

print_r( $client );

?>

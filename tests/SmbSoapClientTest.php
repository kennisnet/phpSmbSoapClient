<?php
use Kennisnet\SmbSoapClient\SmbSoapClient;

class SmbSoapClientTest extends PHPUnit_Framework_TestCase {

  public function testSmbSoapClientSetSmoId()
  {
    $smbsoapclient = new SmbSoapClient;
    $this->assertTrue($smbsoapclient->setSmoId(123));
  }

}

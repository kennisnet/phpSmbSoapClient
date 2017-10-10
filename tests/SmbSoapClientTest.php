<?php
namespace Test\Kennisnet\SmbSoapClient;

use Kennisnet\SmbSoapClient\SmbSoapClient;
use PHPUnit\Framework\TestCase;

class SmbSoapClientTest extends TestCase
{
    public function testResourceValidator()
    {
        $uris = [
            'test' => false,
            'k-:publicatie:5141' => true,
            'kennislink:publicatie:reree' => true,
            'http://www.kennislink.nl/publicaties/slimme-auto-plooit-zich-naar-botsing' => true,
            'urn:uuid:3722d659-80fe-4215-9502-cfea6e8272e6' => true,
            'urn:wikiwijsmaken:105181' => true,
            'ftp://ftp.is.co.za/rfc/rfc1808.txt' => true,
            'http://www.ietf.org/rfc/rfc2396.txt' => true,
            'urn:oasis:names:specification:docbook:dtd:xml:4.1.2' => true,
            'http://www.FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG.com' => false,
            'http://nl.wikipedia.org/wiki/Luis_Alberto_Suárez' => true,
            'http://nl.wikipedia.org/wiki/†_(album' => true
        ];

        $results = [];

        foreach ($uris as $uri => $expectedResult) {
            $result = SmbSoapClient::validateResource($uri);

            $results[$uri] = $result;
        }

        $this->assertEquals($results, $uris);
    }
}

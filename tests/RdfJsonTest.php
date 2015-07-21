<?php

use MarmottaClient\Util\RdfJson ;


class RdfJsonTest extends \PHPUnit_Framework_TestCase
{


    public function testParseJson()
    {

        $json = '{
  "http://example.com/resource/r1" : {
    "http://example.com/resource/p1" : [ {
      "value" : "Test Data",
      "type" : "literal",
      "graphs" : [ "http://pre.ximdex.net:8080/marmotta/context/default" ]
    } ]
  }
}';
        $uri = "http://example.com/resource/r1" ;
        $obj = RdfJson::decode_metadata( $uri , $json ) ;
        $this->assertCount(  1 ,  $obj  )  ;
    }


}
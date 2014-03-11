<?php
//require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example2 extends PHPUnit_Extensions_SeleniumTestCase
{
protected function setUp()
{
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://google.com");
    $this->prepareTestSession();
}

/**
 * @test
 */
public function test()
{
    $this->open('/');
    $this->assertSame('Google', $this->getTitle());
}

}

?>
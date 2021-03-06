<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://localhost:4000");
  }

  public function testMyTestCase()
  {
    $this->open("/trav/index.php");
    $this->type("name=txtUsername", "chabela");
    $this->type("name=txtPassword", "perez");
    $this->click("css=input[type=\"submit\"]");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Menu", $this->getText("css=h3"));    
  }
}
?>
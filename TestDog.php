
<?php

require_once('plush_labrador_class.php');
require_once('pug_class.php');
require_once('rubber_dachshund_class.php');
require_once('dachshund_class.php');
require_once('siba_inu_class.php');


class DogTests extends PHPUnit_Framework_TestCase
{
    private $dachshund;
    private $sibu_inu;
    private $plush_labrador;
    private $pug;
    private $rubber_dachshund;
 
    protected function setUp()
    {
        $this->dachshund = new dachshund();
        $this->sibu_inu = new siba_inu();
        $this->plush_labrador = new plush_labrador();
        $this->pug = new pug();
        $this->rubber_dachshund = new rubber_dachshund();
    }
 
    protected function tearDown()
    {
        $this->dachshund = NULL;
        $this->sibu_inu = NULL;
        $this->plush_labrador = NULL;
        $this->pug = NULL;
        $this->rubber_dachshund = NULL;
    }
 
    public function testdachshund()
    {
        $result = $this->dachshund->entity_fun("voice");
        $this->assertEquals("woof! woof!", $result);

        $result = $this->dachshund->entity_fun("hunt");
        $this->assertEquals("I'm hunted!!", $result);
    }
 
    public function testsibu_inu()
    {
        $result = $this->sibu_inu->entity_fun("voice");
        $this->assertEquals("woof! woof!", $result);

        $result = $this->sibu_inu->entity_fun("hunt");
        $this->assertEquals("I'm hunted!!", $result);
    }

    public function testplush_labrador()
    {
        $result = $this->plush_labrador->entity_fun("hey");
        $this->assertEquals("You see before just a plush toy", $result);
    }

    public function testpug()
    {
        $result = $this->pug->entity_fun("voice");
        $this->assertEquals("woof! woof!", $result);
    }

    public function testrubber_dachshund()
    {
        $result = $this->rubber_dachshund->entity_fun("squeak");
        $this->assertEquals("squeak! squeak! ", $result);
    }
}


?>
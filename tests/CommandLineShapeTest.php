<?php
use PHPUnit\Framework\TestCase;
require_once 'shape\ApplicationFactory.php';
require_once 'shape\ShapeFactory.php';

final class CommandLineShapeTest extends TestCase
{

    /**
     * Returns string that represent small tree shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommandLineSmallTreeShape() {
        $shape  = "   +"       . PHP_EOL;
        $shape .= "   X"       . PHP_EOL;
        $shape .= "  XXX"      . PHP_EOL;
        $shape .= " XXXXX"     . PHP_EOL;
        $shape .= "XXXXXXX"    . PHP_EOL;
        return $shape;
    }

    /**
     * Returns string that represent medium tree shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommandLineMediumTreeShape() {
        $shape  = "     +"         . PHP_EOL;
        $shape .= "     X"         . PHP_EOL;
        $shape .= "    XXX"        . PHP_EOL;
        $shape .= "   XXXXX"       . PHP_EOL;
        $shape .= "  XXXXXXX"      . PHP_EOL;
        $shape .= " XXXXXXXXX"     . PHP_EOL;
        $shape .= "XXXXXXXXXXX"    . PHP_EOL;
        return $shape;
    }

    /**
     * Returns string that represent large tree shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommandLineLargeTreeShape() {
        $shape  = "         +"             . PHP_EOL;
        $shape .= "         X"             . PHP_EOL;
        $shape .= "        XXX"            . PHP_EOL;
        $shape .= "       XXXXX"           . PHP_EOL;
        $shape .= "      XXXXXXX"          . PHP_EOL;
        $shape .= "     XXXXXXXXX"         . PHP_EOL;
        $shape .= "    XXXXXXXXXXX"        . PHP_EOL;
        $shape .= "   XXXXXXXXXXXXX"       . PHP_EOL;
        $shape .= "  XXXXXXXXXXXXXXX"      . PHP_EOL;
        $shape .= " XXXXXXXXXXXXXXXXX"     . PHP_EOL;
        $shape .= "XXXXXXXXXXXXXXXXXXX"    . PHP_EOL;
        return $shape;
    }

    /**
     * Returns string that represent small star shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommanLineSmallStarShape() {
        $shape  = "   +"       . PHP_EOL;
        $shape .= "   X"       . PHP_EOL;
        $shape .= "+XXXXX+"    . PHP_EOL;
        $shape .= "   X"       . PHP_EOL;
        $shape .= "   +"       . PHP_EOL;
        return $shape;
    }

    /**
     * Returns string that represent medium star shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommandLineMediumStarShape(){
        $shape  = "     +"         . PHP_EOL;
        $shape .= "     X"         . PHP_EOL;
        $shape .= "   XXXXX"       . PHP_EOL;
        $shape .= "+XXXXXXXXX+"    . PHP_EOL;
        $shape .= "   XXXXX"       . PHP_EOL;
        $shape .= "     X"         . PHP_EOL;
        $shape .= "     +"         . PHP_EOL;
        return $shape;
    }

    /**
     * Returns string that represent large star shape that should be printed in command line.
     * 
     * @return string
     */
    private function getCommandLineLargeStarShape() {
        $shape  = "         +"           . PHP_EOL;
        $shape .= "         X"           . PHP_EOL;
        $shape .= "       XXXXX"         . PHP_EOL;
        $shape .= "     XXXXXXXXX"       . PHP_EOL;
        $shape .= "   XXXXXXXXXXXXX"     . PHP_EOL;
        $shape .= "+XXXXXXXXXXXXXXXXX+"  . PHP_EOL;
        $shape .= "   XXXXXXXXXXXXX"     . PHP_EOL;
        $shape .= "     XXXXXXXXX"       . PHP_EOL;
        $shape .= "       XXXXX"         . PHP_EOL;
        $shape .= "         X"           . PHP_EOL;
        $shape .= "         +"           . PHP_EOL;
        return $shape;
    }

    /**
     * Test Command line small Tree shape.
     */
    public function testCheckCommandLineSmallTreeShape()
    {
        
        $small_tree = $this->getCommandLineSmallTreeShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'S' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $small_tree, $output );
    }

    /**
     * Test Command line medium Tree shape.
     */
    public function testCheckCommandLineMediumTreeShape()
    {
        $medium_tree = $this->getCommandLineMediumTreeShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'M' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $medium_tree, $output );
    }

    /**
     * Test Command line large Tree shape.
     */
    public function testCheckCommandLineLargeTreeShapeForCmd()
    {
        
        $large_tree = $this->getCommandLineLargeTreeShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'L' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $large_tree, $output );
    }

    /**
     * Test Command line small Star shape.
     */
    public function testCheckCommandLineSmallStarShape()
    {
        $small_star = $this->getCommanLineSmallStarShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'S' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $small_star, $output );
    }

    /**
     * Test Command line medium Star shape.
     */
    public function testCheckCommandLineMediumStarShape()
    {
        $medium_star = $this->getCommandLineMediumStarShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'M' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $medium_star, $output );
    }

    /**
     * Test Command line large Star shape.
     */
    public function testCheckCommandLineLargeStarShape()
    {
        $large_star = $this->getCommandLineLargeStarShape();
        $application = ApplicationFactory::create();

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'L' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $large_star, $output );
    }
    
}
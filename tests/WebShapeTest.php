<?php
use PHPUnit\Framework\TestCase;
require_once 'shape\ApplicationFactory.php';
require_once 'shape\ShapeFactory.php';

final class WebShapeTest extends TestCase
{

    /**
     * Returns string that represent small tree shape that should be printed in web browser.
     * 
     * @return string
     */
    private function getWebSmallTreeShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "+"      . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "X"      . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                   .   "XXX"     . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;"                                     .  "XXXXX"    . '<br />';
        $shape .= ""                                                       . "XXXXXXX"   . '<br />';
        return $shape;
    }

    /**
     * Returns string that represent medium tree shape that should be printed in web browser.
     * 
     * @return string
     */
    private function getWebMediumTreeShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  .     "+"      . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  .     "X"      . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                    .    "XXX"     . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                      .   "XXXXX"    . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                        .  "XXXXXXX"   . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;"                                                                          . "XXXXXXXXX"  . '<br />';
        $shape .= ""                                                                                            ."XXXXXXXXXXX" . '<br />';
        return $shape;
    }

    /**
     * Returns string that represent large tree shape that should be printed in web browser.
     * 
     * @return string
     */
    private function getWebLargeTreeShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  .         "+"           . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  .         "X"           . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                    .        "XXX"          . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                      .       "XXXXX"         . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                        .      "XXXXXXX"        . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                          .     "XXXXXXXXX"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                                            .    "XXXXXXXXXXX"      . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                                                              .   "XXXXXXXXXXXXX"     . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                                                                                .  "XXXXXXXXXXXXXXX"    . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;"                                                                                                                                                  . "XXXXXXXXXXXXXXXXX"   . '<br />';
    $shape .= ""                                                                                                                                                                        ."XXXXXXXXXXXXXXXXXXX"  . '<br />';
        return $shape;
    }

    /**
     * Returns string that represent small star shape that should be printed in web browser.
     * 
     * @return string
     */
    private function getWebSmallStarShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "+"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "X"       . '<br />';
        $shape .= ""                                                       . "+XXXXX+"    . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "X"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .    "+"       . '<br />';
        return $shape;
    }

    /**
     * Returns string that represent medium star shape that should be printed in web browser.
     * 
     * @return string
     */    
    private function getWebMediumStarShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .      "+"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .      "X"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                     .    "XXXXX"     . '<br />';
        $shape .= ""                                                                                           . "+XXXXXXXXX+"  . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                     .    "XXXXX"     . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .      "X"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .      "+"       . '<br />';        
        return $shape;
    }

    /**
     * Returns string that represent large star shape that should be printed in web browser.
     * 
     * @return string
     */ 
    private function getWebLargeStarShape() {
        $shape  = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .                "+"             . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .                "X"             . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                     .              "XXXXX"           . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                         .            "XXXXXXXXX"         . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                                                             .          "XXXXXXXXXXXXX"       . '<br />';
        $shape .= ""                                                                                                                                                                   .       "+XXXXXXXXXXXXXXXXX+"    . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                                                             .          "XXXXXXXXXXXXX"       . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                                                         .            "XXXXXXXXX"         . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"                                     .              "XXXXX"           . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .                "X"             . '<br />';
        $shape .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .                "+"             . '<br />';
        return $shape;
    }

    /**
     * Test Web small Tree shape.
     */
    public function testCheckWebSmallTreeShape()
    {
        
        $small_tree = $this->getWebSmallTreeShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'S' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $small_tree, $output );
    }

    /**
     * Test Web medium Tree shape.
     */
    public function testCheckWebMediumTreeShape()
    {
        
        $medium_tree = $this->getWebMediumTreeShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'M' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $medium_tree, $output );
    }

    /**
     * Test Web large Tree shape.
     */
    public function testCheckWebLargeTreeShape()
    {
        
        $large_tree = $this->getWebLargeTreeShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Tree', 'L' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $large_tree, $output );
    }

    /**
     * Test Web small Star shape.
     */
    public function testCheckWebSmallStarShape()
    {
        $small_star = $this->getWebSmallStarShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'S' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $small_star, $output );
    }

    /**
     * Test Web medium Star shape.
     */
    public function testCheckWebMediumStarShape()
    {
        $medium_star = $this->getWebMediumStarShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'M' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $medium_star, $output );
    }

    /**
     * Test Web large Star shape.
     */    
    public function testCheckWebLargeStarShape()
    {
        $large_star = $this->getWebLargeStarShape();
        $application = ApplicationFactory::create( 'Web' );

        ob_start(); //Start output buffer
        $object = ShapeFactory::create( 'Star', 'L' );
        $object->draw( $application );
        $output = ob_get_clean(); //Grab output
        
        $this->assertEquals( $large_star, $output );
    }

    
}
<?php
require_once 'ShapeInterface.php';
/**
 * Class implements ApplicationInterface interface.
 * It implements all functions that are common for every shape.
 * 
 * @author Nikola
 */
abstract class AbstractShape implements ShapeInterface {

    /**
     * Defines the size of a shape.
     * 
     */
    private $size;

    /**
     * Defines the building block of the shape.
     */
    protected $build_char;

    /**
     * Defines the building end block of the shape.
     */
    protected $end_char;

    /**
     * Initialze the values.
     */
    public function __construct( $size, $build_char = 'X', $end_char = '+' ) {
        $this->size = $size;
        $this->build_char = $build_char;
        $this->end_char = $end_char;
    }

    /**
     * Returns the building block.
     * 
     * @return string
     */
    protected function getBuildChar() : string {
        return $this->build_char;
    }

    /**
     * Returns the building end block.
     * 
     * @return string
     */
    protected function getEndChar() : string {
        return $this->end_char;
    }

    /**
     * Returns the concatenated string of $num buliding block characters.
     * 
     * @param int $num The number of repets.
     * @return string
     */
    protected function generateBuildCharacters( int $num ) : string {
        return str_repeat( $this->getBuildChar(), $num );
    }

    /**
     * Returns the shape's size.
     * 
     * @return string
     */
    public function getSize() : string {
        return $this->size;
    }

    
}
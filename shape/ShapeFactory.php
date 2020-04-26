<?php

require_once 'interface/AbstractShape.php';
require_once 'interface/implementation/TreeShape.php';
require_once 'interface/implementation/StarShape.php';


class ShapeFactory {

    /**
     * Defines all shapes.
     * 
     * @var array
     */
    public static function getAllShapes() : array {
        return [
            'Tree', 'Star'
        ];
    }

    /**
     * Defines all shape's sizes.
     * 
     * @var array
     */
    private static $all_sizes = [
        'S' => 5,
        'M' => 7,
        'L' => 11
    ];

    /**
     * Return's all shape's sizes.
     * 
     * @return array
     */
    public static function getAllSizes() : array {
        return array_keys( self::$all_sizes );
    }

    /**
     * Creates and returns a shape object based on provided type and size.
     * 
     * @param string $shape_type
     * @param string $size
     * @return ShapeInterface
     */
    public static function create( string $shape_type, string $size ) : ShapeInterface {

        if ( !in_array( $shape_type,  self::getAllShapes() ) ) {
            throw new Exception( 'Shape "' . $shape_type . '" doesn\'t exists! ' );
        }

        $all_sizes = self::getAllSizes();
        if ( !in_array( $size, $all_sizes ) ) {
            throw new Exception( 'Shape size: "' . $size . '" doesn\'t exists! ' );
        }

        $className = $shape_type . 'Shape';
        return new $className( self::$all_sizes[ $size ] );
    }
}
<?php

require_once 'shape/ShapeFactory.php';
require_once 'shape/ApplicationFactory.php';

//create application.
$application = ApplicationFactory::create();
$application->printHeader();
$application->drawLine( $application->getEol() ) ;

//get all shapes.
$all_shapes = ShapeFactory::getAllShapes();
if ( !is_array( $all_shapes ) || 0 === count( $all_shapes ) ) {
    $application->drawLine( 'Error: Shape classes are not defined!' . $application->getEol() ) ;
}

//get all sizes
$all_sizes = ShapeFactory::getAllSizes();

try {
    
    foreach( $all_shapes as $shape ) {
        foreach( $all_sizes as $size ) {
            $object = ShapeFactory::create( $shape, $size );
            $object->draw( $application );
        }
    }
}
catch ( Exception $ex ) {
    $application->drawLine( 'Error code: ' . $ex->getCode() . ' , Description: '  . $ex->getMessage() . $application->getEol() ) ;

}

$application->printFooter();

?>
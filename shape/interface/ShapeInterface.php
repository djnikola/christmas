<?php
/**
 * Interface of Shape object.
 * Every Shape object knows how to draw it's self in the provided application.
 * 
 * 
 * @author Nikola Dordevic
 */
interface ShapeInterface {

    /**
     * Shape draws it's self in the applucation.
     * 
     * @param ApplicationInterface $application
     * @return void
     */
    function draw( ApplicationInterface $application );

}
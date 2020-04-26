<?php

interface ShapeInterface {

    /**
     * Shape draws it's self in the applucation.
     * 
     * @param ApplicationInterface $application
     * @return void
     */
    function draw( ApplicationInterface $application );

}
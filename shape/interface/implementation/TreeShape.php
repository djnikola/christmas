<?php 

class TreeShape extends AbstractShape {

    /**
     * Shape draws it's self in the applucation.
     * 
     * @param ApplicationInterface $application
     * @return void
     */
    function draw( ApplicationInterface $application ) {
        //maximas line width.
        $max_line_width = ( $this->getSize() -1 )* 2 - 1;
        
        //the middle character.
        $middle = floor( $max_line_width/ 2 );
        
        //print end charachter.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getEndChar() . $application->getEol();
        $application->drawLine( $line );

        //print build charachter.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getBuildChar() . $application->getEol();
        $application->drawLine( $line );

        $shape_width = 1;
        $space_line = $middle -1;
        for( $i = 1; $i < ( $this->getSize() -1 ); $i++ ) {
            //increase shape width.
            $shape_width += 2;

            $line = $application->generateSpaceCharacters( $space_line-- ) . $this->generateBuildCharacters( $shape_width ) . $application->getEol();
            $application->drawLine( $line );
        }
    }
    
}
<?php 


class StarShape extends AbstractShape {
    
    /**
     * Shape draws it's self in the applucation.
     * 
     * @param ApplicationInterface $application
     * @return void
     */
    function draw( ApplicationInterface $application ) {
        //number of loops.
        $loop_number = $this->getSize() - 4;
        
        //maximas line width.
        $max_line_width = 5 + ceil( $loop_number / 2 ) * 4;
        
        //the middle character.
        $middle = floor( $max_line_width / 2 ) -1;

        //the middle character line index.
        $middle_line_idex = floor( $loop_number / 2 );
        
        //print end charachter.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getEndChar() . $application->getEol();
        $application->drawLine( $line );

        //print first build character.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getBuildChar() . $application->getEol();
        $application->drawLine( $line );

        $shape_width = 1;
        $space_line = $middle;
        for ( $i = 0; $i < $loop_number; $i++ ) {
            /**
             * increase the size if we have reached the middle or the index is less then middle line index.
             * decrease the size if we have passed the middle.
             */
            $shape_width = ( $i <= $middle_line_idex ) ? $shape_width + 4 : $shape_width - 4;

            //print special characters for middle line.
            if ( $i == $middle_line_idex ) {
                $line =  $application->generateSpaceCharacters( $middle - floor( $shape_width / 2 ) - 1 ) . $this->getEndChar() . $this->generateBuildCharacters( $shape_width ) . $this->getEndChar() . $application->getEol();
            }
            else {
                $line = $application->generateSpaceCharacters( $middle - floor( $shape_width / 2 ) ) . $this->generateBuildCharacters( $shape_width ) . $application->getEol();
            }
            $application->drawLine( $line );
        }

        //print first build character.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getBuildChar() . $application->getEol();
        $application->drawLine( $line );
        
        //print end charachter.
        $line = $application->generateSpaceCharacters( $middle ) . $this->getEndChar() . $application->getEol();
        $application->drawLine( $line );

    }
}

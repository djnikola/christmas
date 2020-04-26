<?php

interface ApplicationInterface {

    /**
     * Returns Application's End Of Line.
     *      
     * @return string
     */
    public function getEol() : string;

    /**
     * Returns Application's space character.
     * 
     * @return string
     */
    public function getSpaceChar() : string;

    /**
     * Returns block of $num space characters.
     *      
     * @param int $num The number of space characters.
     * @return string
     */
    public function generateSpaceCharacters( int $num ) : string;

    /**
     * Draws the line in Application.
     * 
     * @param string The line to draw.
     * @return void
     */
    public function drawLine( string $line );

    /**
     * Prints the Application's header. 
     * 
     * @return void
     */
    public function printHeader();

    /**
     * Prints the Application's footer. 
     * 
     * @return void
     */
    public function printFooter();

}
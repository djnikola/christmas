<?php
require_once 'ApplicationInterface.php';

abstract class AbstractApplication implements ApplicationInterface {

    /**
     * Defines the application's End Of Line.
     * 
     * @var string
     */
    protected $eol;

    /**
     * Defines the application's space character.
     * 
     * @var string
     */
    protected $space_char;

    /**
     * {@inheritDoc}
     */
    public function getEol() : string {
        return $this->eol;
    }

    /**
     * {@inheritDoc}
     */
    public function getSpaceChar() : string {
        return $this->space_char;
    }

    /**
     * {@inheritDoc}
     */
    public function generateSpaceCharacters( int $num ) : string {
        return str_repeat( $this->getSpaceChar(), $num );
    }

    /**
     * {@inheritDoc}
     */
    public function printHeader() : void {
    }

    /**
     * {@inheritDoc}
     */
    public function printFooter() : void {
    }
}

?>
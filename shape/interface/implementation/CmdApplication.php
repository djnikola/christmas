<?php 

/**
 * Class defines Command Line application.
 * @author Nikola
 */
class CmdApplication extends AbstractApplication {

    /**
     * Initialize the properties.
     */
    public function __construct() {
        $this->eol = PHP_EOL;

        $this->space_char = ' ';
    }

    /**
     * {@inheritDoc}
     */
    public function drawLine( string $line ) : void {
        echo $line;
    }

    /**
     * {@inheritDoc}
     */
    public function printHeader() : void {
        echo '******* Header *******' . $this->eol;
    }

    /**
     * {@inheritDoc}
     */
    public function printFooter() : void{
        echo '******* Footer *******' . $this->eol;
    }
}

?>
    
<?php 

/**
 * Class defines Command Line application.
 * @author Nikola
 */
class WebApplication extends AbstractApplication {

    /**
     * Initialize the properties.
     */
    public function __construct() {
        $this->eol = '<br />';

        $this->space_char = '&nbsp;&nbsp;&nbsp;';
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
        echo '<head><body>';
    }

    /**
     * {@inheritDoc}
     */
    public function printFooter() : void {
        echo '</body></head>';
    }
}
?>
    
<?php 

/**
 * Class extends AbstractApplication abstract class and defines Web application object.
 * 
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
    public function drawLine( string $line ) {
        echo $line;
    }

    /**
     * {@inheritDoc}
     */
    public function printHeader() {
        echo '<head><body>';
    }

    /**
     * {@inheritDoc}
     */
    public function printFooter() {
        echo '</body></head>';
    }
}
?>
    
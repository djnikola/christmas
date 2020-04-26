<?php

require_once 'interface/AbstractApplication.php';
require_once 'interface/implementation/CmdApplication.php';
require_once 'interface/implementation/WebApplication.php';
/**
 * Creates an Application object based on provided parametar.
 * 
 * @author Nikola 
 */
class ApplicationFactory {

    /**
     * Array of all available applications. 
     * NOTE: Please note that class file and class name that are implementing Application interface must follow the naming convension:
     * The item from the array + 'Application' string.
     * 
     * @var array
     */
    private static $all_applications = [
        'Cmd', 'Web'
    ];

    /**
     * Returns all available applications.
     */
    public static function getAllApplications() : array {
        return self::$all_applications;
    }

    /**
     * Creates and returns an Application object based on provided application name.
     * In case the name is not provided, function auto detect application. 
     * 
     * @param string $application_name Application name.
     * @return ApplicationInterface
     */
    public static function create( $application_name = null ) : ApplicationInterface {

        if ( null === $application_name ) {
            $application_name = ( php_sapi_name() == 'cli' ) ? 'Cmd' :  'Web';
        }

        if ( !in_array( $application_name, self::getAllApplications() ) ) {
            throw new Exception( 'Application "' . $application_name . '" is not supported! ' );
        }

        $class_name = $application_name . "Application";
        return new $class_name();
    }
}
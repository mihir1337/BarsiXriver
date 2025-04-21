<?php

spl_autoload_register(function ($class_name) {

    //prefix for plugin namespace
    $prefix = 'ElementHelper\\';
    $widget_prefix = 'ElementHelper\Widget\\';
    $filepath = '';

    //get length from namespace
    $len = strlen($prefix);

    //compare namespace exists in class name
    if (strncmp($prefix, $class_name, $len) !== 0) {
        // exist from next registered autoloader
        return;
    }

    //get the relative class name
    $relative_class = substr($class_name, $len);
    $widget_class = explode("\\", $relative_class);


    //replace the namespace prefix with the base directory, replace namespace
    //separators with directory separators in the relative class name
    if( 'Helper' === $relative_class ) {
        $file     = strtolower($relative_class);
        $path     = BARSI_CORE_DIR . 'inc/';
        $filepath = $path . $file . '.php';
    }
    elseif ( 'Element_El' === substr( end($widget_class), 0, 10 ) ) {
        $class_name = end( $widget_class );
        $file     = str_replace( '_', '-', strtolower( $class_name ) );
        $path     = BARSI_CORE_DIR . 'classes/';
        $filepath = $path . $file . '.php';
    }
    elseif( in_array( 'Widget', $widget_class ) ) {
        $class_name = end( $widget_class );
        $file     = str_replace( '_', '-', strtolower( $class_name ) );
        $path     = BARSI_CORE_DIR . 'elementor-widgets/';
        $filepath = $path . $file .'/'. $file .'-widget.php';
    }

    // if the file exists, require it
    if (file_exists($filepath)) {
        require_once $filepath;
    }

});
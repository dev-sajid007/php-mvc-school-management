<?php
/**
 * Simple PSR-4 style autoloader for the "App\" namespace
 */

spl_autoload_register(function ($class) {
    // Project-specific namespace prefix
    $prefix = 'App\\';

    // Base directory for the namespace
    $baseDir = __DIR__ . '/app/';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // If not in our namespace, move to the next autoloader
        return;
    }

    // Get the relative class name (remove namespace prefix)
    $relativeClass = substr($class, $len);

    // Replace namespace separators with directory separators
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // Require the file if it exists
    if (file_exists($file)) {
        require $file;
    }
});

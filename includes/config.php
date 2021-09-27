<?php
session_start(); // Start session
error_reporting(-1); // Report all errors
ini_set("display_errors", 1); // Display errors

// Autoload classes
function __autoload($class_name) {
    include "classes/" . $class_name . ".class.php";
}

/* Database settings (localhost) */
define("DBHOST", "localhost");
define("DBUSER", "wordpressportfolio");
define("DBPASS", "password");
define("DBDATABASE", "wordpressportfolio"); 
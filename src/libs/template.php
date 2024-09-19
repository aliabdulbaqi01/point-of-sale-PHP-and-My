<?php
// template.php

class Template
{
    protected static $sections = [];
    protected static $layout;

    // Start a section
    public static function section($name)
    {
        ob_start(); // Start output buffering
        self::$sections[$name] = ''; // Initialize the section
    }

    // End a section and save its content
    public static function endSection()
    {
        $content = ob_get_clean(); // Get the buffered output and clean the buffer
        $keys = array_keys(self::$sections);
        $lastKey = end($keys);
        self::$sections[$lastKey] = $content; // Save content to the section
    }

    // Extend a layout (like @extends)
    public static function extend($layout)
    {
        self::$layout = $layout;
    }

    // Render the final output
    public static function render()
    {
        extract(self::$sections); // Extract sections as variables
        include self::$layout; // Include the layout
    }
}

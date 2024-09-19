<?php
// index.php

require_once __DIR__ . "/../src/bootstrap.php";

// Set the layout
Template::extend('dashboard.php');

// Start defining the title section
Template::section('title');
echo 'Home Page';
Template::endSection();

// Start defining the content section
Template::section('content');
?>

<?php
Template::endSection();

// Render the final output
Template::render();

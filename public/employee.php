<?php
require_once __DIR__ . '/../src/bootstrap.php';

// extends from the dashboard
template::extend('dashboard.php');

// defining the title section of page and title in the head
Template::section('title');
echo 'Employee';
Template::endSection();
Template::section('content');
?>

<?php
Template::endSection();

Template::render();

<?php


/*
 * return a styled container with the data and stop the script
 * for debugging
 */
function dd($var) {
    echo '<div style="background: rgba(6,14,61,0.53); color: #b7b7b7">';
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    echo '</div>';
    die();
}


/*
 * require the file from include folder and pass data
 */
function view(string $filename, array $data = []): void
{
    // create variables from the associative array
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require_once __DIR__ . '/../inc/' . $filename . '.php';
}

/*
 * redirect the user to the route
 */

function route(string $url): void
{
    header("Location: $url.php");
    exit;
}
<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function view_admin($name, $data = [])
{
    extract($data);

    return require "app/views/admin/{$name}.view.php";
}

function view_admin_user($name, $data = [])
{
    extract($data);

    return require "app/views/admin/user/{$name}.view.php";
}


/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");

}
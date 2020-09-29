<?php

define("SITE", "Site MVC PHP");

define("URL_BASE", "http://localhost/sitemvcphp");

define("DEBUG", true);

define("DATA_LAYER_CONFIG", [
    "driver" => "sqlsrv",
    "host" => "localhost",
    "port" => "1433",
    "dbname" => "database",
    "username" => "user",
    "passwd" => "password",
    "options" => [
        //PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return URL_BASE . "/{$uri}";
    }

    return URL_BASE;
}

/**
 * @param string|null $uri
 * @return string
 */
function assets(string $uri = null): string
{
    if ($uri) {
        return URL_BASE . "/Themes/assets/{$uri}";
    }

    return URL_BASE;
}
<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 30/03/2017
 * Time: 14:37
 */

if (!function_exists('classAutoLoader')) {
    function classAutoLoader($className)
    {
        $fileName = 'src/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($fileName)) {
            require_once $fileName;
        }
    }
}
spl_autoload_register('classAutoLoader');
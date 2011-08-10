<?php
/**
 * Web stub for the Zend Framework MVC
 *
 * This file acts as a generic stub for accessing the application via the Web.
 *
 * @package ZF-Skeleton
 * @author Ryan Chouinard <rchouinard@gmail.com>
 * @link https://github.com/rchouinard/zf-skeleton
 */

// APP_ENV can be defined via auto_prepend, the hidef extension, or through the
// Web server or other method if setting environment variables.
//
// The default environment is defined as "development" if not otherwise given.
defined('APP_ENV')
    || define('APP_ENV', getenv('APP_ENV') ? getenv('APP_ENV') : 'development');

// Load Zend_Application and process the configuration file. Additional include
// paths and other settings are given in the config.
require 'Zend/Application.php';
$application = new Zend_Application(
    APP_ENV,
    '../application/configs/application.xml'
);

// Bootstrap the applicationa and run the request.
$application
    ->bootstrap()
    ->run();
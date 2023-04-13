#!/usr/bin/env php
<?php
/**
 * happy coding!!!
 */

use Tinydb\TinyDB;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var \Tinydb\Databases $db */
$db = TinyDB::open("kj_100");
$db->table("useres");
var_dump($db);
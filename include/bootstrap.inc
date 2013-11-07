<?php

/* Bootstrapping */
include ('class.config.inc');
include ('class.sdb.inc');
include ('lang.nl.inc');

$config = new Config();
$db =& new sdb("mysql:host={$config->db('host')};dbname={$config->db('name')};charset=utf8", $config->db('user'), $config->db('pass'));


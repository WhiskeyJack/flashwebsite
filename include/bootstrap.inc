<?php

/* Bootstrapping */
include ('class.config.inc');

$config = new Config();

$provider = function() {
            $host = $config->db('host');
            $name = $config->db('name');
            $instance = new PDO("mysql:host={$host};dbname={$name};charset=utf8", 
                            $config->db('user'), 
                            $config->db('user'));
            $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $instance;
        };

//$factory = new StructureFactory($provider);

class StructureFactory {

    protected $provider = null;
    protected $connection = null;

    public function __construct(callable $provider) {
        $this->provider = $provider;
    }

    public function create($name) {
        if ($this->connection === null) {
            $this->connection = call_user_func($this->provider);
        }
        return new $name($this->connection);
    }

}
<?php

class Config {
    
    protected $ini_array = array();
    
    public function __construct($filename = '') {
        $filename = empty($filename) ? 'settings.ini' : $filename;
        $this->ini_array = parse_ini_file($filename, true);
    }
    
    /**
     * Returns a setting for the db configuration
     * Valid settins are host, name, user, pass
     * @param string $setting
     * @return type
     */
    public function db($setting) {
        if (isset($this->ini_array['database'][$setting]))
            return $this->ini_array['database'][$setting];
        return FALSE;
    }
    
    
}
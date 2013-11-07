<?php

class Config {
    
    protected $settings = array();
    protected $database = array();
    
    public function __construct($filename = '') {
        $filename = empty($filename) ? 'settings.ini' : $filename;
        $this->settings = parse_ini_file($filename, TRUE);
        $this->database = parse_ini_file('db.ini', FALSE);
    }
    
    /**
     * Returns a setting for the db configuration
     * Valid settins are host, name, user, pass
     * @param string $setting
     * @return type
     */
    public function db($setting) {
        if (isset($this->database[$setting]))
            return $this->database[$setting];
        return FALSE;
    }
    
    /**
     * Returns a setting for the site configuration
     * Valid settins are name, welcometitle etc
     * @param string $setting
     * @return type
     */
    public function site($setting) {
        if (isset($this->settings['site'][$setting]))
            return $this->settings['site'][$setting];
        return FALSE;
    }
    
    
}
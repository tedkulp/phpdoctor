<?php

require_once "phing/Task.php";
require_once "phpdoctor/classes/phpDoctor.php";

/**
 * A really basic Phing task for PHPDoctor
 *
 * @author Andrew Cobby <cobby@cobbweb.me>
 */

class PhpDoctorTask extends Task 
{
    /**
 	 * Path to INI file
	 * 
	 * @var string $_inifile
   	 */
	protected $_iniFile;
    
	/**
	 * Sets the INI file path
	 *
	 * @param string $file INI path
	 */
    public function setIniFile($file)
    {
        $this->_iniFile = (string) $file;
    }
    
	/**
	 * main() implementation
	 */
    public function main()
    {
        $phpdoc = new phpDoctor($this->_iniFile);
        $phpdoc->execute($phpdoc->parse());
    }
}
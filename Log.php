<?php 
class Log
{
    private $filename;
    private $handle;
    
    
    public function __construct($prefix = 'log')
    {
    	$this->setFilename($prefix);
    	$this->handle = fopen($this->filename, 'a');
    }
    public function logMessage($logLevel, $message)
	{
	    date_default_timezone_set('America/Chicago');
	    $log_entry = date('y-m-d h:i:s') . "[{$logLevel}]" . $message . PHP_EOL;
	    fwrite($this->handle, $log_entry);
	}
    
    public function log_error($username) 
    {
		$this->logMessage("ERROR", "User {$username} failed to log in.");	
	}	
    
    public function log_info($username)
    {
		$this->logMessage("INFO", "User {$username} logged in.");
	}

	public function setFilename($prefix) {
		$temp = "Log/" . $prefix . date('-y-m-d') . ".log";
		touch($temp);

		if (is_writable($temp)) {
			$this->filename = $temp;
		} else {
			echo "Error" . PHP_EOL;
		}
		
	}
	
	public function __destruct()
	{
		fclose($this->handle);
	}
    
}
 ?>
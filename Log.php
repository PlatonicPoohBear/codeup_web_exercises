<?php 
class Log
{
    private static $filename;
    private static $handle;
    
    
    public function __construct($prefix = 'log')
    {
    	self::$filename = "../Log/" . $prefix . date('-y-m-d') . ".log";
    	self::$handle = fopen(self::$filename, 'a');
    }
    public function logMessage($logLevel, $message)
	{
	    date_default_timezone_set('America/Chicago');
	    $log_entry = date('y-m-d h:i:s') . "[{$logLevel}]" . $message . PHP_EOL;
	    fwrite(self::$handle, $log_entry);
	}
    
    public function log_error($username) 
    {
		$this->logMessage("ERROR", "User {$username} failed to log in.");	
	}	
    
    public function log_info($username)
    {
		$this->logMessage("INFO", "User {$username} logged in.");
	}
	public function __destruct()
	{
		fclose(self::$handle);
	}
    
}
 ?>
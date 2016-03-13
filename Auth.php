<?php 

require_once '../Log.php';

class Auth
{
	

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	
	public static function attempt($username, $password) {
		if ($username == 'guest' && password_verify($password, self::$password)) {
			
			$log = new Log('cli');

			$sessionId = session_id();

			$_SESSION['logged_in_user'] = $username;

			$log->log_info($username);

			header("Location: http://codeup.dev/authorized.php");

			exit;
		} else {
			$log = new Log('cli');

			$log->log_error($username);
		}
	}

	public static function check() {
		if (isset($_SESSION['logged_in_user'])) {
			return true;
		} else {
			return false;
		}
	}

	public static function user() {
		return $_SESSION['logged_in_user'];
	}

	public static function logout() {
		session_unset();

	    // delete session data on the server
	    session_destroy();

	    // // ensure client is sent a new session cookie
	    // session_regenerate_id();


	    header("Location: http://codeup.dev/login.php");
	}
}

 ?>
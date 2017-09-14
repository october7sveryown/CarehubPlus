<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('CURRENT_DATETIME',		date('Y-m-d H:i:s'));

define('DOCUMENT_ROOT',		$_SERVER['DOCUMENT_ROOT'].'');
define('SUB_DIR',		'IWMF/');
//define('SUB_DIR',		'iwmf/v3/');


define('EMAIL_FROM',		'oldbook.2015gp@gmail.com');
define('EMAIL_NAME',		'OLDBOOKS');
define('SMS_FROM',		'(201) 885-6452');
define('ANDROID_API_ACCESS_KEY','');
define('KEY','');

define('FACEBOOK_APP_ID','');
define('FACEBOOK_APP_SECRET','');
define('TWITTER_CONSUMER_KEY','');
define('TWITTER_CONSUMER_SECRET','');



define('OFFSET', 3);


//way2sms credential
define('WAY2SMSID','');
define('WAY2SMSPASS','');

/* End of file constants.php */
/* Location: ./application/config/constants.php */
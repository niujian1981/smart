<?php 


ignore_user_abort();           // 即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行. 
set_time_limit(0);             // 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去 
$interval=20;                  // 时间间隔 单位 秒 

if (floor(PHP_VERSION) < 5){
    define('PHPVer',4);
}else{
    define('PHPVer',5);
}

define('FCPATH',__FILE__);
define('ROOTDIR',dirname(FCPATH).DIRECTORY_SEPARATOR);
define('COREDIR',ROOTDIR.'core'.DIRECTORY_SEPARATOR);
define('LIBDIR',COREDIR.'libs'.DIRECTORY_SEPARATOR);
define('INCDIR',COREDIR.'include'.DIRECTORY_SEPARATOR);
define('CTLDIR',COREDIR.'ctls'.DIRECTORY_SEPARATOR);
define('MODELDIR',COREDIR.'models'.DIRECTORY_SEPARATOR);
define('DATADIR',ROOTDIR.'data'.DIRECTORY_SEPARATOR);
define('PLUGINDIR',ROOTDIR.'plugins'.DIRECTORY_SEPARATOR);
require_once(INCDIR.'bootstrap.inc.php');

require_once(COREDIR.'loader.php');
require_once(INCDIR.'functions.php');
include_once(INCDIR.'plugin.php');

echo "start email send thread.................";
  do{ 
  	
  	$emailthreadstatus = getEmailThreadStatus();
    if ($emailthreadstatus=="1"){         // 如果=1 工作 send email 
    echo "email send on start to send email .................";
    /////////////////////  工作区间  ////////////////////////////////// 
		$lib_email = & loader::lib('email');
		$lib_email->initByDBSetup(true);
		$lib_email->sendmailfromqueue();
    /////////////////////////////////////////////////////////////////// 
    }
    else {
    	echo "email send off wait 20s .................";
    }
    break;
    sleep($interval);           // 等待$interval分钟 
  }while(true);

function getEmailThreadStatus(){
	//emailthread
	$mdl_codevalue = & loader::model('codevalue');
	return $mdl_codevalue->getValueByCode('EMAILSETUP','emailthread');	
}
?>
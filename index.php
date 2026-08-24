<?php
/******************************************************************************
* index.php
* .htaccess 설정으로 모든 URL은 index.php 파일로 온다.
* 주석 수정 - 2022-05-24
* 2022-06-19 github action. git-ftp test
******************************************************************************/

// error_reporting( E_ALL );
// error_reporting( E_ALL & ~E_NOTICE );
ini_set( "display_errors", 1 );

require_once 'application/libs/config.php';
require_once 'application/libs/function.php';
require_once 'application/libs/sql.php';
require_once 'application/libs/fun_thum_ksr.php';
require_once _ROOT.'/application/vender/autoload.php';

new \application\libs\Application();
?>
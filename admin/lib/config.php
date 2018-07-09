<?php if (!defined('_lib')) {
    die("Error");
}
error_reporting(E_ALL & ~E_NOTICE & ~8192);

$config_url = $_SERVER["SERVER_NAME"] . '/source_web_2';


#config minifier 
$config_minifier = true;

$config['database']['type'] = 'mysql';
$config['database']['host'] = 'localhost';
$config['database']['username'] = 'root';
$config['database']['password'] = 'mysql';
$config['database']['dbname'] = 'source_web_2';
$config['database']['charset'] = 'utf8';
$config['database']['prefix'] = 'table_';
$_SESSION['ckfinder_baseUrl'] = $config_url;
$ip_host = '127.0.0.1';
$mail_host = 'noreply@demo98.ninavietnam.com.vn';
$pass_mail = '1234qwer!@';

$config['lang'] = array('' => 'Tiếng Việt'); #Danh sách ngôn ngữ hỗ trợ
$config['phi'] = 0; #1-Thành phố/2-Quận/huyện
$config['author']['name'] = 'Nguyễn Đức Trí';
$config['author']['email'] = 'nguyenductri.nina@gmail.com';
$config['author']['timefinish'] = '11/11/2017';

date_default_timezone_set('Asia/Ho_Chi_Minh');

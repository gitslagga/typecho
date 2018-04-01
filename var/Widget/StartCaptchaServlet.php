<?php 
/**
 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
 * @author Tanxu
 */
//error_reporting(0);
require_once 'Geetestlib.php';

$GtSdk = new GeetestLib('f5ac7c8d782d1272ad3cec6d660b7046', '3acd8c85bbda1150273dafd16aa3fe25');
session_start();
$user_id = "957766762@qq.com";
$status = $GtSdk->pre_process($user_id);
$_SESSION['gtserver'] = $status;
$_SESSION['user_id'] = $user_id;
echo $GtSdk->get_response_str();
 ?>
<?php
# 使用base64进行加密，存放在数据库中
$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];
$sign = base64_encode('user_id='.$user_id.'&user_password='.$user_password);
echo $sign;
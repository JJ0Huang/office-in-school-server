<?php
$sign = $_POST['sign'];
$sign_decode = base64_decode($sign);
echo $sign_decode;
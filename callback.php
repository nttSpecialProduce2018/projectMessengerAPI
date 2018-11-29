<?php

$token = "test_token"; // $token はお好きにどうぞ

if ($_GET['hub_verify_token'] == $token) {
  echo $_GET['hub_challenge'];
} else {
  echo 'error';
}
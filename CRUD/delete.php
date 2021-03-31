<?php

require_once('class/user.php');
$id=$_GET['id'];
$user=new user();
$user->delete($id);

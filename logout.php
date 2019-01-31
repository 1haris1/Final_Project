<?php
/**
 * Created by PhpStorm.
 * User: AZ
 * Date: 31/01/2019
 * Time: 3:51 PM
 */

session_start();
session_destroy();
header('location:login.php?logged_out=You have logged out');
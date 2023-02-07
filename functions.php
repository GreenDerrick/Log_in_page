<?php
$preg_name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
    $reg_name = "/^[\d]+$/";
    $reg_name1 = "/^[A-Za-z]+$/";
    $reg_phone = "/^[0-9]{10}+$/";

function emptyInput($name,$user,$phone,$email,$pass,$pass0,$location){
    $ret;
    if(empty($name)||empty($user)||empty($phone)||empty($email)||empty($pass)||empty($pass0)||empty($location)){
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return  $ret;
}
function invalidNae($name) {
    $ret;
    if(preg_match("/^[a-zA-Z]*$/",$name)) {
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return $ret;
}

function invalidPhone($phone) {
    $ret;
    if(!preg_match("/^[0-9]*$/",$phone)) {
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return $ret;
}

function invalidEmail($email) {
    $ret;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return $ret;
}

function pwdMatch($pwd,$pwd0) {
    $ret;
    if(pwd !== $pwd0) {
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return $ret;
}

function invalidpwd($pwd) {
    $ret;
    if(!preg_match($reg_password,$pwd)) {
        $ret = TRUE;
    } else {
        $ret = FALSE;
    }
    return $ret;
}



//CALL FUNCTIONS


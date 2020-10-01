<?php 

  session_start();
  error_reporting(0);
  if(!$_POST['username'] || !$_POST['pass']){
    echo "You are in the wrong page";
  }else{
  $uname = $_POST['username'];
  $pass =  $_POST['pass'];
  $arrayName = array(
    array(
        'iserror' => false ,
        'username' => 'ugr/19610/12' ,
        'password' => '2a33a22558b84f226250869393917562',
        'fullName' => 'Nafiyad Menberu Kitila',
        'department' => 'Pre Engineering' ),
    array(
        'iserror' => false ,
        'username' => 'ugr/19609/12' ,
        'password' => '9180b4da3f0c7e80975fad685f7f134e',
        'fullName' => 'Fuad Kebede Shuluka',
        'department' => 'Mechanical Engineering' ),
    array(
        'iserror' => false ,
        'username' => 'ugr/19260/12' ,
        'password' => 'ea01e5fd8e4d8832825acdd20eac5104',
        'fullName' => 'Abebe Kebede Chala',
        'department' => 'Electrical Engineering' ),
    array(
        'iserror' => false ,
        'username' => 'ugr/20112/12' ,
        'password' => 'fe1558bc8037fecae995db31718f6661',
        'fullName' => 'Drosen Lifas Nokia',
        'department' => 'Sivil Engineering' )
  );
  $errorsms = array(array('iserror' => true));
  $arrconf = array();

  for ($i=0; $i < count($arrayName); $i++) { 
    if($uname == $arrayName[$i]['username'] && $pass == $arrayName[$i]['password']){
      $arrconf[] = $arrayName[$i];
      break;
    }
  }

  if (count($arrconf) > 0) {
    echo json_encode($arrconf);
  }else{
    echo json_encode($errorsms);
  }
  }

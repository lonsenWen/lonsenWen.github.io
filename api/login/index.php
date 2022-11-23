<?php
    header('Content-Type:application/json; charset=utf-8');
    $json = file_get_contents("php://input");
    $data = json_decode($json);
    $username = $data->username;
    $password = $data->password;
    $trueE = array('code'=>1,'nickname'=>'lonsen');
    $falseE = array('code'=>0);
    $status = 0;
    
    $array = file("data.lonsen", FILE_IGNORE_NEW_LINES);
    $str = $username.$password;

    foreach ($array as $key => $val) {

      if ($val == $str) {
          $status = 1;
      } else {
          $sratus = 0;
      }

    }
    
    if($status){
        exit(json_encode($trueE));
    }else{
        exit(json_encode($falseE));
    }
   
   
?>

<?php
    session_start();
    require_once('../../models/taskinfomodel.php');

    $req = $_POST['newreq'];

    if($req == ""){

        header('location: ../../views/Client/projectnewreqadd.php?err=null');

    }else{
 
        $status = insertreq($req);
      
        if($status){
            header('location: ../../views/Client/projectnewreqadd.php');
        }else{
            echo "DB insertion error!";
        }
    }

?>
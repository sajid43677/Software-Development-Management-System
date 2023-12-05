<?php

    session_start();

    require_once('../../models/projectinfomodel.php');

   // $_SESSION['projectid'] = $_POST['pid'];

    $task['projectid'] = $_POST['proid'];
    $task['empid'] = $_SESSION['empid'];

   // header('location: ../../views/Manager/projectManager.php');

        if($task['projectid'] !== null)
        {
            $user = searchByPid($task);
            if($user){
                     //   $_SESSION['projectname'] = $user['projectname'];
                        header('location: ../../views/Manager/projectManager.php');
                    }
            else{
                header('location: ../../views/Manager/projectListManager.php');
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location: ../../views/Manager/projectListManager.php');
        }

?>
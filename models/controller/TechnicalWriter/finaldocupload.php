<?php 

    session_start();
    require_once('../../models/projectinfomodel.php');

    if($_POST['Submit']){

        $upload_path = "../../assets/ProjectFinalDoc/";
        $target_path = $upload_path. basename(($_FILES['file']['name']));
        
        //print_r($_FILES);

        if(!file_exists($upload_path)){

            echo 'Unable to locate folder!'.$upload_path;
            echo "<a href ='../../views/TechnicalWriter/twfinaldocup.php'>Back</a>" ;
            exit();
        }else{
            
            if(@move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){

                echo "File Uploaded!";

                $finaldoc = insertfinaldoc($target_path);

                if($finaldoc){
        
                    header('location: ../../views/TechnicalWriter/twfinaldocup.php');

                }else{
                    echo "DB error!";
                    header('location: ../../views/TechnicalWriter/twfinaldocup.php');
                }


            }else{

                echo "unable to upload file!";
                header('location: ../../views/TechnicalWriter/twfinaldocup.php');
            }
        }
        
    }


?>
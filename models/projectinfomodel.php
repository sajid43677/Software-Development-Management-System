<?php 
    require_once('db.php');
    //session_start();

    // views -> add project title -> controllers -> pro title check
    function inserttitle($title){

        $con = getConnection();
        $sql = "insert into projectinfo (projectid, projectname) values('', '{$title}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }
    
    // views -> workupdate analyzer -> project title reading
    function showtitle(){

        $con = getConnection();
        $sql = "select * from projectinfo where analyzer = '{$_SESSION['username']}'";  
        $status = mysqli_query($con, $sql);

        $row_count= mysqli_num_rows($status);

        if($row_count > 0){
            while($row = mysqli_fetch_assoc($status)){

                $_SESSION['title']=$row['projectname'];
            }
        }else{
            $_SESSION['title']= 'No data found!';
        }

        return $_SESSION['title'];
    }

    // views -> project est -> controllers -> project est calculate
    function insertdevno($devno){

        $con = getConnection();
        $sql = "insert into projectinfo (reqnoofdev) values('{$devno}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    // views -> prototype ->controllers -> prototype upload
    function insertprototype($target_dir){

        $con = getConnection();
        $sql = "insert into projectinfo (projectprototype) values('{$target_dir}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function analyzerprog($anaprog){

        $con = getConnection();
        $sql = "insert into projectinfo (anaprog) values('{$anaprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }

    function twritterprg($twprog){

        $con = getConnection();
        $sql = "insert into projectinfo (twprog) values('{$twprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }

    // views -> twfinaldocup ->controllers -> final doc upload
    function insertfinaldoc($target_path){

        $con = getConnection();
        $sql = "insert into projectinfo (finaldocument) values('{$target_path}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function searchbyprojectname($task){
        $con = getConnection();
        $sql = "SELECT * from projectinfo where projectname = '{$task['projectname']}'";
        $status = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($status);
        return $row;
    }

    function allproject(){
        $con = getConnection();
        $sql = "select * from projectinfo";
        $result = mysqli_query($con, $sql);
        $projects = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($projects,$row);
        }
        return $projects;
    }

    function assignmanager($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  manager = '{$project['empid']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }

    function assignanalyzer($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  analyzer = '{$project['analyzer']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }

    // user - manager, manager progress updating
    function insertManProg($task){
        $con = getConnection();
        $sql = "UPDATE projectinfo set manprog = '{$task['manprog']}' WHERE projectname = '{$task['projectname']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    // user - manager project list
    function manProjectList($p){
        $con = getConnection();
        $sql = "SELECT projectid, projectname from projectinfo where Manager = '{$p['empid']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }

    // update needed-1
    function searchByPid($p){
        $con = getConnection();
        $sql = "SELECT projectname from projectinfo where (projectid = '{$p['projectid']}' and manager = '{$p['empid']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchbyprojectid($projectid, $user){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and analyzer ='{$user}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    function searchbyprojectidman($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and manager ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title developer
    function searchbyprojectidev($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and developer ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title tester
    function searchbyprojectidtest($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and tester ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }

    //dashboard title technical writer
    function searchbyprojectidtw($projectid, $userid){
        $con = getConnection();
        $sql = "select * from projectinfo where projectid = '{$projectid}' and twriter ='{$userid}'";
        $status = mysqli_query($con, $sql);
        $projecttitle = mysqli_fetch_assoc($status);
        return $projecttitle;
    }



?>
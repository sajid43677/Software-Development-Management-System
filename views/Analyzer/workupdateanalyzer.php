
<!DOCTYPE html>
<head>
    <title>Work Update For Analyzer</title>
    <link rel="stylesheet" href="../../assets/style/workupdateanalyzer.css">
</head>

<body bgcolor="LIGHTGRAY">
    <form method="post" action="">

        <header>
            <div align= "center">
            <h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
            </div>
        </header>

            

        <nav>
            <div align= "center">
                &ensp;&ensp; 
                <a href="#" >Achivements</a>
                &ensp;&ensp; 
                <a href="#">Contact us</a>
                &ensp;&ensp; 
                <a href="#">Support</a> 
                &ensp;&ensp; 
            </div>
            <div align= "right"> 
                <a href="../../views/Analyzer/analyzer.php">Home</a>&ensp;&ensp;
				<a class="logout" href="../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
            </div>        
        </nav>

            <br>

        <main>
            <table align= "center">
                <tr>
                    <td>
                        <br><br>
                        <fieldset>
                        <legend align= "center"><b>Project Title/Description</b></legend>
                        <?php
                            session_start();
                             require_once('../../models/projectinfomodel.php');
                             $title = showtitle();
                             echo $title;
                        ?>  
                        <br><br><br>                    
                        </fieldset>
                    </td>
                    <td align= "center">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                    <td>
                        <br><br>
                        <fieldset>
                        <legend align= "center"><b>Project Requirements</b></legend>
                        <br>
                        <table id="employee" align="center" border="1">
                            <tr>
                                <th>Requirement ID</th>
                                <th>Requirement Title</th>
                            </tr>
                            <?php
                                require_once('../../models/taskinfomodel.php');
                                $tasks = allreqforanaworkupdate();
                                foreach($tasks as $task){
                                    echo "<tr><td>{$task['taskid']}</td>
                                         <td>{$task['task']}</td></tr>";
                                }
                            ?>   
                        </table>
                        <br>
                        </fieldset>
                    </td>
                </tr>
                    
                <tr>
                    <td colspan="3" align="center">
                        <hr><br><br>
                        <input type="submit" name="submit1" value="Processing">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr><br><br>
                        <input type="submit" name="submit2" value="Completed">
                    </td>
                </tr>
            </table>
            

        </main>

            <br><br>

        <footer>
            <div align= "center">
                <a href="#">FAQ</a> &ensp;&ensp;
                <a href="#">Terms and Conditions</a> &ensp;&ensp;
                <a href="#">Privacy Policy</a> &ensp;&ensp;
                <a href="#">And More</a> &ensp;&ensp; &ensp;&ensp;
            </div>
                <br>
            <div align= "center" >
                <a href="#">&copy; 2023 | Company name </a> &ensp;&ensp;
            </div>  
        </footer>
    

    </form>
    
</body>
</html>
<?php 
    if(isset($_GET['err'])){
        echo "Please enter your title first";
        unset($_GET);
    }
?>

<!DOCTYPE html>
<head>
    <title>Project Requirement</title>
</head>
<body>
    <form method="post" action='../../controller/Client/protitlecheck.php' enctype="">
            <hr><hr>
            <header>
                <div align= "center">
                <h1><img src= "#" alt= "" width= "">Software Project Management Application</h1>
                </div>
            </header>
    
            <hr><hr>
            
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
                    <a href="../../views/Client/client.php">Home</a>&ensp;&ensp;			
                    <a href="../../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                </div> 
            </nav>
    
            <hr><hr><br>
       
        <main>
            <fieldset align="center">
                <legend align="center">Please Provide Project Title</legend>
                <table align = "center"><br>
                <tr>
                    <td >
                        <input type="text" name="title" value="" placeholder="Project Title">
                    </td>
                </tr>
                <tr>
                    <td >
                    <hr><input type="submit" name="" value="Submit">
                    </td>
                </tr>
                </table><br>
            </fieldset>
            <br><br>
            
        </main>

        <br><br><hr><hr>
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
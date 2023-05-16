
<?php 

session_start();
	ini_set("display_errors",0);
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		
		$UserName = $_POST['UserName'];
		$Parola = $_POST['Parola'];

		if(!empty($UserName) && !empty($Parola) && !is_numeric($UserName))
		{

			
			$query = "select * from LoginUser where UserName = '$UserName'";
			
			$result = sqlsrv_query($conn, $query);	
			
			

			if($result)
			{

				if($result)
				{

					
					$user_data = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
					
					
					if($user_data['Parola'] == $Parola)
					{
						//die('a');
						//unset($_SESSION['id']);
						$_SESSION['IdUser'] = $user_data['IdUser'];
						header("Location: index.php");
						die;
					}
					/*else
					{
						echo "Wrong username or password";
					}*/
					
				}
			}
			else
			{
				echo "wrong ";
			}
			
			
		}/*else
		{
			echo "Enter your username and password!";
		}*/
	}

?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Pagina de logare</title>
<style> 

#button{
  background-color: darkblue;
  color: #fff;
  border: none;
  border-radius: 1px;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
  padding: 10px;
  margin: 20px 0px;
  position: center;
  left: 1450px;
}

.IdUser {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 0px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
   
}


body {
  background-image: url('Corona.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.center {
  line-height: 200px;
  height: 200px;
  border: 3px solid green;
  text-align: center;
}

 input[type=text], input[type=password] {   
        width: 30%;   
        margin: 3px 0;  
        padding: 12px ;   
        display: inline-block;   
        border: 2px solid white;   
        box-sizing: border-box;   
    }  

 .button:hover {   
        opacity: 0.7;   
    }   
 
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }  

</style>   

</head>   

<body>   
	 
    <center> <h1> Bine ati venit in pagina de login! Va rugam logati-va pentru a putea accesa platforma noastra </h1> </center>   
	
    <div IdUser="box">
		<form method="post">
			<center><input IdUser="text" type="text" name="UserName" placeholder="Nume de utilizator"><br><br></center>
			<center><input IdUser="text" type="password" name="Parola" placeholder="Parola"><br><br></center>
			<center><button class="IdUser" type="submit">Logare</button><br><br></center>
			<center><a href="signup.php" id="button"  >Creare de cont</a></center>


		</form>

	</div>
	
</body>    

</html>  

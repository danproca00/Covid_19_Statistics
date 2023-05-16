
<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$UserName = $_POST['UserName'];
		$Parola = $_POST['Parola'];

		if(!empty($UserName) && !empty($Parola) && !is_numeric($UserName))
		{

		
			$query = "insert into LoginUser (UserName,Parola) values ('$UserName','$Parola')";

			sqlsrv_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Ne cerem scuze, va rugam incercati din nou:)";
		}
	}
?>


<!DOCTYPE html>
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Signup</title>
<style>   

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
</style>   

</head>   

<body>   
	
	<center> <h1> Pentru a va creea contul, va rugam introduceti datele corespunzatoare! Va multumim!</h1> </center>   
	<div IdUser="box">
		
		<form method="post">
			<center><input IdUser="text" type="text" name="UserName" placeholder ="Va rugam sa introduceti un nume de utilizator"><br><br></center>
			<center><input IdUser="text" type="password" name="Parola" placeholder="Va rugam sa introduceti o parola"><br><br></center>
      <center><button class="IdUser" type="submit">Apasand click pe acest buton, inseamna ca acceptati termenii si conditiile site-ului nostru</button><br><br></center>
      <br>
			<center><a href="login.php" id="button">Daca aveti deja un cont, va rugam sa apasati aici</a><br><br></center>
		</form>
	</div>

</body>
</html>

//
<?php 

session_start();
ini_set("display_errors",0);

include("connection.php");
include("functions.php");

$user_data = check_login($conn);

$sql1= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-13' and IdJud= 10";
$sql2= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-14' and IdJud= 10";
$sql3= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-15' and IdJud= 10";
$sql4= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-16' and IdJud= 10";
$sql5= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-17' and IdJud= 10";
$sql6= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-18' and IdJud= 10";
$sql7= "select sum(NrInfectati) from SituatieJud where Dati='2021-12-19' and IdJud= 10";

$result1 = sqlsrv_query($conn, $sql1);
$result2 = sqlsrv_query($conn, $sql2);
$result3 = sqlsrv_query($conn, $sql3);
$result4 = sqlsrv_query($conn, $sql4);
$result5 = sqlsrv_query($conn, $sql5);
$result6 = sqlsrv_query($conn, $sql6);
$result7 = sqlsrv_query($conn, $sql7);

$user_data1 = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC);
$user_data2 = sqlsrv_fetch_array( $result2, SQLSRV_FETCH_ASSOC);
$user_data3 = sqlsrv_fetch_array( $result3, SQLSRV_FETCH_ASSOC);
$user_data4 = sqlsrv_fetch_array( $result4, SQLSRV_FETCH_ASSOC);
$user_data5 = sqlsrv_fetch_array( $result5, SQLSRV_FETCH_ASSOC);
$user_data6 = sqlsrv_fetch_array( $result6, SQLSRV_FETCH_ASSOC);
$user_data7 = sqlsrv_fetch_array( $result7, SQLSRV_FETCH_ASSOC);


$sql11= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-13' and IdJud= 10";
$sql12= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-14' and IdJud= 10";
$sql13= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-15' and IdJud= 10";
$sql14= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-16' and IdJud= 10";
$sql15= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-17' and IdJud= 10";
$sql16= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-18' and IdJud= 10";
$sql17= "select sum(NrVindecati) from SituatieJud where Dati='2021-12-19' and IdJud= 10";

$result11 = sqlsrv_query($conn, $sql11);
$result12 = sqlsrv_query($conn, $sql12);
$result13 = sqlsrv_query($conn, $sql13);
$result14 = sqlsrv_query($conn, $sql14);
$result15 = sqlsrv_query($conn, $sql15);
$result16 = sqlsrv_query($conn, $sql16);
$result17 = sqlsrv_query($conn, $sql17);

$user_data11 = sqlsrv_fetch_array( $result11, SQLSRV_FETCH_ASSOC);
$user_data12 = sqlsrv_fetch_array( $result12, SQLSRV_FETCH_ASSOC);
$user_data13 = sqlsrv_fetch_array( $result13, SQLSRV_FETCH_ASSOC);
$user_data14 = sqlsrv_fetch_array( $result14, SQLSRV_FETCH_ASSOC);
$user_data15 = sqlsrv_fetch_array( $result15, SQLSRV_FETCH_ASSOC);
$user_data16 = sqlsrv_fetch_array( $result16, SQLSRV_FETCH_ASSOC);
$user_data17 = sqlsrv_fetch_array( $result17, SQLSRV_FETCH_ASSOC);


$sql21= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-13' and IdJud= 10";
$sql22= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-14' and IdJud= 10";
$sql23= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-15' and IdJud= 10";
$sql24= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-16' and IdJud= 10";
$sql25= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-17' and IdJud= 10";
$sql26= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-18' and IdJud= 10";
$sql27= "select sum(NrVaccinati) from SituatieJud where Dati='2021-12-19' and IdJud= 10";

$result21 = sqlsrv_query($conn, $sql21);
$result22 = sqlsrv_query($conn, $sql22);
$result23 = sqlsrv_query($conn, $sql23);
$result24 = sqlsrv_query($conn, $sql24);
$result25 = sqlsrv_query($conn, $sql25);
$result26 = sqlsrv_query($conn, $sql26);
$result27 = sqlsrv_query($conn, $sql27);

$user_data21 = sqlsrv_fetch_array( $result21, SQLSRV_FETCH_ASSOC);
$user_data22 = sqlsrv_fetch_array( $result22, SQLSRV_FETCH_ASSOC);
$user_data23 = sqlsrv_fetch_array( $result23, SQLSRV_FETCH_ASSOC);
$user_data24 = sqlsrv_fetch_array( $result24, SQLSRV_FETCH_ASSOC);
$user_data25 = sqlsrv_fetch_array( $result25, SQLSRV_FETCH_ASSOC);
$user_data26 = sqlsrv_fetch_array( $result26, SQLSRV_FETCH_ASSOC);
$user_data27 = sqlsrv_fetch_array( $result27, SQLSRV_FETCH_ASSOC);

$sql31= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-13' and IdJud= 10";
$sql32= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-14' and IdJud= 10";
$sql33= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-15' and IdJud= 10";
$sql34= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-16' and IdJud= 10";
$sql35= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-17' and IdJud= 10";
$sql36= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-18' and IdJud= 10";
$sql37= "select sum(NrDecedati) from SituatieJud where Dati='2021-12-19' and IdJud= 10";

$result31 = sqlsrv_query($conn, $sql31);
$result32 = sqlsrv_query($conn, $sql32);
$result33 = sqlsrv_query($conn, $sql33);
$result34 = sqlsrv_query($conn, $sql34);
$result35 = sqlsrv_query($conn, $sql35);
$result36 = sqlsrv_query($conn, $sql36);
$result37 = sqlsrv_query($conn, $sql37);

$user_data31 = sqlsrv_fetch_array( $result31, SQLSRV_FETCH_ASSOC);
$user_data32 = sqlsrv_fetch_array( $result32, SQLSRV_FETCH_ASSOC);
$user_data33 = sqlsrv_fetch_array( $result33, SQLSRV_FETCH_ASSOC);
$user_data34 = sqlsrv_fetch_array( $result34, SQLSRV_FETCH_ASSOC);
$user_data35 = sqlsrv_fetch_array( $result35, SQLSRV_FETCH_ASSOC);
$user_data36 = sqlsrv_fetch_array( $result36, SQLSRV_FETCH_ASSOC);
$user_data37 = sqlsrv_fetch_array( $result37, SQLSRV_FETCH_ASSOC);
?>
<style type="text/css">

#button{
  background-color: red;
  color: black;
  border: none;
  border-radius: 1px;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
  padding: 10px;
  margin: 20px 0px;
  position: relative;
  left: 1350px;
  top: 0px;
}

#buton{
  background-color: darkblue;
  color: white;
  border: none;
  border-radius: 1px;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
  padding: 10px;
  margin: 20px 0px;
  position: relative;
  left: 0px;
  top: 0px;
}
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: blue;
  border-radius: 10px;
}

#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: blue; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>

<!DOCTYPE html>

<html>

<head>
    <title>Judetul Buzau </title>
    
    <div class = "box">
<h1><p style="text-align:center">Judetul Buzau</p></h1>
</div>
</head>
<style>
    body {
  background-image: url('Corona.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
    
<a href="logout.php" id="button"  >Logout</a>
<a href="index.php" id="buton"  >Inapoi</a>
    
<script>

window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	
	theme: "dark2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Numarul infectatiilor"
	},
  	axisY: {
      includeZero: true
    },
	data: [{
		type: "area", //change type to bar, line, area, pie, etc
		highlightEnabled: false,   //Change to true, false
		dataPoints: [
			{label: "Media zilelor de luni", y: <?php echo $user_data1['']; ?> },
			{label: "Media zilelor de marti", y: <?php echo $user_data2['']; ?> },
			{ label: "Media zilelor de miercuri", y:<?php echo $user_data3['']; ?> },
			{ label: "Media zilelor de joi", y: <?php echo $user_data4['']; ?>},
			{ label: "Media zilelor de vineri", y: <?php echo $user_data5['']; ?> },
			{label: "Media zilelor de sambata", y: <?php echo $user_data6['']; ?> },
			{ label: "Media zilelor de duminica", y: <?php echo $user_data7['']; ?> }
		
		]
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	
	theme: "dark2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Numarul vindecatiilor"
	},
    axisY: {
      includeZero: true
    },
	data: [{
		type: "area", //change type to bar, line, area, pie, etc
		highlightEnabled: false,   //Change to true, false
		dataPoints: [
			{label: "Media zilelor de luni", y: <?php echo $user_data11['']; ?> },
			{label: "Media zilelor de marti", y: <?php echo $user_data12['']; ?> },
			{ label: "Media zilelor de miercuri", y:<?php echo $user_data13['']; ?> },
			{ label: "Media zilelor de joi", y: <?php echo $user_data14['']; ?>},
			{ label: "Media zilelor de vineri", y: <?php echo $user_data15['']; ?> },
			{label: "Media zilelor de sambata", y: <?php echo $user_data16['']; ?> },
			{ label: "Media zilelor de duminica", y: <?php echo $user_data17['']; ?> }
		
		]
	}]
});

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	exportEnabled: true,
	
	theme: "dark2", 
	title:{
		text: "Numarul vaccinatiilor"
	},
    axisY: {
      includeZero: true
    },
	data: [{
		type: "area", //change type to bar, line, area, pie, etc
		highlightEnabled: false,   //Change to true, false
		dataPoints: [
			{label: "Media zilelor de luni", y: <?php echo $user_data21['']; ?> },
			{label: "Media zilelor de marti", y: <?php echo $user_data22['']; ?> },
			{ label: "Media zilelor de miercuri", y:<?php echo $user_data23['']; ?> },
			{ label: "Media zilelor de joi", y: <?php echo $user_data24['']; ?>},
			{ label: "Media zilelor de vineri", y: <?php echo $user_data25['']; ?> },
			{label: "Media zilelor de sambata", y: <?php echo $user_data26['']; ?> },
			{ label: "Media zilelor de duminica", y: <?php echo $user_data27['']; ?> }
		
		]
	}]
});

var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	exportEnabled: true,
	
	theme: "dark2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Numarul decedatiilor"
	},
    axisY: {
      includeZero: true
    },
	data: [{
		type: "area", //change type to bar, line, area, pie, etc
		highlightEnabled: false,   //Change to true, false
		dataPoints: [
			{label: "Media zilelor de luni", y: <?php echo $user_data31['']; ?> },
			{label: "Media zilelor de marti", y: <?php echo $user_data32['']; ?> },
			{ label: "Media zilelor de miercuri", y:<?php echo $user_data33['']; ?> },
			{ label: "Media zilelor de joi", y: <?php echo $user_data34['']; ?>},
			{ label: "Media zilelor de vineri", y: <?php echo $user_data35['']; ?> },
			{label: "Media zilelor de sambata", y: <?php echo $user_data36['']; ?> },
			{ label: "Media zilelor de duminica", y: <?php echo $user_data37['']; ?> }
		
		]
	}]
});
chart.render();
chart2.render();
chart3.render();
chart4.render();
}
</script>

</body>
<center><div id="chartContainer" style="height: 350px; width: 50%;"></div></center>
                                <br><br>
<center><div id="chartContainer2" style="height: 370px; width: 50%;"></div></center>
                                <br><br>
<center><div id="chartContainer3" style="height: 370px; width: 50%;"></div></center>
                                <br><br>
<center><div id="chartContainer4" style="height: 370px; width: 50%;"></div></center>

<button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>

<script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>
</html>
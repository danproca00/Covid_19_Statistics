<?php 
session_start();
    ini_set("display_errors",0);

    include("connection.php");
    include("functions.php");

    $user_data = check_login($conn);

	$sql4 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=1";
	$result4 = sqlsrv_query($conn, $sql4);
	$user_data4 = sqlsrv_fetch_array($result4, SQLSRV_FETCH_ASSOC);
	
	$sql5 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=2";
	$result5 = sqlsrv_query($conn, $sql5);
	$user_data5 = sqlsrv_fetch_array($result5, SQLSRV_FETCH_ASSOC);
	
	$sql6 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=3";
	$result6 = sqlsrv_query($conn, $sql6);
	$user_data6 = sqlsrv_fetch_array($result6, SQLSRV_FETCH_ASSOC);
	
	$sql7 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=4";
	$result7 = sqlsrv_query($conn, $sql7);
	$user_data7 = sqlsrv_fetch_array($result7, SQLSRV_FETCH_ASSOC);
	
	$sql8 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=5";
	$result8 = sqlsrv_query($conn, $sql8);
	$user_data8 = sqlsrv_fetch_array($result8, SQLSRV_FETCH_ASSOC);
	
	$sql9 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=6";
	$result9 = sqlsrv_query($conn, $sql9);
	$user_data9 = sqlsrv_fetch_array($result9, SQLSRV_FETCH_ASSOC);
	
	$sql10 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=7";
	$result10 = sqlsrv_query($conn, $sql10);
	$user_data10 = sqlsrv_fetch_array($result10, SQLSRV_FETCH_ASSOC);
	
	$sql11 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=8";
	$result11 = sqlsrv_query($conn, $sql11);
	$user_data11 = sqlsrv_fetch_array($result11, SQLSRV_FETCH_ASSOC);
	
	$sql12 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=9";
	$result12 = sqlsrv_query($conn, $sql12);
	$user_data12 = sqlsrv_fetch_array($result12, SQLSRV_FETCH_ASSOC);
	
	$sql13 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=10";
	$result13 = sqlsrv_query($conn, $sql13);
	$user_data13 = sqlsrv_fetch_array($result13, SQLSRV_FETCH_ASSOC);
	
	$sql14 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=11";
	$result14 = sqlsrv_query($conn, $sql14);
	$user_data14 = sqlsrv_fetch_array($result14, SQLSRV_FETCH_ASSOC);
	
	$sql15 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=12";
	$result15 = sqlsrv_query($conn, $sql15);
	$user_data15 = sqlsrv_fetch_array($result15, SQLSRV_FETCH_ASSOC);
	
	$sql16 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=13";
	$result16 = sqlsrv_query($conn, $sql16);
	$user_data16 = sqlsrv_fetch_array($result16, SQLSRV_FETCH_ASSOC);
	
	$sql17 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=14";
	$result17 = sqlsrv_query($conn, $sql17);
	$user_data17 = sqlsrv_fetch_array($result17, SQLSRV_FETCH_ASSOC);
	
	$sql18 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=15";
	$result18 = sqlsrv_query($conn, $sql18);
	$user_data18 = sqlsrv_fetch_array($result18, SQLSRV_FETCH_ASSOC);
	
	$sql19 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=16";
	$result19 = sqlsrv_query($conn, $sql19);
	$user_data19 = sqlsrv_fetch_array($result19, SQLSRV_FETCH_ASSOC);
	
	$sql20 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=17";
	$result20 = sqlsrv_query($conn, $sql20);
	$user_data20 = sqlsrv_fetch_array($result20, SQLSRV_FETCH_ASSOC);
	
	$sql21 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=18";
	$result21 = sqlsrv_query($conn, $sql21);
	$user_data21 = sqlsrv_fetch_array($result21, SQLSRV_FETCH_ASSOC);
	
	$sql22 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=19";
	$result22 = sqlsrv_query($conn, $sql22);
	$user_data22 = sqlsrv_fetch_array($result22, SQLSRV_FETCH_ASSOC);
	
	$sql23 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=20";
	$result23 = sqlsrv_query($conn, $sql23);
	$user_data23 = sqlsrv_fetch_array($result23, SQLSRV_FETCH_ASSOC);
	
	$sql24 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=21";
	$result24 = sqlsrv_query($conn, $sql24);
	$user_data24 = sqlsrv_fetch_array($result24, SQLSRV_FETCH_ASSOC);
	
	$sql25 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=22";
	$result25 = sqlsrv_query($conn, $sql25);
	$user_data25 = sqlsrv_fetch_array($result25, SQLSRV_FETCH_ASSOC);
	
	$sql26 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=23";
	$result26 = sqlsrv_query($conn, $sql26);
	$user_data26 = sqlsrv_fetch_array($result26, SQLSRV_FETCH_ASSOC);
	
	$sql27 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=24";
	$result27 = sqlsrv_query($conn, $sql27);
	$user_data27 = sqlsrv_fetch_array($result27, SQLSRV_FETCH_ASSOC);
	
	$sql28 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=25";
	$result28 = sqlsrv_query($conn, $sql28);
	$user_data28 = sqlsrv_fetch_array($result28, SQLSRV_FETCH_ASSOC);
	
	$sql29 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=26";
	$result29 = sqlsrv_query($conn, $sql29);
	$user_data29 = sqlsrv_fetch_array($result29, SQLSRV_FETCH_ASSOC);
	
	$sql30 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=27";
	$result30 = sqlsrv_query($conn, $sql30);
	$user_data30 = sqlsrv_fetch_array($result30, SQLSRV_FETCH_ASSOC);
	
	$sql31 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=28";
	$result31 = sqlsrv_query($conn, $sql31);
	$user_data31 = sqlsrv_fetch_array($result31, SQLSRV_FETCH_ASSOC);
	
	$sql32 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=29";
	$result32 = sqlsrv_query($conn, $sql32);
	$user_data32 = sqlsrv_fetch_array($result32, SQLSRV_FETCH_ASSOC);
	
	$sql33 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=30";
	$result33 = sqlsrv_query($conn, $sql33);
	$user_data33 = sqlsrv_fetch_array($result33, SQLSRV_FETCH_ASSOC);
	
	$sql34 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=31";
	$result34 = sqlsrv_query($conn, $sql34);
	$user_data34 = sqlsrv_fetch_array($result34, SQLSRV_FETCH_ASSOC);
	
	$sql35 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=32";
	$result35 = sqlsrv_query($conn, $sql35);
	$user_data35 = sqlsrv_fetch_array($result35, SQLSRV_FETCH_ASSOC);
	
	$sql36 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=33";
	$result36 = sqlsrv_query($conn, $sql36);
	$user_data36 = sqlsrv_fetch_array($result36, SQLSRV_FETCH_ASSOC);
	
	$sql37 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=34";
	$result37 = sqlsrv_query($conn, $sql37);
	$user_data37 = sqlsrv_fetch_array($result37, SQLSRV_FETCH_ASSOC);
	
	$sql38 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=35";
	$result38 = sqlsrv_query($conn, $sql38);
	$user_data38 = sqlsrv_fetch_array($result38, SQLSRV_FETCH_ASSOC);
	
	$sql39 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=36";
	$result39 = sqlsrv_query($conn, $sql39);
	$user_data39 = sqlsrv_fetch_array($result39, SQLSRV_FETCH_ASSOC);
	
	$sql40 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=37";
	$result40 = sqlsrv_query($conn, $sql40);
	$user_data40 = sqlsrv_fetch_array($result40, SQLSRV_FETCH_ASSOC);
	
	$sql41 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=38";
	$result41 = sqlsrv_query($conn, $sql41);
	$user_data41 = sqlsrv_fetch_array($result41, SQLSRV_FETCH_ASSOC);
	
	$sql42 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=39";
	$result42 = sqlsrv_query($conn, $sql42);
	$user_data42 = sqlsrv_fetch_array($result42, SQLSRV_FETCH_ASSOC);
	
	$sql43 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=40";
	$result43 = sqlsrv_query($conn, $sql43);
	$user_data43 = sqlsrv_fetch_array($result43, SQLSRV_FETCH_ASSOC);
	
	$sql44 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=40";
	$result44 = sqlsrv_query($conn, $sql44);
	$user_data44 = sqlsrv_fetch_array($result44, SQLSRV_FETCH_ASSOC);
	
	$sql45 = "Select sum(Infectati) from Cazurile where Data='2021-12-1' and IdJudet=41";
	$result45 = sqlsrv_query($conn, $sql45);
	$user_data45 = sqlsrv_fetch_array($result45, SQLSRV_FETCH_ASSOC);
	
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
  left: 1450px;
  top: 0px;
}

.dropbtn {
  background-color: gold;
  color: black;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  
}


.dropdown-content {
  display: none;
  position: absolute;
 background-color: gold;
  min-width: 70px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0);
  z-index: 1;
  height: 400px;
  overflow-y: auto;
}

.dropdown-content a {
  color: Black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;text-align: center;
    color: #fff;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: rgba(0, 0, 0, 0);}

.jclock{
  color:#FFFFFF;
  float:left;
  font-size:42px;
  font-weight:bold;
  padding:80px 0 0 125px;
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

</style>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bine ati venit in pagina principala</title>

<h1><center><span id='data-timp'></span></center></h1>
<script>
var dt = new Date();
document.getElementById('data-timp').innerHTML=dt;
</script>

<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" >
<link href="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js"></script>
<style>

 body {
  background-image: url('Corona.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

#map { 	
  background-color: rgba(0, 255, 0, 0.3);
	margin: auto ;
	padding: 100px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 250;
	bottom: 120;
	left: 0;
	right: 0;
	width: 800px;
	height: 400px;
	} }
  
	div {
  text-align: center;
  width:200px;
  background:blue;
}

div p{
  padding-left:80px;
}

.marker {
  background-image: url('mapbox-icon.png');
  background-size: cover;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  cursor: pointer;
}

.mapboxgl-popup {
  max-width: 200px;
}

.mapboxgl-popup-content {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

</style>
</head>
<body>
<a href="logout.php" id="button"  >Logout</a>

<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
	
	
<div id="map"></div>
<form>
<div class="dropdown">
  <button class="dropbtn">Lista Judete ▼</button>

  <div class="dropdown-content">

    <a href="alba.php">Alba</a>
    <a href="arad.php">Arad</a>
    <a href="arges.php">Arges</a>
    <a href="bacau.php">Bacau</a>
    <a href="bihor.php">Bihor</a>
    <a href="bn.php">Bistrita-Nasaud</a>
    <a href="botosani.php">Botosani</a>
    <a href="braila.php">Braila</a>
    <a href="brasov.php">Brasov</a>
    <a href="buzau.php">Buzau</a>
    <a href="calarasi.php">Calarasi</a>
    <a href="cs.php">Caras-Severin</a>
    <a href="cluj.php">Cluj</a>
    <a href="constanta.php">Constanta</a>
    <a href="covasna.php">Covasna</a>
    <a href="dambovita.php">Dambovita</a>
    <a href="dolj.php">Dolj</a>
    <a href="galati.php">Galati</a>
    <a href="giurgiu.php">Giurgiu</a>
    <a href="gorj.php">Gorj</a>
    <a href="harghita.php">Harghita</a>
    <a href="hunedoara.php">Hunedoara</a>
    <a href="ialomita.php">Ialomita</a>
    <a href="iasi.php">Iasi</a>
    <a href="ilfov.php">Ilfov</a>
    <a href="mm.php">Maramures</a>
    <a href="mh.php">Mehedinti</a>
    <a href="mures.php">Mures</a>
    <a href="neamt.php">Neamt</a>
    <a href="olt.php">Olt</a>
    <a href="pr.php">Prahova</a>
    <a href="slj.php">Salaj</a>
    <a href="sm.php">Satu Mare</a>
    <a href="sibiu.php">Sibiu</a>
    <a href="suceava.php">Suceava</a>
    <a href="teleorman.php">Teleorman</a>
    <a href="timis.php">Timis</a>
    <a href="tulcea.php">Tulcea</a>
    <a href="valcea.php">Valcea</a>
    <a href="vaslui.php">Vaslui</a>
    <a href="vrancea.php">Vrancea</a>
    <a href="bucuresti.php">Bucuresti</a>

  </div>
  </div>
</form>

<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoicm9tYW5ldHJhcmVzIiwiYSI6ImNrd2Iza2dsdTE0bnUydnMzOWR0ZTlyMGIifQ.bLxPYpWK8sCqMoVHrRtcww';

const map = new mapboxgl.Map({

container: 'map',
style: 'mapbox://styles/mapbox/outdoors-v11', 
center: [26.200, 46], 
zoom: 5.1 
});

map.addControl(new mapboxgl.FullscreenControl());

map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);

const geojson = {
  type: 'FeatureCollection',
  features: [
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.537, 46.066]
      },
      properties: {
        title: 'Numar Infectati Alba',
        description: <?php echo $user_data4[""] ?>
      }
	  
    },
	
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [21.276611,46.172027]
      },
      properties: {
        title: 'Numar Infectati Arad',
        description: <?php echo $user_data5[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.82, 45]
      },
      properties: {
        title: 'Numar Infectati Arges',
        description: <?php echo $user_data6[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.912358, 46.531197]
      },
      properties: {
        title: 'Numar Infectati Bacau',
        description: <?php echo $user_data7[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [21.9211, 47.0722]
      },
      properties: {
        title: 'Numar Infectati Bihor',
        description: <?php echo $user_data8[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.48333, 47.13333]
      },
      properties: {
        title: 'Numar Infectati Bistrita-Nasaud',
        description: <?php echo $user_data9[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.66944, 47.74861]
      },
      properties: {
        title: 'Numar Infectati Botosani',
        description: <?php echo $user_data10[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.6, 45.65]
      },
      properties: {
        title: 'Numar Infectati Brasov',
        description: <?php echo $user_data11[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [27.9575, 45.26917]
      },
      properties: {
        title: 'Numar Infectati Braila',
        description: <?php echo $user_data12[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.81667, 45.15167]
      },
      properties: {
        title: 'Numar Infectati Buzau',
        description: <?php echo $user_data13[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [21.882713030982416,45.27101460425317]
      },
      properties: {
        title: 'Numar Infectati Caras-Severin',
        description: <?php echo $user_data14[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [27.33333, 44.2]
      },
      properties: {
        title: 'Numar Infectati Calarasi',
        description: <?php echo $user_data15[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.6878295, 46.783787000000004]
      },
      properties: {
        title: 'Numar Infectati Cluj',
        description: <?php echo $user_data16[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [28.63833, 44.17333]
      },
      properties: {
        title: 'Numar Infectati Constanta',
        description: <?php echo $user_data17[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.03, 45.9]
      },
      properties: {
        title: 'Numar Infectati Covasna',
        description: <?php echo $user_data18[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.47, 44.89]
      },
      properties: {
        title: 'Numar Infectati Dambovita',
        description: <?php echo $user_data19[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.7, 44.17]
      },
      properties: {
        title: 'Numar Infectati Dolj',
        description: <?php echo $user_data20[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [28.0425, 45.42333]
      },
      properties: {
        title: 'Numar Infectati Galati',
        description: <?php echo $user_data21[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.96667, 43.9]
      },
      properties: {
        title: 'Numar Infectati Giurgiu',
        description: <?php echo $user_data22[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.3, 45.04]
      },
      properties: {
        title: 'Numar Infectati Gorj',
        description: <?php echo $user_data23[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.8, 46.36]
      },
      properties: {
        title: 'Numar Infectati Harghita',
        description: <?php echo $user_data24[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [22.92028, 45.76972]
      },
      properties: {
        title: 'Numar Infectati Alba',
        description: <?php echo $user_data25[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [27.3, 44.64]
      },
      properties: {
        title: 'Numar Infectati Ialomita',
        description: <?php echo $user_data26[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [27.58889, 47.16222]
      },
      properties: {
        title: 'Numar Infectati Iasi',
        description: <?php echo $user_data27[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.9120359, 44.5803139]
      },
      properties: {
        title: 'Numar Infectati Ilfov',
        description: <?php echo $user_data28[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.65, 47.95]
      },
      properties: {
        title: 'Numar Infectati Maramures',
        description: <?php echo $user_data29[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [22.88, 44.63]
      },
      properties: {
        title: 'Numar Infectati Mehedinti',
        description: <?php echo $user_data30[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.61, 46.59]
      },
      properties: {
        title: 'Numar Infectati Mures',
        description: <?php echo $user_data31[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.4, 46.97]
      },
      properties: {
        title: 'Numar Infectati Neamt',
        description: <?php echo $user_data32[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.3667, 44.4333]
      },
      properties: {
        title: 'Numar Infectati Olt',
        description: <?php echo $user_data33[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.02, 45.1]
      },
      properties: {
        title: 'Numar Infectati Prahova',
        description: <?php echo $user_data34[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [22.881413, 47.706301]
      },
      properties: {
        title: 'Numar Infectati Satu Mare',
        description: <?php echo $user_data35[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [23.05, 47.2]
      },
      properties: {
        title: 'Numar Infectati Salaj',
        description: <?php echo $user_data36[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.0950645, 45.7889435]
      },
      properties: {
        title: 'Numar Infectati Sibiu',
        description: <?php echo $user_data37[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.25556, 47.65139]
      },
      properties: {
        title: 'Numar Infectati Suceava',
        description: <?php echo $user_data38[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [25.35694, 43.65694]
      },
      properties: {
        title: 'Numar Infectati Teleorman',
        description: <?php echo $user_data39[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [21.320318, 45.80993]
      },
      properties: {
        title: 'Numar Infectati Timis',
        description: <?php echo $user_data40[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [28.71779, 45.06486]
      },
      properties: {
        title: 'Numar Infectati Tulcea',
        description: <?php echo $user_data41[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [27.77, 46.59]
      },
      properties: {
        title: 'Numar Infectati Vaslui',
        description: <?php echo $user_data42[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [24.11, 45.08]
      },
      properties: {
        title: 'Numar Infectati Valcea',
        description: <?php echo $user_data43[""] ?>
      }
	  
    },
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.97, 45.79]
      },
      properties: {
        title: 'Numar Infectati Vrancea',
        description: <?php echo $user_data44[""] ?>
      }
	  
    },
	
	 {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [26.08333, 44.4]
      },
      properties: {
        title: 'Numar Infectati Bucuresti',
        description: <?php echo $user_data44[""] ?>
      }
	  
    },
	 
  ]
};


// add markers to map
for (const feature of geojson.features) {
  // create a HTML element for each feature
  const el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
  .setLngLat(feature.geometry.coordinates)
  .setPopup(
    new mapboxgl.Popup({ offset: 22 }) // add popups
      .setHTML(
        `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
      )
  )
  .addTo(map);
}

</script>
 
</body>
</html>
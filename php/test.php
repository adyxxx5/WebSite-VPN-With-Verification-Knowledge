<!DOCTYPE html>
<html lang="en">
<head>
<title>Test VPN</title>
<meta charset="utf-8">

<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="../images/favicon.ico">
<link rel="shortcut icon" href="../images/favicon.ico" />
<link rel="stylesheet" href="../css/style.css"> 
<script src="../js/jquery.js"></script>
<script src="../js/jquery-migrate-1.1.1.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/script.js"></script> 
<script src="../js/superfish.js"></script>
<script src="../js/jquery.equalheights.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script src="../js/tmStickUp.js"></script> 
<script src="../js/jquery.ui.totop.js"></script> 
<script src="../js/jquery.shuffle-images.js"></script> 

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 

 $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
    });

function radioChecked(radioObj) {
        if(!radioObj){
                window.alert("non funziona");
				return false;
		}
        var radioLength = radioObj.length;
        
        for(var i = 0; i < radioLength; i++) {
                if(radioObj[i].checked) {
                        window.alert("Funziona");
						reuturn true;
                }
        }
        window.alert("non funziona");
}	
</script>
</head>
 <?php  
// Configuration for the conection with the data base
require 'config.php';

$query = mysqli_query($conn, "SELECT QUESTION FROM QUESTIONS");	
$i = 0;
while ($row = mysqli_fetch_array($query, MYSQL_BOTH)) {
	$question[$i] = $row[0];
	++$i;
}
$query2 = mysqli_query($conn, "SELECT ANSWER FROM ANSWERS");
$i = 0;
while ($row = mysqli_fetch_array($query2, MYSQL_BOTH)) {
	$answer[$i] = $row[0];
	++$i;
}
$query3 = mysqli_query($conn, "SELECT CORRECT_ANSWER FROM ANSWERS");
$i = 0;
while ($row = mysqli_fetch_array($query3, MYSQL_BOTH)) {
	$array[$i] = $row[0];
	++$i;
}	

$j = 0;
 ?>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
	<section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <h1 class="logo">
            <a href="#">VPN</a>
          </h1>
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
			   <li class="current"><a href="#">Utente: <?php echo $name . " " .$lastname; ?></a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="shuffle-group">
          <div class="shuffle-group">
			<form name="question0" >
              <h3><?php echo $question[0];?> </h3>
                <div>
                  <input type="radio" name="A0"  value="<?php echo $array[0];?>" />
                  <label><?php echo $answer[0]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A0"  value="<?php echo $array[1];?>" />
                  <label><?php echo $answer[1]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A0" value="<?php echo $array[2];?>" />
                  <label><?php echo $answer[2]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A0" value="<?php echo $array[3];?>" />
                  <label><?php echo $answer[3]; ?></label>
                </div>
				<div>
				 <input type="button" value="controlla" onclick="hidden();" />
				</div>
			</div>
			<div id="<?php echo $j; ++$j;?>">
              <h3><?php echo $question[1];?> </h3>
                <div>
                  <input type="radio" name="A1"  value="<?php echo $array[4];?>" />
                  <label><?php echo $answer[4]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A1"  value="<?php echo $array[5];?>" />
                  <label><?php echo $answer[5]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A1" value="<?php echo $array[6];?>" />
                  <label><?php echo $answer[6]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A1" value="<?php echo $array[7];?>" />
                  <label><?php echo $answer[7]; ?></label>
                </div>
			</div>
			<form name="question2">
              <h3><?php echo $question[2];?> </h3>
                <div>
                  <input type="radio" name="A2"  value="<?php echo $array[8];?>" />
                  <label><?php echo $answer[8]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A2"  value="<?php echo $array[9];?>" />
                  <label><?php echo $answer[9]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A2" value="<?php echo $array[10];?>" />
                  <label><?php echo $answer[10]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A2" value="<?php echo $array[11];?>" />
                  <label><?php echo $answer[11]; ?></label>
                </div>
			</form>
			<form name="question3">
              <h3><?php echo $question[3];?> </h3>
                <div>
                  <input type="radio" name="A3"  value="<?php echo $array[12];?>" />
                  <label><?php echo $answer[12]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A3"  value="<?php echo $array[13];?>" />
                  <label><?php echo $answer[13]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A3" value="<?php echo $array[14];?>" />
                  <label><?php echo $answer[14]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A3" value="<?php echo $array[15];?>" />
                  <label><?php echo $answer[15]; ?></label>
                </div>
			</form>
			<form name="question4">
              <h3><?php echo $question[4];?> </h3>
                <div>
                  <input type="radio" name="A4"  value="<?php echo $array[16];?>" />
                  <label><?php echo $answer[16]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A4"  value="<?php echo $array[17];?>" />
                  <label><?php echo $answer[17]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A4" value="<?php echo $array[18];?>" />
                  <label><?php echo $answer[18]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A4" value="<?php echo $array[19];?>" />
                  <label><?php echo $answer[19]; ?></label>
                </div>
			</form>
			<form name="question5">
              <h3><?php echo $question[5];?> </h3>
                <div>
                  <input type="radio" name="A5" value="<?php echo $array[20];?>" />
                  <label><?php echo $answer[20]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A5" value="<?php echo $array[21];?>" />
                  <label><?php echo $answer[21]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A5" value="<?php echo $array[22];?>" />
                  <label><?php echo $answer[22]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A5" value="<?php echo $array[23];?>" />
                  <label><?php echo $answer[23]; ?></label>
                </div>
			</form>
			<form name="question6">
              <h3><?php echo $question[6];?> </h3>
                <div>
                  <input type="radio" name="A6"  value="<?php echo $array[24];?>" />
                  <label><?php echo $answer[24]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A6"  value="<?php echo $array[25];?>" />
                  <label><?php echo $answer[25]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A6" value="<?php echo $array[26];?>" />
                  <label><?php echo $answer[26]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A6" value="<?php echo $array[27];?>" />
                  <label><?php echo $answer[27]; ?></label>
                </div>
			</form>
			<form name="question7">
              <h3><?php echo $question[7];?> </h3>
                <div>
                  <input type="radio" name="A7"  value="<?php echo $array[28];?>" />
                  <label><?php echo $answer[28]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A7"  value="<?php echo $array[29];?>" />
                  <label><?php echo $answer[29]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A7" value="<?php echo $array[30];?>" />
                  <label><?php echo $answer[30]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A7" value="<?php echo $array[31];?>" />
                  <label><?php echo $answer[31]; ?></label>
                </div>
			</form>
			<form name="question8">
              <h3><?php echo $question[8];?> </h3>
                <div>
                  <input type="radio" name="A8"  value="<?php echo $array[32];?>" />
                  <label><?php echo $answer[32]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A8"  value="<?php echo $array[33];?>" />
                  <label><?php echo $answer[33]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A8" value="<?php echo $array[34];?>" />
                  <label><?php echo $answer[34]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A8" value="<?php echo $array[35];?>" />
                  <label><?php echo $answer[35]; ?></label>
                </div>
			</form>
			<form name="question9">
              <h3><?php echo $question[9];?> </h3>
                <div>
                  <input type="radio" name="A9"  value="<?php echo $array[36];?>" />
                  <label><?php echo $answer[36]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A9"  value="<?php echo $array[37];?>" />
                  <label><?php echo $answer[37]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A9" value="<?php echo $array[38];?>" />
                  <label><?php echo $answer[38]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A9" value="<?php echo $array[39];?>" />
                  <label><?php echo $answer[39]; ?></label>
                </div>
			</form>
			<form name="question10">
              <h3><?php echo $question[10];?> </h3>
                <div>
                  <input type="radio" name="A10"  value="<?php echo $array[40];?>" />
                  <label><?php echo $answer[40]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A10"  value="<?php echo $array[41];?>" />
                  <label><?php echo $answer[41]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A10" value="<?php echo $array[42];?>" />
                  <label><?php echo $answer[42]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A10" value="<?php echo $array[43];?>" />
                  <label><?php echo $answer[43]; ?></label>
                </div>
			</form>
			<form name="question11">
              <h3><?php echo $question[11];?> </h3>
                <div>
                  <input type="radio" name="A11"  value="<?php echo $array[44];?>" />
                  <label><?php echo $answer[44]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A11"  value="<?php echo $array[45];?>" />
                  <label><?php echo $answer[45]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A11" value="<?php echo $array[46];?>" />
                  <label><?php echo $answer[46]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A11" value="<?php echo $array[47];?>" />
                  <label><?php echo $answer[47]; ?></label>
                </div>
			</form>
			<form name="question12">
              <h3><?php echo $question[12];?> </h3>
                <div>
                  <input type="radio" name="A12"  value="<?php echo $array[48];?>" />
                  <label><?php echo $answer[48]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A12"  value="<?php echo $array[49];?>" />
                  <label><?php echo $answer[49]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A12" value="<?php echo $array[50];?>" />
                  <label><?php echo $answer[50]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A12" value="<?php echo $array[51];?>" />
                  <label><?php echo $answer[51]; ?></label>
                </div>
			</form>
			<form name="question13">
              <h3><?php echo $question[13];?> </h3>
                <div>
                  <input type="radio" name="A13"  value="<?php echo $array[52];?>" />
                  <label><?php echo $answer[52]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A13"  value="<?php echo $array[53];?>" />
                  <label><?php echo $answer[53]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A13" value="<?php echo $array[54];?>" />
                  <label><?php echo $answer[54]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A13" value="<?php echo $array[55];?>" />
                  <label><?php echo $answer[55]; ?></label>
                </div>
			</form>
			<form name="question14">
              <h3><?php echo $question[14];?> </h3>
                <div>
                  <input type="radio" name="A14"  value="<?php echo $array[56];?>" />
                  <label><?php echo $answer[56]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A14"  value="<?php echo $array[57];?>" />
                  <label><?php echo $answer[57]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A14" value="<?php echo $array[58];?>" />
                  <label><?php echo $answer[58]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A14" value="<?php echo $array[59];?>" />
                  <label><?php echo $answer[59]; ?></label>
                </div>
			</form>
			<form name="question15">
              <h3><?php echo $question[15];?> </h3>
                <div>
                  <input type="radio" name="A15"  value="<?php echo $array[60];?>" />
                  <label><?php echo $answer[60]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A15"  value="<?php echo $array[61];?>" />
                  <label><?php echo $answer[61]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A15" value="<?php echo $array[62];?>" />
                  <label><?php echo $answer[62]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A15" value="<?php echo $array[63];?>" />
                  <label><?php echo $answer[63]; ?></label>
                </div>
			</form>
			<form name="question16">
              <h3><?php echo $question[16];?> </h3>
                <div>
                  <input type="radio" name="A16"  value="<?php echo $array[64];?>" />
                  <label><?php echo $answer[64]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A16"  value="<?php echo $array[65];?>" />
                  <label><?php echo $answer[65]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A16" value="<?php echo $array[66];?>" />
                  <label><?php echo $answer[66]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A16" value="<?php echo $array[67];?>" />
                  <label><?php echo $answer[67]; ?></label>
                </div>
			</form>
			<form name="question17">
              <h3><?php echo $question[17];?> </h3>
                <div>
                  <input type="radio" name="A17"  value="<?php echo $array[68];?>" />
                  <label><?php echo $answer[68]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A17"  value="<?php echo $array[69];?>" />
                  <label><?php echo $answer[69]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A17" value="<?php echo $array[70];?>" />
                  <label><?php echo $answer[70]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A17" value="<?php echo $array[71];?>" />
                  <label><?php echo $answer[71]; ?></label>
                </div>
			</form>
			<form name="question18">
              <h3><?php echo $question[18];?> </h3>
                <div>
                  <input type="radio" name="A18"  value="<?php echo $array[72];?>" />
                  <label><?php echo $answer[72]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A18"  value="<?php echo $array[73];?>" />
                  <label><?php echo $answer[73]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A18" value="<?php echo $array[74];?>" />
                  <label><?php echo $answer[74]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A18" value="<?php echo $array[75];?>" />
                  <label><?php echo $answer[75]; ?></label>
                </div>
			</form>
			<form name="question19">
              <h3><?php echo $question[19];?> </h3>
                <div>
                  <input type="radio" name="A19"  value="<?php echo $array[76];?>" />
                  <label><?php echo $answer[76]; ?> </label>
                </div>                    
                <div>
                  <input type="radio" name="A19"  value="<?php echo $array[77];?>" />
                  <label><?php echo $answer[77]; ?></label>
                </div>
                <div>
                  <input type="radio" name="A19" value="<?php echo $array[78];?>" />
                  <label><?php echo $answer[78]; ?></label>
                </div>                    
                <div>
                  <input type="radio" name="A19" value="<?php echo $array[79];?>" />
                  <label><?php echo $answer[79]; ?></label>
                </div>
			</form>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="sep-1"></div>
</section>


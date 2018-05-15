<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="pl" />
	<meta name="Description" content="Zespół muzyczny XYZ" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta name="Author" content="Krzysztof Klimek" />
	<meta name="Robots" content="ALL" />
	<meta name="Keywords" content="zespół muzyczny play weselny" />
	<title>Zespół muzyczny XYZ</title>
	
	
	                        <!--  CZCIONKI Z GOOGLE-->
		<link href='http://fonts.googleapis.com/css?family=Happy+Monkey&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Audiowide&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Itim&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Amatic+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Kalam&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
		
		
		<script src="jquery/jquery.js"></script>
		
		
		


		
		
</head>


<body >


<div style="position: relative; right: 952px; width: auto; ">          <!-- ZAWIERA CALOSC STRONY I JEST POZYCJONOWANY WZGLĘDEM "BODY" -->


<div id="menu">

<table width="100%">
	<tr width="90%" >
		<td width="45%" ><center><font color="white" id="napiswww">www.zespol-enej.pl</font></center><br><center><font color="white" id="napisik">Tylko muzyka !</font></center></td>
		<td  width="45%" style="padding-top: 20px; padding-left: 100px;"><a class="niebieski" href="index.html">Home</a><a class="zielony" href="galeria.html">Galeria </a><a class="niebieski" href="nagrania.html">Nagrania</a><hr size="1" color="gold" id="linia_menu"/><br></td>
	</tr>
</table>

</div>








<div id="aktualnosci" style="min-height: 100%; height: auto;">

<br><br><br><br>

<center>
<table cellspacing="0" color="white" id="o_nas">
	<tr  height="80px" ><td style="border-radius: 20px 20px 0px 0px; color:white; font-size:45px; font-family: Kalam;" background="images/tlo_blue.png" width="1000px" ><center>  KONTAKT  </center></td></tr>
	<tr  ><td  style="border-radius: 0px 0px 20px 20px ; text-align: left; padding-bottom: 20px; padding-left: 0; padding-right: 0; " bgcolor="#E9E9E9" width="30px" >
	
	<table width="100%" style="margin-top: 20px">
	<tr>
		<td width="60%" style="text-align: center; border-right: 1px solid white; ">
			<font size="6" color="#003399" face="Happy Monkey"style="text-shadow: 0 0 6px gold;" ><b>Napisz do nas:</b></font><br><br>
			<img src="images/email.png" width="100px" style="position: relative;right: 20px;"/><img src="images/email2.png" width="100px"  style="position: relative;left: 20px;top: 10px;" /><br><br><br>
			<hr width="90%" /><br>
			
			<div>
				<?php

					if($_POST["name"]){
					
						$imie= $_POST["name"];
						$nazwisko= $_POST["surname"];
						$miejsc= $_POST["miejsc"];
						$tel= $_POST["tel"];
						$email= $_POST["mail"];
						$tresc= $_POST["tresc"];


						$adres= "krzysiek03050@wp.pl";
						$temat= "Wiadomosc ze strony zespolu";
						$tresc1= "Napisał/a: <b>".$imie." ".$nazwisko."</b><br>"."Z miejscowośći: <b>".$miejsc."</b><br><br>"."<u>Kontakt: </u><br> Tel: ".$tel."<br> Email: ".$email."<br><br> <b>Treść:</b> <br>".$tresc;

						$header .= "Content-type: text/html; charset=utf-8\r\n".
											"Content-Transfer-Encoding: 8bit\r\n";


						//echo $adres."<br>".$temat."<br>".$tresc1;

						if(mail($adres, $temat, $tresc1, $header)){
							echo "<font style='text-shadow: 0px 0px 13px green; font-size: 28px; color: black;font-family: Happy Monkey;'>E-mail został wysłany</font>";


						}
						else{
							echo "<font style='text-shadow: 0px 0px 13px red; font-size: 28px; color: black;font-family: Happy Monkey;'>Wysyłanie nie powiodło się!</font>";
						}

								
								
					}
			
				?>
			
			</div>
			 
			<br>
			<form style="align: right;" method="POST" action="kontakt.php" onsubmit="return sprawdzenie()" >
				<table style="margin: 0 auto;">
					<tr><td style="font-size: 18px; font-family:Happy Monkey; font-weight: bold;">Imie:<font color='red'>*</font> </td><td><input type="text" name="name"  id="name" style="width: 230px;border-radius: 10px 10px 10px 10px; height: 35px; font-size:20px; font-weight: bold; text-align: center;"/></td></tr>
					<tr><td style="font-size: 18px;font-family: Happy Monkey; font-weight: bold;">Nazwisko:<font color='red'>*</font> </td><td><input type="text" name="surname"  id="surname" style="border-radius: 10px 10px 10px 10px;width: 230px; height: 35px; font-size:20px; font-weight: bold; text-align: center; "/></td></tr>
					<tr><td style="font-size: 18px;font-family: Happy Monkey; font-weight: bold;">Miejscowość:<font color='red'>*</font> </td><td><input type="text" name="miejsc"  id="miejsc"style="border-radius: 10px 10px 10px 10px; width: 230px; height: 35px; font-size:20px; font-weight: bold; text-align: center; "/></td></tr>
					<tr><td style="font-size: 18px;font-family: Happy Monkey; font-weight: bold;">Telefon: <br><font color='silver'>(111-222-333)</font></td><td><input type="text" name="tel"   id="tel" style="border-radius: 10px 10px 10px 10px; width: 230px; height: 35px; font-size:20px; font-weight: bold; text-align: center; "/></td></tr>
					<tr><td style="font-size: 18px;font-family: Happy Monkey; font-weight: bold;">Email:<font color='red'>*</font> </td><td><input type="text" name="mail"  id="mail"style="border-radius: 10px 10px 10px 10px; width: 230px; height: 35px; font-size:20px; font-weight: bold; text-align: center; "/></td></tr>
					<tr height="200px"><td style="font-size: 18px;font-family: Happy Monkey; font-weight: bold;">Treść:<font color='red'>*</font></td><td> <textarea cols="33" name="tresc" id="tresc" rows="8" style="box-shadow: 3px -1px 50px 3px white; border-radius: 10px 10px 10px 10px; font-size:18px; font-weight: bold; "></textarea></td></tr>
					
				</table><br>
				<font color="red">*</font> - <font face="Audiowide">pola wymagane <br><br>
				<input type="submit"   class="przycisk1" value="Wyślij"  style=" position: relative; right: 10px; width: 110px; height: 50px;  font-family: Audiowide; font-size: 16px;border-color: #0033CC;"/>  <input type="reset" class="przycisk2" value="Reset" style=" position: relative; right: 10px; width: 110px; height: 50px;  margin-left: 20px; font-family: Audiowide; font-size: 16px; border-color: #0033CC;"/>
			</form>
		
		
		
		</td>
	<td width="40%" style="text-align: center;">
	
	<img src="images/telefon.png" width="180px"/><br><br>
	<font style="font-size: 30px; text-shadow: 0 0 14px teal">tel:</font><font style="font-size: 30px; text-shadow: 0 0 10px white; "> 501 205 559 <br><font style="position: relative; left: 20px;"><!-- drugi numer --></font></font><br><br><br><br>
	<img src="images/malpa.png" width="180px"/><br>
	<font style="font-size: 30px; text-shadow: 0 0 14px teal">e-mail:</font><font style="font-size: 30px; text-shadow: 0 0 10px white; "> zespolxyz@wp.pl</font><br><br>
	
	
	</td>
	</tr>
	
	</table>
	<br><br>
	
	
			
			
			
			<hr width="90%" />
	</td></tr>
	</table>
	
	</center>
	
<br><br><br>
<center><font  style="text-shadow: 0 0 8px blue"  color="white"  size="3">--<b>Copyright by Zespół Enej.</b></font><font id="autor" onClick="otworz()"  style="text-shadow: 0 0 5px white"  color="gold"  size="3"> Designed by K.Klimek.--	</font></center>

</div>

</div>



                       <!--  KOD jQUERY -->
<script>
		
		
		

</script>


                        <!--   KOD JAVASCRIPT -->
<script>

function sprawdzenie(){



imie= document.getElementById("name").value;
nazwisko=document.getElementById("surname").value;
miejsc=document.getElementById("miejsc").value;
tel=document.getElementById("tel").value;
email=document.getElementById("mail").value;
tresc= document.getElementById("tresc").value;


////////////////////////// SPRAWDZENIE  IMIENIA   ////////////////////////////////
wzor_imie= /^[A-Za-zęóąśłżźćńĘÓĄŚŁŻŹĆŃ]{1,}$/;
if(imie==""|| imie.length<3||!wzor_imie.test(imie)){

document.getElementById("name").style.border="2px solid red";
return false;
}

	if(wzor_imie.test(imie)){
	document.getElementById("name").style.border="2px solid green ";
	}
	
	
	///////////////////////////////     SPRAWDZENIE NAZWISKA    //////////////////////////////
	wzor_nazwisko= /^[A-Za-zęóąśłżźćńĘÓĄŚŁŻŹĆŃ]{1,}$/;
	if(nazwisko==""||nazwisko.length<3||!wzor_nazwisko.test(nazwisko)){

document.getElementById("surname").style.border="2px solid red";
return false;
}

if(wzor_nazwisko.test(nazwisko)){
	document.getElementById("surname").style.border="2px solid green ";
}

		///////////////////////////////     SPRAWDZENIE MIEJSCOWOŚCI    //////////////////////////////
	wzor_miejsc= /^[A-Za-zęóąśłżźćńĘÓĄŚŁŻŹĆŃ]{1,}$/;
	if(miejsc==""||miejsc.length<3||!wzor_miejsc.test(miejsc)){

document.getElementById("miejsc").style.border="2px solid red";
return false;
}

if(wzor_miejsc.test(miejsc)){
	document.getElementById("miejsc").style.border="2px solid green ";
}
	
			///////////////////////////////     SPRAWDZENIE TELEFONU    //////////////////////////////
	wzor_tel= /^[\d \s )(-]{11}$/;
	if(tel==""||wzor_tel.test(tel)){
document.getElementById("tel").style.border="2px solid green ";

}

else{
document.getElementById("tel").style.border="2px solid red";
return false;
	
}
	
				///////////////////////////////     SPRAWDZENIE MAILA    //////////////////////////////
	wzor_mail= /^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/;
	if(email==""||!wzor_mail.test(email)){

document.getElementById("mail").style.border="2px solid red";
return false;
}

if(wzor_mail.test(email)){
	document.getElementById("mail").style.border="2px solid green ";
}

				///////////////////////////////     SPRAWDZENIE TRESCI    //////////////////////////////

	if(tresc==""||tresc.length<3){

document.getElementById("tresc").style.border="2px solid red";
return false;
}

else{
	document.getElementById("tel").style.border="2px solid green ";
}
	
	
	
	
	
	
	
}



function otworz(){
	
	window.open("https://www.facebook.com/krzysztof.klimek.33");

}

</script>
		
		

</body>

</html>


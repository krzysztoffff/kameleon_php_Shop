<?session_start();


session_register('dane01');
session_register('dane02');
session_register('koszyk1');
session_register('submitcheck1');
session_register('checksubmit2');
session_register('checklicznik');


session_register('zalogowany');
session_register('loginx');
session_register('imiex');
session_register('nazwiskox');
session_register('kodpocztx');
session_register('miejscowx');
session_register('ulicax');
session_register('nrdx');
session_register('nrmx');
session_register('telx');
session_register('emailx');

session_register('limit1');
session_register('limit2');


$db=mysql_Connect("www.sql.skulls.nazwa.pl","skulls","skulls");
  mysql_select_db("skulls");


 
  		// seria danych dla sekcji prawej
  		if($kolekcja01!="")
		{ 
		$dane01=$kolekcja01;
		};
 
 		
		// Seria danych dla sekcji ¶rodkowej
		if($nr02!="")
		{
		$dane02=$nr02;
		};
		if($ofirm=="ofirm")
		{
		$dane02=$ofirm;
		};
		if($regul=="regul")
		{
		$dane02=$regul;

		};
		
		
		//ZMIENNE DLA KOSZYKA
		
		if ($dokosz!="")
		{
		$koszyk1++;
		$nr30="nr30$koszyk1";
		session_register($nr30);
		$$nr30=$nr20;
		$rozmiar30="rozmiar30$koszyk1";
		session_register($rozmiar30);
		$$rozmiar30=$rozmiar10;
		$ilosc30="ilosc30$koszyk1";
		session_register($ilosc30);
		$$ilosc30=$ilosc10;
		};
		
		if ($wyczysckosz!="")
		{
		$koszyk1=0;
		$nr30="";
		$rozmiar30="";
		$ilosc30="";
		};
		
		

if ($destroy!="")   //ODSWIEZANIE
   {
   $dane02="";
   $koszyk1=0;
   $dane01="";
   $zamow="";
   $login="";
   $koszczeg="";
   $zambezlog="";
   $zalogowany="";
   $loginx="";  
   $imiex="";
		$nazwiskox="";
		$kodpocztx="";
		$miejscowx="";
		$ulicax="";
		$nrdx="";
		$nrmx="";
		$telx="";
		$emailx="";	
		$limit1="";
		$limit2="";
   
   
   
   };
   

 

if ($wstecz1!="")
   {
   $zamow="tak";
   $newuser="";
   };
 

   
   
   
//   if($check50=="")
//   {
//   
//   $ab60=mysql_query("INSERT INTO `adresy` (`nr`,`haslo` , `login` , `imie` , `nazwisko` , `kodpoczt` , `miescow` , `ulica` , `nrd` , `nrm` , `tel` , `email` )
 //  VALUES ('', '$haslo1', '$login1', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email')",$db);
   
      
   
//   $newuser="";
//   $login="tak";
//   };
   
   
   
   
   if($login30!="")
   {
   
      
   $abc=mysql_query("SELECT * FROM `adresy` where haslo='$haslo1'&&login='$login1' LIMIT 0 , 1",$db);
		
		list($nr100,$haslo100,$login100,$imie100,$nazwisko100,$kodpoczt100,$miejscow100,$ulica100,$nrd100,$nrm100,$tel100,$email100)=mysql_Fetch_Row($abc);

		
		
		if ($login100!=""&&$imie100!=""&&$nazwisko100!="")
		{
		$loginx=$login100;
		$imiex=$imie100;
		$nazwiskox=$nazwisko100;
		$kodpocztx=$kodpoczt100;
		$miejscowx=$miejscow100;
		$ulicax=$ulica100;
		$nrdx=$nrd100;
		$nrmx=$nrm100;
		$telx=$tel100;
		$emailx=$email100;	
		
		
		$zamow="zamow";
		$zalogowany="zalogowany";	
		}
   		else
		{
		$komunikat1="Nieprawid³owy login, lub has³o.";
		$login="tak";
		$login30="";
		};
   
   };

   
   //ZEROWANIE PRZEWIJANIA STRON
   if($do1!="")
   {
   $wyzeruj="tak";
   }
   if($do2!="")
   {
   $frontpage="yes";
   $dane02="";
   };

   
?>



<HTML>
<HEAD>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">
<META HTTP-EQUIV="Creation-date" CONTENT="2005-03-18T21:45:23Z">
<META HTTP-EQUIV="Reply-to" CONTENT="sikurzakk@wsi.edu.pl">
<META HTTP-EQUIV="Content-Language" CONTENT="pl">
<META NAME="Keywords" CONTENT="koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls">
<META NAME="Description" CONTENT="W sprzedarzy dosyæ kontrowersyjne koszulki">
<META NAME="Author" CONTENT="Krzysztoff">
<title>
SKULLS-sklep
</TITLE>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--
function onmouseover_1() {

}
//-->
</SCRIPT>
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#FFFFFF" LINK="#FFFFFF" ALINK="#FFFFFF" VLINK="#FFFFFF">

<?
  //REALIZACJA ZAMÓWIENIA Z LOGOWANIEM PRZELEW.
  if ($potwzlog!=""&&$kodprzelewu!=""&&$zaplata=="przelew"&&$checksubmit2!="")
  {
  
     
   $checksubmit2="";
   $cena57=0;
    
   
   
   $ab71=mysql_query("select nr from adresy where imie='$imiex'&&nazwisko='$nazwiskox'&&kodpoczt='$kodpocztx'&&miescow='$miejscowx'&&ulica='$ulicax'",$db);
   
 					list($nradr)=mysql_Fetch_Row($ab71);
   $kodprzelewu="$kodprzelewu$nradr";
   
   
   $data1=date("y,m,d");
	
      
   
   
      
	for($i=1;$i<=$koszyk1;$i++)
	{
	
	$e="nr30$i";
	
	$e1=$$e;
	
	$ab80=mysql_query("SELECT  cena from przedmiot where nr='$e1'",$db);
		
		list($cena51)=mysql_Fetch_Row($ab80);
		
	
	$il3="ilosc30$i";
	$il4=$$il3;
	$cena57+=$cena51*$il4;
	
	
	$r="rozmiar30$i";
	$r1=$$r;
	
	
	
   $ab72=mysql_query("INSERT INTO `zamowienia` (`lp`,`nrztabprzedm`,`nradr`,`ilosc`,`rozmiar`,`data`,`dozaplaty`,`kodprzel`,`realizacja`) 
   VALUES('','$e1','$nradr','$il4','$r1','$data1','$cena51','$kodprzelewu','')",$db);
  

	
	};
	
   
   
   ?>
   <form ACTION="index1.php">     
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>
   
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #99FFFF">
   Dokonano zamówienia.<br>
      Potwierdzenie zamówienia zosta³o wys³ane emailem na konto <?echo$emailx?>.<br>
   Dziêkujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="WWW.SKULLS.PL"><br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
   Wp³aty prosimy dokonywaæ na konto:<br>
   </SPAN>
   <table border=1 STYLE="border: 1px dotted #0099FF;">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   <SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: #99FFFF; font-weight: bold">
   Poni¿sze dane proszê sobie zanotowaæ, lub zapisaæ na dysku. Zostan± one tak¿e wys³ane na podany przez pañstwa e-mail.</SPAN>
   <br><br>
   Nazwa odbiorcy:<br>
   Katarzyna Kurzak<br>
   41-909 Bytom ul. Cyryla i Metodego 62/17 &nbsp &nbsp<br><br>
   
   Nr konta:<br>
   30 8471 0000 0017 4424 9000 0001<br><br>
   
   Bank Spó³dzielczy Bytom<br><br>
      <?
   $cena57+=4;
   ?>
   Kwota: <?echo$cena57?> z³<br><br>
   Tytu³em: Zamowienie nr: <?echo$kodprzelewu?>
   
   
   </TD>
   <TD ALIGN="LEFT" VALIGN="TOP" WIDTH="540" HEIGHT="360" BACKGROUND="index/grafiki/blankiet.jpg">
   <TABLE CELLSPACING="4" CELLPADDING="3" BORDER="0" STYLE="font-family: Times New Roman; font-size: 16px; color: #000000; font-weight: bold">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   &nbsp &nbsp Katarzyna Kurzak 41-909 Bytom
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp ul. Cyryla i Metodego 62/17
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp 30 8471 0000 0017 4424 9000 0001
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?echo$cena57?>   
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   <?
   echo "$imiex $nazwiskox $kodpocztx $miejscowx";
   ?>
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   <?
   echo "$ulicax $nrdx ";
   if ($nrmx!="")
   {
   echo " / $nrmx";
   };
   ?>
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   Nr zamowienia: <?echo$kodprzelewu?>
   </TD>
   </TR>
   </TABLE>
   
   </TD>
   </TR>
   </TABLE>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #CCFF99">
   Natychmiast po zaksiêgowaniu wp³aty wy¶lemy zamówione przedmioty na Pañstwa adres.<br>
   Z regu³y trwa to od 2 do 7 dni roboczych.<br>
   W przypadku wiêkszych zamówieñ bêdziemy siê kontaktowaæ z Pañstwem telefonicznie.<br>
   Na wp³atê czekamy 14 dni. Pó¼niej zamówienie zostaje anulowane.
   ¯yczymy udanych zakupów.
   
   </SPAN>
   <?
   $message="Zamowienie Skulls.pl. \n Czekamy na wplate od Panstwa na konto: \n Nazwa odbiorcy: \n Katarzyna Kurzak 41-909 Bytom ul. Cyryla i Metodego 62/17 \n Nr konta: 30 8471 0000 0017 4424 9000 0001 \n Bank Spó³dzielczy Bytom Kwota: $cena57 z³. \n Tytu³em: Zamowienie nr: $kodprzelewu \n\n\n Zamowienie zlozone przez uzytkownika $loginx    \n\n    Dziêkujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www.skulls.pl";
   mail($emailx, 'SKULLS Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");

   
   $dane02="";
   $koszyk1=0;
   $dane01="";
   $zamow="";
   $login="";
   $koszczeg="";
   $zambezlog="";
   $zalogowany="";
   $loginx="";  
   $imiex="";
		$nazwiskox="";
		$kodpocztx="";
		$miejscowx="";
		$ulicax="";
		$nrdx="";
		$nrmx="";
		$telx="";
		$emailx="";	
		$limit1="";
		$limit2="";	
   
   
   
   ?>  
   
   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="powrot1" value="Powrót do sklepu">
   
   </center>
   </FORM>
   
   <?
   
   
 
  
  
  
  
  
  
  
  
  
  
  
  return;
  };
  
  
  
  
  
  //REALIZACJA ZAMÓWIENIA Z LOGOWANIEM ZA POBRANIEM.
  if($potwzlog!=""&&$zaplata=="zapobraniem"&&$checksubmit2!="")
  {
  $ckecksubmit2="";
  $cena57=0;
  $data1=date("y,m,d");
  ?>
  
  
  
  
  <?
  
  
  $ab71=mysql_query("select nr from adresy where imie='$imiex'&&nazwisko='$nazwiskox'&&kodpoczt='$kodpocztx'&&miescow='$miejscowx'&&ulica='$ulicax'&&nrd='$nrdx'",$db);
   
 					list($nradr)=mysql_Fetch_Row($ab71);
  
  
  for($i=1;$i<=$koszyk1;$i++)
	{
	
	$e="nr30$i";
	
	$e1=$$e;
	
	$ab80=mysql_query("SELECT  cena from przedmiot where nr='$e1'",$db);
		
		list($cena51)=mysql_Fetch_Row($ab80);
		
	
	$il3="ilosc30$i";
	$il4=$$il3;
	$cena57+=$cena51*$il4;
	
	
	$r="rozmiar30$i";
	$r1=$$r;
	
	
	
   $ab72=mysql_query("INSERT INTO `zamowienia` (`lp`,`nrztabprzedm`,`nradr`,`ilosc`,`rozmiar`,`data`,`dozaplaty`,`kodprzel`,`realizacja`) 
   VALUES('','$e1','$nradr','$il4','$r1','$data1','$cena51','zapobraniem','')",$db);
  

	
	};
          
  
  ?>
  
  <form ACTION="index1.php">     
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>
   
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #99FFFF">
   Dokonano zamówienia.<br>
   Dziêkujemy za zakupy w naszym sklepie.<br>
   Potwierdzenie zamówienia zosta³o wys³ane emailem na podane konto.<br>
   <br>
   </SPAN>
   <IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="WWW.SKULLS.PL"><br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
   
   
   
  <?
  $cena57+=9;
   $message="Zamowienie Skulls.pl. \n\nDzien dobry.\n\n Potwierdzamy panstwa zamowienie w naszym sklepie.\n\n Na poczcie (lub listonoszowi) trzeba bedzie zaplacic $cena57 z³. przy odbiorze. \n\n\n      Dziêkujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www.skulls.pl";
   mail($emailx, 'SKULLS Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");

   
   ?>
   Przy odbiorze do zap³aty bêdzie <?echo$cena57?> z³.<br><br>  
   </SPAN>
   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="powrot1" value="Powrót do sklepu">

  
  </form> 
  </center>
  <?
  
  $dane02="";
   $koszyk1=0;
   $dane01="";
   $zamow="";
   $login="";
   $koszczeg="";
   $zambezlog="";
   $zalogowany="";
   $loginx="";  
   $imiex="";
		$nazwiskox="";
		$kodpocztx="";
		$miejscowx="";
		$ulicax="";
		$nrdx="";
		$nrmx="";
		$telx="";
		$emailx="";	
		$limit1="";
		$limit2="";	
		
   
  
  
  return;
  }



  
  
  
  
  
  
  
  
  
  


//REALIZACJA ZAMOWIENIA BEZ LOGOWANIA PRZELEW
   if($potw1!=""&&$submitcheck1!=""&&$zaplata=="przelew" )
   {
   
   $submitcheck1="";
   $cena57=0;
   
   
   $ab65=mysql_query("INSERT INTO adresy (nr,haslo,login,imie,nazwisko,kodpoczt,miescow,ulica,nrd,nrm,tel,email) VALUES ('','bez has³a', 'bez logowania', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email')",$db);
   
   
   $ab71=mysql_query("select nr from adresy where imie='$imie'&&nazwisko='$nazwisko'&&kodpoczt='$kodp'&&miescow='$miejscow'&&ulica='$ulica'&&nrd='$nrd'",$db);
   
 					list($nradr)=mysql_Fetch_Row($ab71);
   $kodprzelewu="$kodprzelewu$nradr";
   
   
   $data1=date("y,m,d");
	
   
 					
   
   
   
      
	for($i=1;$i<=$koszyk1;$i++)
	{
	
	$e="nr30$i";
	
	$e1=$$e;
	
	$ab80=mysql_query("SELECT  cena from przedmiot where nr='$e1'",$db);
		
		list($cena51)=mysql_Fetch_Row($ab80);
		
	
	$il3="ilosc30$i";
	$il4=$$il3;
	$cena57+=$cena51*$il4;
	
	
	$r="rozmiar30$i";
	$r1=$$r;
	
	
	
   $ab72=mysql_query("INSERT INTO `zamowienia` (`lp`,`nrztabprzedm`,`nradr`,`ilosc`,`rozmiar`,`data`,`dozaplaty`,`kodprzel`,`realizacja`) 
   VALUES('','$e1','$nradr','$il4','$r1','$data1','$cena51','$kodprzelewu','')",$db);
  

	
	};
	
   
   
   ?>
   <form ACTION="index1.php">     
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>
   
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #99FFFF">
   Dokonano zamówienia.<br>
      Potwierdzenie zamówienia zosta³o wys³ane emailem na podane konto.<br>
   Dziêkujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="WWW.SKULLS.PL"><br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
   Wp³aty prosimy dokonywaæ na konto:<br>
   </SPAN>
   <table border=1 STYLE="border: 1px dotted #0099FF;">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   <SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: #99FFFF; font-weight: bold">
   Poni¿sze dane proszê sobie zanotowaæ, lub zapisaæ na dysku. Zostan± one tak¿e wys³ane na podany przez pañstwa e-mail.</SPAN>
   <br><br>
   Nazwa odbiorcy:<br>
   Katarzyna Kurzak<br>
   41-909 Bytom ul. Cyryla i Metodego 62/17 &nbsp &nbsp<br><br>
   
   Nr konta:<br>
   30 8471 0000 0017 4424 9000 0001<br><br>
   
   Bank Spó³dzielczy Bytom<br><br>
      <?
   $cena57+=4;
   ?>
   Kwota: <?echo$cena57?> z³<br><br>
   Tytu³em: Zamowienie nr: <?echo$kodprzelewu?>
   
   
   </TD>
   <TD ALIGN="LEFT" VALIGN="TOP" WIDTH="540" HEIGHT="360" BACKGROUND="index/grafiki/blankiet.jpg">
   <TABLE CELLSPACING="4" CELLPADDING="3" BORDER="0" STYLE="font-family: Times New Roman; font-size: 16px; color: #000000; font-weight: bold">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   &nbsp &nbsp Katarzyna Kurzak 41-909 Bytom
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp ul. Cyryla i Metodego 62/17
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp 30 8471 0000 0017 4424 9000 0001
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?echo$cena57?>   
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   <?
   echo "$imie $nazwisko $kodp $miejscow";
   ?>
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   <?
   echo "$ulica $nrd ";
   if ($nrm!="")
   {
   echo " / $nrm";
   };
   ?>
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp &nbsp
   Nr zamowienia: <?echo$kodprzelewu?>
   </TD>
   </TR>
   </TABLE>
   
   </TD>
   </TR>
   </TABLE>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #CCFF99">
   Natychmiast po zaksiêgowaniu wp³aty wy¶lemy zamówione przedmioty na Pañstwa adres.<br>
   Z regu³y trwa to od 2 do 7 dni roboczych.<br>
   W przypadku wiêkszych zamówieñ bêdziemy siê kontaktowaæ z Pañstwem telefonicznie.<br>
   Na wp³atê czekamy 14 dni. Pó¼niej zamówienie zostaje anulowane.
   ¯yczymy udanych zakupów.
   
   </SPAN>
   <?
   $message="Zamowienie Skulls.pl. \n Czekamy na wplate od Panstwa na konto: \n Nazwa odbiorcy: \n Katarzyna Kurzak 41-909 Bytom ul. Cyryla i Metodego 62/17 \n Nr konta: 30 8471 0000 0017 4424 9000 0001 \n Bank Spó³dzielczy Bytom Kwota: $cena57 z³. \n Tytu³em: Zamowienie nr: $kodprzelewu \n\n        Dziêkujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www.skulls.pl";
   mail($email, 'SKULLS Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");

   
   ?>  
   
   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="powrot1" value="Powrót do sklepu">
   
   </center>
   </FORM>
   
   <?
   
   


   
   
      
   return;
   };






//REALIZACJA ZAMOWIENIA BEZ LOGOWANIA ZA POBRANIEM
   if($potw1!=""&&$submitcheck1!=""&&$zaplata=="zapobraniem")
   {
   
   $submitcheck1="";
   $cena57=0;
   
   
   $ab65=mysql_query("INSERT INTO adresy (nr,haslo,login,imie,nazwisko,kodpoczt,miescow,ulica,nrd,nrm,tel,email) VALUES ('','bez has³a', 'bez logowania', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email')",$db);
   
   
   $ab71=mysql_query("select nr from adresy where imie='$imie'&&nazwisko='$nazwisko'&&kodpoczt='$kodp'&&miescow='$miejscow'&&ulica='$ulica'&&nrd='$nrd'",$db);
   
 					list($nradr)=mysql_Fetch_Row($ab71);
  
   
   
   $data1=date("y,m,d");
	
   
 					
   
   
   
      
	for($i=1;$i<=$koszyk1;$i++)
	{
	
	$e="nr30$i";
	
	$e1=$$e;
	
	$ab80=mysql_query("SELECT  cena from przedmiot where nr='$e1'",$db);
		
		list($cena51)=mysql_Fetch_Row($ab80);
		
	
	$il3="ilosc30$i";
	$il4=$$il3;
	$cena57+=$cena51*$il4;
	
	
	$r="rozmiar30$i";
	$r1=$$r;
	
	
	
   $ab72=mysql_query("INSERT INTO `zamowienia` (`lp`,`nrztabprzedm`,`nradr`,`ilosc`,`rozmiar`,`data`,`dozaplaty`,`kodprzel`,`realizacja`) 
   VALUES('','$e1','$nradr','$il4','$r1','$data1','$cena51','zapobraniem','')",$db);
  


	};
	
   
   ?>
   
   <form ACTION="index1.php">     
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>
   
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #99FFFF">
   Dokonano zamówienia.<br>
      Potwierdzenie zamówienia zosta³o wys³ane emailem na podane konto.<br>
   Dziêkujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="WWW.SKULLS.PL"><br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
   <?
   $cena57+=9;
   ?>
   <br><br>
   Do zap³aty bêdzie: <?echo$cena57?> z³. przy odbiorze.<br><br>
   
   ¯yczymy mi³ego dnia.
   </SPAN>
   <?
   $message="Zamowienie Skulls.pl. \n Zamówienie wlasnie jest w trakcie realizacji.\n Do zaplaty bêdzie $cena57 przy odbiorze. \n\n\n        Dziêkujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www.skulls.pl";
   mail($email, 'SKULLS Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");

   
   ?>  
   
   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="powrot1" value="Powrót do sklepu">
   
   </center>
   </FORM>
   
   <?
   
   


   
   
      
   return;
   };

?>





























<center>




<br>
<TABLE WIDTH="780" CELLSPACING="0" CELLPADDING="0" BORDER="0" frame=void>

<tr>

<!-- NAG£ÓWEK, PIERWSZA KOMÓRKA -->
<TD ALIGN="CENTER" WIDTH="800" HEIGHT="90" COLSPAN="3" BACKGROUND="index/grafiki/top.jpg";>

<SPAN STYLE=" font-family: Franklin Gothic Medium; font-size: 28pt; font-weight: bold; font-style: italic; color: #000000">
</SPAN>

<br><br>

</TD>

</TR>


<tr>

<TD VALIGN="TOP" WIDTH="100" >


	<TABLE CELLSPACING="0" CELLPADDING="0" BORDER="0" FRAME="VOID" >
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 11px; color: #000000">
	Kolekcje:
	</SPAN>
	
	</Td>
	</TR>
	<tr>
	<TD ALIGN="LEFT">
	
	
	<?
	$klima="mroczny";

  		$lb=mysql_query("SELECT kolekcja from kolekcje order by kolekcja",$db); 
//		where klimat='$klima' order by nr",$db);
		
		while(list($kolekcja)=mysql_Fetch_Row($lb))
		{
		?>
		  										   	
		
		 &nbsp <A HREF=index1.php?kolekcja01=<?echo$kolekcja?>&&do1=wyzeroj&&do2=tak ><SPAN STYLE=' font-family: Times New Roman; font-size: 12pt; color: #FFFFFF'><?echo$kolekcja?><br></span></A>
		<?
		};
		?>
		
	</td>
	</TR>
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	
	</TD>
	</TR>
	<tr>
	<TD ALIGN="LEFT">
	
		
	<SPAN STYLE=" font-family: Times New Roman; font-size: 10pt; color: #FF0000">

	
	&nbsp <A HREF="index1.php?rozklad=yes" TARGET="_top" TITLE="Rozk³ad jazdy" STYLE="font-family: Times New Roman; font-size: 12px">Rozk³ad jazdy </A><br>
	&nbsp <A HREF="index1.php?impry=yes" NAME="Zdjêcia z imprez" TARGET="_top" TITLE="Zdjêcia z imprez" STYLE="font-size: 12px; font-family: Times New Roman">Zdjêcia z imprez</A>
	
	</TD>
	</TR>
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	
	</TD>
	</TR>
	<tr>
	<TD ALIGN="LEFT">
	&nbsp <A HREF="index1.php?ofirm=ofirm" TITLE="O firmie" STYLE="font-family: Times New Roman; font-size: 12px">O firmie</A><br>
	&nbsp <A HREF="index1.php?regul=regul" TITLE="Regulamin" STYLE="font-family: Times New Roman; font-size: 12px">Regulamin</A>
	</TD>
	</TR>
	
	<!-- od¶wie¿anie -->
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	</TD>
	</TR>
	<tr>
	<td>
	&nbsp <A HREF="index1.php?destroy=yes" TARGET="_top" TITLE="Od¶wie¿" STYLE="font-family: Times New Roman; font-size: 14px; font-weight: bold; color: #FF99FF">Od¶wie¿</A><br>
	&nbsp <A HREF="mailto:biuro@skulls.nazwa.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: #FFFFFF">Napisz do nas</A>
	</TD>
	</TR>
	<tr>
	
	
		
	
	<?
	if($koszyk1!="")
	{
	$cena20=0;
	?>
	<!-- KOSZYK -->
	<td>
	<br>
	<TABLE  rules=rows WIDTH="100%" BORDER="0" STYLE="border: 1px dotted #0099FF;">   <!--  CELLSPACING="0" CELLPADDING="0" BORDER="1" FRAME="VOID" RULES="ROWS" -->
	<tr>
	<TD ALIGN="LEFT" VALIGN="MIDDLE">
	<IMG SRC="index/grafiki/banery/mroczne/koszykm.gif" WIDTH="31" HEIGHT="27" BORDER="0" ALT="Rozmiar: 1192 bajtów">
	</td>
	<TD ALIGN="RIGHT" VALIGN="MIDDLE">
	<center>
	koszyk
	</center>
	</TD>
	</tr>
	<tr>
	<TD ALIGN="LEFT" COLSPAN="2" STYLE="border: 1px dotted #0099FF;">
	
	<TABLE ALIGN="CENTER" VALIGN="TOP" CELLSPACING="0" CELLPADDING="0" BORDER="0">
	
	
	<?
	for($i=1;$i<=$koszyk1;$i++)
	{
	?>
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?echo$i?>
	</TD>
	<td ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	$e="nr30$i";
	
	
	$e1=$$e;
	$ab40=mysql_query("SELECT  nazwa,cena from przedmiot where nr='$e1'",$db);
		
		list($nazwa40,$cena40)=mysql_Fetch_Row($ab40);
		
	echo$nazwa40;
	$il="ilosc30$i";
	$il1=$$il;
	$cena20+=$cena40*$il1;
	
	?>
	</TD>
	
	</TR>
	<?
	};
	?>
	
	</TABLE>
	
	
	</TD>
	</TR>
	<tr>
	<td align="left">
	Koszt:
	</TD>
	<TD ALIGN="RIGHT">
	<?echo$cena20?> z³.
	</td>
	</tr>
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<form ACTION="index1.php">
	<INPUT TYPE="SUBMIT" NAME="koszczeg" VALUE="Szczegó³y" STYLE="font-family: Times New Roman; font-size: 12px">
	
	</td>
	</tr>
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<form ACTION="index1.php">
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy¶æ" STYLE="font-family: Times New Roman; font-size: 10px">
	</td>
	</tr>
	
	</td>
	</tr>
	
	<tr>
	<td ALIGN="CENTER" COLSPAN="2">
	<?if ($zamow==""&&$newuser==""&&$login=="")
	{;
	?>
	<INPUT TYPE="SUBMIT" NAME="zamow" VALUE="Zamawiam" STYLE="font-family: Times New Roman; font-size: 14px">
	<?
	};
	?>
	</FORM>
	</TD>
	</TR>
	</TABLE>
	
	
	</TD>
	<?
	};
	?>	
	
	
	</TR>
	
	
	
	<!-- LINKI -->
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	</TD>
	</TR>
	<tr>
	<td>
	<A HREF="http://www.borntoride.com/index.html" TARGET="_blank" TITLE="Born to ride" STYLE="font-family: Times New Roman; font-size: 14px; font-weight: bold; color: #FF99FF"><IMG SRC="index/grafiki/link1.gif" BORDER="0" ALT=""></A>
	
	</TD>
	</TR>
	<tr>
	
	</table>
	


</TD>


<!-- GLOWNA KOMORKA	 -->

<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="580" STYLE="border: 1px dotted #0099FF";> 

<IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="WWW.SKULLS.PL">



<!--
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0"
 WIDTH=600 HEIGHT=60>
 <PARAM NAME=movie VALUE="index/grafikimovie1.swf"> <PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#000000> <EMBED src="index/grafiki/movie1.swf" quality=high bgcolor=#000000  WIDTH=600 HEIGHT=60 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT>
-->


















<?
//WY¦WIETLANIE PRODUKTÓW:


if ($dane02!=""&&$dane02!="ofirm"&&$dane02!="regul"&&$koszczeg==""&&$zamow==""&&$login==""&&$zambezlog==""&&$zamzlog=="")
{

$ab10=mysql_query("SELECT  nazwa,kolekcja,STAN,katalog,nazwa_p,nazwa_p2,opis,status,cena
				from przedmiot where nr='$dane02' order by nazwa",$db);
		
		list($nazwa10,$kolekcja10,$stan10,$katalog10,$nazwa_p10,$nazwa_p210,$opis10,$status10,$cena10)=mysql_Fetch_Row($ab10);
		
		
		// echo"$nazwa10,$kolekjca10,$stan10,$katalog10,$nazwa_p10,$nazwa_p210,$opis10,$status10";		
		?>
		<br>		
		<TABLE WIDTH="580" BORDER="0">
		<tr>
		<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="420">
		<?
		if ($widok=="tyl")
		{
		?>
		&nbsp <IMG SRC="<?echo$katalog10?>/<?echo$nazwa_p210?>.jpg" WIDTH="400" HEIGHT="300" BORDER="0" ALT="<?echo$nazwa10?>">
		<?
		}
		else
		{
		?>
		&nbsp <IMG SRC="<?echo$katalog10?>/<?echo$nazwa_p10?>.jpg" WIDTH="400" HEIGHT="300" BORDER="0" ALT="<?echo$nazwa10?>">
		<?
		};
		?>
		</TD>
		<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="160">
		
		<TABLE VALIGN="TOP" WIDTH="160" BORDER="0">
		<tr>
		<TD ALIGN="LEFT" VALIGN="TOP">
		<SPAN STYLE="font-family: Times New Roman; font-size: 24px; font-style: italic; color: #00CCFF">
		<?echo$kolekcja10?>
		</SPAN>
		</TD>
		</TR>
		<tr>
		<TD ALIGN="LEFT" VALIGN="TOP">
		<SPAN STYLE="font-family: Times New Roman; font-size: 16px; font-style: italic; color: #FFFFFF">
		<?echo$nazwa10?>
		</span>
		</TD>
		</TR>
<form ACTION="index1.php">		
		<?
		if ($status10=="koszulka")
		{
		?>
		<tr>
		<TD ALIGN="LEFT" VALIGN="TOP">
						 <TABLE ALIGN="LEFT" VALIGN="TOP" BORDER="0">
		<tr>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #FFCCFF">
		Rozmiar:
		</SPAN>
		</td>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #FFCCFF">
		&nbsp&nbsp&nbsp Ilo¶æ:
		</SPAN>
		</td>
		</tr>
		<tr>
		<td>
		<SELECT NAME="rozmiar10" STYLE="font-family: Times New Roman; font-size: 10px; color: #FF0000">
		<option VALUE="S">S</OPTION>
		<option VALUE="M">M</OPTION>
		<option VALUE="L">L</OPTION>
		<option VALUE="XL">XL</OPTION>
		<option VALUE="XXL">XXL</OPTION>
		<option VALUE="XXXL">XXXL</OPTION>
		</SELECT>
		</td> 
		<td>
		&nbsp&nbsp <SELECT NAME="ilosc10" STYLE="font-family: Times New Roman; font-size: 10px; color: #FF0000">
		<?
		for ($i=1;$i<101;$i++)
		{
		echo "<option VALUE='$i'>$i</OPTION>";
		};
		?>
		</select>
		</td>
		</table>
		</TD>
		</tr>
		<?
		}
		else
		{
		?>
		<tr>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #FFCCFF">
		Ilo¶æ:<br>
		</SPAN>
		<SELECT NAME="ilosc10" STYLE="font-family: Times New Roman; font-size: 10px; color: #FF0000">
		<?
		for ($i=1;$i<101;$i++)
		{
		echo "<option VALUE='$i'>$i</OPTION>";
		};
		?>
		</select>
		</TD>
		</tr>
		<?
		};
		?>				
		
		
		<tr>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px">
		<?
		echo "$opis10";
		?>
		</SPAN>	
		</TD>
		</TR>
		<tr>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px">
		Cena: <?echo$cena10?> z³.
		</span>
		</TD>
		</TR>
		<tr>
		<td>
		<input TYPE="hidden" name="nr20" value="<?echo$dane02?>">
		<INPUT TYPE="SUBMIT" NAME="dokosz" VALUE="Do koszyka" STYLE="font-family: Times New Roman; font-size: 12px">		
		</FORM>		
		</TD>
		</TR>
		
		
		</TABLE>
		
		</TD>
		</TR>
		<tr>
		
		<TD ALIGN="CENTER" VALIGN="TOP">
		
		<?
		if ($status10=="koszulka")
		{
		?>
		<A HREF="index1.php?widok=przod" TITLE="Przód"><SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #66CCFF">
		Przód	   
		</SPAN>
		</A>, &nbsp
		<A HREF="index1.php?widok=tyl" TITLE="Ty³">
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #66CCFF">
		Ty³
		</span>
		</A>		
		<?
		};
		?>
		
		</TD>
		<td>
		</TD>
		</TR>
		</TABLE>
		


<?
}

//        KONIEC WYSWIETLANIA PRODUKTOW 


//wype³niony formularz

	if($zambezlog!="")
	{
	 				  	
	 	if($nazwisko!=""&&$imie!=""&&$kodp!=""&&$miejscow!=""&&$ulica!=""&&$nrd!=""&&$tel!=""&&$zaplata!=""&&$email!=""&&$zalogowany=="")
		{
		?>
		<form ACTION="index1.php?request_server=www.nazwa.pl" name="form_login" method="POST">
		<?
		$submitcheck1="tak";
		?>
		<center>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Kupuj±cy:
		</SPAN>
		<TABLE ALIGN="CENTER" CELLSPACING="1" BORDER="0">
		<tr>
		<td>
		<?echo$imie?> &nbsp <?echo$nazwisko?> <input TYPE="hidden" name="imie" value="<?echo$imie?>"><input TYPE="hidden" name="nazwisko" value="<?echo$nazwisko?>">
		</TD>
		</TR>
		<tr>
		<td>
		<?echo$kodp?> &nbsp <?echo$miejscow?><input TYPE="hidden" name="kodp" value="<?echo$kodp?>"><input TYPE="hidden" name="miejscow" value="<?echo$miejscow?>">
 		</TD>
		</TR>
		<tr>
		<td>
		<?echo$ulica?> &nbsp <?echo$nrd?> &nbsp <?if ($nrm!=""){echo"/ $nrm";}?><input TYPE="hidden" name="ulica" value="<?echo$ulica?>"><input TYPE="hidden" name="nrd" value="<?echo$nrd?>"><input TYPE="hidden" name="nrm" value="<?echo$nrm?>">
		</TD>
		</TR>
		<tr>
		<td>
		Tel. <?echo$tel?> &nbsp E-mail &nbsp <?echo$email?><input TYPE="hidden" name="tel" value="<?echo$tel?>"><input TYPE="hidden" name="email" value="<?echo$email?>">
		</TD>
		</TR>
		<tr>
		<td>
		<b>Rodzaj zap³aty: <?echo$zaplata?></b><input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
		</TD>
		</TR>
		</TABLE>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Zamawia nastêpuj±ce przedmioty:
		</span>
		</center>		
		<?
		}
		else
		{
		$komunikat="WYPE£NIJ UWA¯NIE WYMAGANE POLA!";
		$zamow="tak";
		};	
	
	
	};



	
	
	// WYPE£NIONY FORMULARZ Z LOGOWANIEM
	
	
	if ($zamzlog!="")
	{
	?>
	<center>
	
	
	
	
			<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Kupuj±cy:
		</SPAN>
		<TABLE ALIGN="CENTER" CELLSPACING="1" BORDER="0">
		<tr>
		<td>
		<?echo$imiex?> &nbsp <?echo$nazwiskox?>
		</TD>
		</TR>
		<tr>
		<td>
		<?echo$kodpocztx?> &nbsp <?echo$miejscowx?>
 		</TD>
		</TR>
		<tr>
		<td>
		<?echo$ulicax?> &nbsp <?echo$nrdx?> &nbsp <?if ($nrmx!=""){echo"/ $nrmx";}?>
		</TD>
		</TR>
		<tr>
		<td>
		Tel. <?echo$telx?> &nbsp E-mail &nbsp <?echo$emailx?>
		</TD>
		</TR>
		<tr>
		<td>
		<b>Rodzaj zap³aty: <?echo$zaplata?></b><input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
		</TD>
		</TR>
		</TABLE>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Zamawia nastêpuj±ce przedmioty:
		</span>
		</center>
	
	
	
	
	
	<?
	};


// WY¦WIETLANIE SZCZEGU£ÓW Z  KOSZYKA

if($koszczeg!=""||$zamow!=""||$login!=""||$zambezlog!=""||$zamzlog!="")
{
$cena50=0;
?>
<TABLE ALIGN="CENTER" VALIGN="TOP" CELLSPACING="0" CELLPADDING="0" BORDER="0" STYLE="border: 1px dotted #0099FF;">
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	lp &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	nazwa przedmiotu: &nbsp 
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	rozmiar &nbsp 
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	ilo¶æ &nbsp 
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	przedmiot &nbsp 
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	cena /szt. &nbsp 
	</TD>
	
	
	</TR>   	
	
	<?
	for($i=1;$i<=$koszyk1;$i++)
	{
	?>
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?echo$i?>
	</TD>
	<td ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	$e="nr30$i";
	
	
	$e1=$$e;
	
	
	$ab50=mysql_query("SELECT  nazwa,status,cena from przedmiot where nr='$e1'",$db);
		
		list($nazwa50,$status50,$cena51)=mysql_Fetch_Row($ab50);
		
	echo$nazwa50;
	$il3="ilosc30$i";
	$il4=$$il3;
	$cena50+=$cena51*$il4;
	
	?>
	</TD>
	
 	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	$r="rozmiar30$i";
	
	echo$$r;
	?> &nbsp
	</td>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	$il="ilosc30$i";
	echo $$il;
	
	?>

	
	
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	
	echo $status50;
	
	?> &nbsp

	
	
	</TD>  
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #0099FF;">
	<?
	echo $cena51;
	?>
	&nbsp z³.	
	</TD>  
	
	</TR>
	<?
	};
	?>
	<tr>
	<td>
	</TD>
	<td>
	</TD>
	<td>
	</TD>
	<td>
	</TD>
	<td>
	</TD>
	
	<TD ALIGN="CENTER" VALIGN="MIDDLE" STYLE="border: 1px dotted #0099FF;">
	Koszt w sumie:<br>
	<?echo$cena50?> z³.
	</TD>
	
	</TR>
	
	</TABLE>
	<center>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 13px">

	Prosimy przeczytaæ <A HREF="regulam.php?regul=yes" TARGET="_blank" TITLE="regulamin">regulamin zakupów</A>.
	Masz pytania? <A HREF="mailto:biuro@skulls.nazwa.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: #FFFFFF">Napisz do nas</A>. Lub tel 0-607-196-453</SPAN>
	</CENTER>
	
	
	<?
//	Potwierdzenie zamawiania z logowaniem

	if($zamzlog!="")
	{
	if($zaplata=="zapobraniem")
	{
	$cena54=$cena50+9;
	echo "<center>+ koszt wysylki 9z³. (Za pobraniem).<SPAN STYLE=' font-family: Times New Roman; color: #FF99FF; font-size: 16px'> W sumie do zap³aty $cena54 z³.<br><br></SPAN></CENTER>";
	};
	
	if($zaplata=="przelew")
	{
	$cena54=$cena50+4;
	echo "<center>+ koszt wysylki 4z³. (Przelewem).<SPAN STYLE=' font-family: Times New Roman; color: #FF99FF; font-size: 16px'> W sumie do zap³aty $cena54 z³.<br><br></SPAN></CENTER>";
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #33FFFF">
	Wp³atê traktujemy jako potwierdzenie zamówienia z pañstwa strony.
	Od dnia zamówienia czekamy 14 dni na przelew, potem zamówienie uznaje siê za anulowane (zostanie wys³any e-mail).
	Im szybciej wp³acisz tym szybciej przedmioty dotr± do Ciebie!!!
	Je¿eli zechc± pañstwo zrezygnowaæ z zamówienia - nic prostrzego.
	Wystarczy nie wp³aciæ pieniêdzy na nasze konto.
	</SPAN><center><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: #FF99FF">
 	Po naci¶niêciu potwierdzam otrzymaj± pañstwo nasze konto, oraz nr zamówienia, który koniecznie trzeba wpisaæ w rubryce "Tytu³em" aby¶my jak najszybciej rozpoznali wp³acaj±cego i jego zamówienie.</SPAN><br>
	<br>
	
	
	
	<?
	$kodprzelewu=date(mdhis);
	};
	$checksubmit2="tak"
	
	?>
	<form ACTION="index1.php">

	<input TYPE="hidden" name="kodprzelewu" value="<?echo$kodprzelewu?>">
	<input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
		
	<center>
	<br>
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy¶æ zawarto¶æ koszyka" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp	
	<br><br>
	<input TYPE="submit" name="zamow" value="<< wstecz"> &nbsp &nbsp
	<input TYPE="submit" name="destroy" value="Wyloguj"> &nbsp &nbsp
		<INPUT TYPE="SUBMIT" NAME="potwzlog" VALUE="POTWIERDZAM" STYLE="font-family: Times New Roman; font-size: 16px">
	</CENTER>
	</FORM>
	<?
	};
	?>
	
	
	
	
	
	
	
	
	<?
	if($zamzlog=="")
	{
	
	if($zambezlog==""||$komunikat!="")
	{
	?>
	<center>
	<form ACTION="index1.php">
	<br>
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy¶æ zawarto¶æ koszyka" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp
	<?
	if ($zamow==""&&$login=="")
	{
	
	?>
	<INPUT TYPE="SUBMIT" NAME="zamow" VALUE="Zamawiam" STYLE="font-family: Times New Roman; font-size: 12px">
	<?
	};
	?>
	</FORM> 
	</CENTER>
	<?
	}
	else
	{
	?>
	<center>
	
	
	<?
	// bez logowania za pobraniem
	if($zaplata=="zapobraniem")
	{
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #33FFFF">
	<?
	$cena54=$cena50+9;
	echo "+ koszt wysylki 9z³. (Za pobraniem).<SPAN STYLE=' font-family: Times New Roman; color: #FF99FF; font-size: 16px'> W sumie do zap³aty $cena54 z³.<br>Przy odbiorze.<br><br></SPAN>";
	$submitcheck1="tak";
	?>
	
	<input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
	<input TYPE="submit" name="zamow" value="<< wstecz">
	<INPUT TYPE="SUBMIT" NAME="potw1" VALUE="Potwierdzam" STYLE="font-family: Times New Roman; font-size: 16px">
	</form>
	</span>
	<?
	};
	
	
	if($zaplata=="przelew")
	{
	$cena54=$cena50+4;
	echo "+ koszt wysylki 4z³. (op³ata przelewem).<SPAN STYLE=' font-family: Times New Roman; color: #FF99FF; font-size: 16px'> W sumie do zap³aty $cena54 z³.<br><br></SPAN>";
	$kodprzelewu=date(mdhis);
	?>
	</center>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #33FFFF">
	Wp³atê traktujemy jako potwierdzenie zamówienia z pañstwa strony.
	Od dnia zamówienia czekamy 14 dni na przelew, potem zamówienie uznaje siê za anulowane (zostanie wys³any e-mail).
	Im szybciej wp³acisz tym szybciej przedmioty dotr± do Ciebie!!!
	Je¿eli zechc± pañstwo zrezygnowaæ z zamówienia - nic prostrzego.
	Wystarczy nie wp³aciæ pieniêdzy na nasze konto.
	</SPAN><center><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: #FF99FF">
 	Po naci¶niêciu potwierdzam otrzymaj± pañstwo nasze konto, oraz nr zamówienia, który koniecznie trzeba wpisaæ w rubryce "Tytu³em" aby¶my jak najszybciej rozpoznali wp³acaj±cego i jego zamówienie.</SPAN><br>
	<br>
	<input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
	<input TYPE="hidden" name="kodprzelewu" value="<?echo$kodprzelewu?>">
	<input TYPE="submit" name="zamow" value="<< wstecz">
	<INPUT TYPE="SUBMIT" NAME="potw1" VALUE="Potwierdzam" STYLE="font-family: Times New Roman; font-size: 16px">
	</FORM>
	<br>
	&nbsp
	</center>
	<?
	};
	
	
	};
	
	};
	?>
	
	
	
	<!-- LOGOWANIE -->
	
	<?
	if ($login!=""&&$login30=="")
	{
	?>
	<form ACTION="index1.php">
	
	
	<SPAN STYLE=" font-family: Times New Roman; color: #CCFFCC; font-size: 16px; font-weight: bold">
	<?echo$komunikat1?>
	</SPAN>
	
	<TABLE WIDTH="580" BORDER="0">
	
	<tr>
	<td>
	Login: 
	</TD>
	<td>
	<input TYPE="text" name="login1" value="" MAXLENGTH="15">
	</TD>
	<TD ALIGN="CENTER">
	<A HREF="newuser.php" TARGET="_blank" TITLE="Nowy u¿ytkownik" STYLE="color: #33FFFF; font-size: 16px; font-family: Times New Roman">Nowy u¿ytkownik, zarejestruj siê w 2 minuty</A>
	</TD>
	</TR>
	<tr>
	<td>
	Has³o:
	</td>
	<td>
	<input TYPE="password" name="haslo1" value="" MAXLENGTH="15">
	</TD>
	</TR>
	
	</table>
	<center>
	<br>
	<INPUT TYPE="SUBMIT" name="wstecz1" value="<< Powrót"> &nbsp
	<INPUT TYPE="SUBMIT" name="login30" value="Zaloguj >>">
	<br><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #CCCCFF">
	Je¿eli jeste¶ zalogowanym u¿ytkownikiem, to masz dodatkowe mo¿liwo¶ci.<br>
	Mo¿esz zamawiaæ przedmioty i p³aciæ dopiero przy odbiorze (za pobraniem).
	</SPAN>
	</center>
	</FORM>
	
	
	
	<?
	};
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	<?
// FORMULARZ ZAMAWIANIA	
	if($zamow!="")
	{
	
	
	if($zalogowany=="")
	{
	?>
	<form ACTION="index1.php">
	
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<center>
	<input TYPE="submit" name="login" value="Zaloguj siê">
	</CENTER>
	<br>
	LUB<br>
	Wype³nij dok³adnie poni¿szy formularz,<br>
	aby zamówiæ bez logowania (tylko dane teleadresowe).
	
	</SPAN>
	<?
	}
	else
	{
	?>
	<FORM ACTION="index1.php" method=post>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	Witaj <?echo$loginx?>. Mo¿esz teraz chodziæ po sklepie<br>
	bez konieczno¶ci ponownego wype³niania formularza. 
	</span>
	<?
	};
	
	if($komunikat!="")
	{
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: #FFFFCC">
	<?echo$komunikat?>
	</span>
	<?
	};
	?>
	<TABLE WIDTH="580" BORDER="0">

	<tr>
	<td WIDTH="100">
	Imie:
	</td>
	<td WIDTH="150">	
	<input TYPE="TEXT" name="imie" value="<?echo$imiex?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="CENTER">
	
	</TD>
	</tr>
	<tr>
	<td>
	Nazwisko
	</td>
	<td>
	<input TYPE="TEXT" name="nazwisko" value="<?echo$nazwiskox?>" MAXLENGTH="25">
	</td>
	<TD ALIGN="CENTER">
	</TD>
	</tr>
	<tr>
	<td>
	Kod pocztowy:
	</td>
	<td>
	<INPUT TYPE="TEXT" NAME="kodp" MAXLENGTH="6" value="<?echo$kodpocztx?>">
	</td>
	<TD ALIGN="CENTER">
	</TD>
	</tr>
	<tr>
	<td>
	Miejscowo¶æ:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="miejscow" MAXLENGTH="20" value="<?echo$miejscowx?>">
	</TD>
	</TR>
	<tr>
	<td>
	Ulica: 
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="ulica" MAXLENGTH="25" value="<?echo$ulicax?>">
	</TD>
	<TD ALIGN="CENTER">
	</TD>
	</TR>
	<tr>
	<td>
	Nr domu:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="nrd" MAXLENGTH="6" value="<?echo$nrdx?>">
	</TD>
	<TD ALIGN="CENTER">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #6699FF">
	
	</span>
	</TD>
	</TR>
	<tr>
	<td>
	Nr mieszkania:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="nrm" MAXLENGTH="6" value="<?echo$nrmx?>">
	</TD>
	</TR>
	<tr>
	<td>
	Nr telefonu:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="tel" MAXLENGTH="20" value="<?echo$telx?>">
	</TD>
	</TR>	
	<tr>
	<td>
	e-mail
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="email" MAXLENGTH="30" value="<?echo$emailx?>">
	</TD>
	</TR>
	<tr>
	<td>
	Rodzaj zap³aty
	</TD>
	<td>
	
	
	<SELECT NAME="zaplata">
	<option VALUE="przelew">Przelew (+4 z³ wysy³ka)</OPTION>
	<option VALUE="zapobraniem" selected>Za pobraniem (+9z³ wysy³ka)</OPTION>
	</select>
	
	
	</TD>
	<td>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #6699FF">
	
	</span>
	</TD>
	</TR>
	<tr>
	<TD ALIGN="CENTER" COLSPAN="3">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #6699FF">
	</span>
	</TD>
	</TR>
	</TABLE>
	<center>
	<?
	if ($zalogowany=="")
	{
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #6699FF">
	<INPUT TYPE="SUBMIT" NAME="zambezlog" VALUE="Zamów bez logowania >>" STYLE="font-family: Times New Roman; font-size: 12px">
	(zamawianie bez logowania - najpierw wype³nij formularz)
	
	</span>
	</FORM>
	<?
	}
	else
	{
	?>
	<input TYPE="submit" name="destroy" value="Wyloguj" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp
	<INPUT TYPE="SUBMIT" NAME="zamzlog" VALUE="Zamawiam >>" STYLE="font-family: Times New Roman; font-size: 14px">
	</FORM>
	<?
	};
	?>
	</CENTER>
	<?
	};
	?>


<?
};














  // FRONTPAGE frontpage
  



  
  if($frontpage!=""&&$dane02=="")
  {
  
  
  $abcd=mysql_query("SELECT nazwa_p FROM `frontpage` where kolekcja='$dane01' LIMIT 0 , 1",$db);
  list($nazwapliku)=mysql_fetch_row($abcd);  
  
  ?>
  
  <br><br>
  <IMG SRC="index/grafiki/<?echo$nazwapliku?>.jpg" WIDTH="580" HEIGHT="300" BORDER="0" ALT="">
  
  
  <?
  };















  
  
  








//	  WY¦WIETLANIE PROMO 
?>
<CENTER>
<?
if ($dane02==""&&$frontpage=="")
{

$tablenr=0;
?>
<table>
<tr>
<?
   		$lb1=mysql_query("select przedmiot.nr as nazwa,kolekcja,katalog,nazwa_p from 
		przedmiot,promo where promo.numer=przedmiot.nr order by 
		promo.lp",$db); 

		
		while(list($nr05,$kolekcja05,$katalog05,$nazwa_p05)=mysql_Fetch_Row($lb1))
		{
		?>
		
		<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="110" HEIGHT="85" STYLE="border: 1px dotted #0099FF">
		
		<A HREF="index1.php?nr02=<?echo$nr05?>&&kolekcja01=<?echo$kolekcja05?>&&do1=wyzeroj">
		<IMG SRC='<?echo$katalog05?>/<?echo$nazwa_p05?>.jpg' WIDTH="100" HEIGHT="75" BORDER="0" ALT="<?echo$nazwa05?>">
		</A>
		
		
		
		
		
		
		</td>
		<?
		$tablenr++;
		if($tablenr==4)
		{
		$tablenr=0;
		echo "</tr><tr>";
		};
												   	
		
		 
		
		};


?>
</tr>
</TABLE>
<br>

<?

};







// WY¦WIETLANIE O FIRMIE
if ($dane02=="ofirm"&&$koszczeg==""&&$zamow==""&&$newuser==""&&$login==""&&$zambezlog=="")
{

$plik01=fopen("index/ofirmie.txt","r");

do 
{
$tekst=fgets($plik01,"4096");
echo"$tekst<br>";
}
while ($tekst!="");
fclose($plik01);
}

// WY¦WIETLANIE REGULAMINU
if ($dane02=="regul"&&$koszczeg==""&&$zamow==""&&$newuser==""&&$login==""&&$zambezlog=="")
{

$plik02=fopen("index/regul.txt","r");

do 
{
$tekst1=fgets($plik02,"4096");
echo"$tekst1<br>";
}
while ($tekst1!="");
fclose($plik02);
}
?>



</center>

</TD>




<TD VALIGN="TOP" WIDTH="100" >

<TABLE border=0 px frame=void CELLSPACING=0 px CELLPADDING=0 px>
<TR>

<?
if($dane01=="")
{
?>
<center>



<?

$ab90=mysql_query("SELECT  liczba from licznik where lp='1'",$db);
list($liczba1)=mysql_Fetch_Row($ab90);

if($checklicznik=="")
{
$checklicznik="jest";
$liczba1=$liczba1+1;

$ab91=mysql_query("UPDATE `licznik` SET `liczba` = '$liczba1' WHERE `lp` = '1' LIMIT 1",$db); 

};
?>

<SPAN STYLE="font-family: Times New Roman; font-size: 14px; color: #FF99FF; font-style: italic">
Nasz serwis odwiedzi³o ju¿ <?echo$liczba1?> ludzi. 
</SPAN>
<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="#CCCCFF">
<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #66CCFF">


Szpenio wydrukowa³ Ci Twój ulubiony motor!!!
<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="#CCCCFF">
T-SHIRTY
rêcznie malowane, wykonane przez profesjonaliste.<br>
Oryginalne wzory, które widniej± po obu stronach koszulki.
<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="#CCCCFF">
Wszystkie rozmiary, ci±gle nowe rzeczy.<br>
<A HREF="http://www.allegro.pl" TARGET="_blank" TITLE="Allegro.pl"><IMG SRC="index/grafiki/link2.gif" BORDER="0" ALT=""></A>
</SPAN>



</center>
<?
};



if ($dane01!="")
{
?>
<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1r.gif">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px; color: #33FFFF">
<MARQUEE BEHAVIOR="ALTERNATE" LOOP="0">
<?echo$dane01?>
</MARQUEE>
</SPAN>
</TD>
</TR>
<tr>
<!-- WY¦WIETLANIE ZASOBÓW Z KOLEKCJI -->
<TD ALIGN="LEFT">

<?

  		$cdx=mysql_query("SELECT  nr,nazwa from przedmiot 
		where kolekcja='$dane01' order by nazwa",$db);
		$xxx=mysql_num_rows($cdx);
		$aaa=$xxx-10;		
		
				
		if($pageup==""&&$pagedown==""&&$dane02==""||$wyzeruj!="")
		{
		$limit1=0;
		$limit2=10;
		};
		if($limit1<$aaa&&$pageup!="")
		{
		$limit1+=10;
		
		};
		if($pagedown!=""&&$limit1>0)
		{
		$limit1-=10;
		
		};
		
  		
		
		
		
		
		
  		$ab=mysql_query("SELECT  nr,nazwa from przedmiot 
		where kolekcja='$dane01' order by nazwa LIMIT $limit1 , $limit2 ",$db);
				
		while(list($nr01,$nazwa)=mysql_Fetch_Row($ab))
		{
		?>
		
		&nbsp <A HREF=index1.php?&&nr02=<?echo$nr01?>><SPAN STYLE=' font-family: Times New Roman; font-size: 12pt; color: #FFFFFF'><?echo$nazwa?><br></span></A>
				
		<?
		

		};
		
		
		if($xxx>10)
		{
		?>
		<center>
		<form ACTION="index1.php">
		<br>
		<input TYPE="hidden" name="frontpage" value="frontpage">
		<input TYPE="submit" name="pagedown" value="<<">
		<input TYPE="submit" name="pageup" value=">>">
		</CENTER>
		</FORM>
		<?
		}
		else
		{
		echo"<br>";
		};
		?>
		<center>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #CCFFCC">
		Wy¶wietlone:<br>od 
		<?
		$napisz=$limit1+10;
		echo " $limit1";
		echo " do $napisz<br>";
		echo "Wszystkich: $xxx";
		?>
		.
		</SPAN>
		</CENTER>
		
		
		<?
				
echo "<br>";
	 	

}
else
{
?>
<td>



<?
};
?>

</td>
</tr>
<tr>
<TD>
	
	
</TD>
</TR>

</table>
</TD>
</TR>

</TABLE>

<?if ($dane02==""&&$rozklad==""&&$dane01=="")
{
?>




<TABLE WIDTH="780" BORDER="0" STYLE="border: 1px dotted #0099FF;">
<tr>
<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="140">

<SPAN STYLE="font-family: Times New Roman; font-size: 14px; color: #00CCFF">
<MARQUEE BEHAVIOR="ALTERNATE" LOOP="0">
Nasze stoisko -->
</MARQUEE>
<br><br>
Wystawa motocykli i skuterów w WARSZAWIE. MOTOR BIKE SHOW POLAND 2005.<br><br>


</SPAN>

</td>
<TD WIDTH="640">
<TABLE WIDTH=640 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/impra1_01.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_02.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_03.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_04.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_05.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_06.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_07.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_08.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_09.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_10.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_11.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_12.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_13.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_14.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_15.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_16.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
</TABLE>

</td>
</tr>
</TABLE>




<TABLE WIDTH="780" BORDER="0" STYLE="border: 1px dotted #0099FF;">
<tr>
<TD WIDTH="640">
<TABLE WIDTH=640 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/IM000828_01.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_02.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_03.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_04.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/IM000828_05.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_06.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_07.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_08.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/IM000828_09.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_10.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_11.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_12.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/IM000828_13.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_14.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_15.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/IM000828_16.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
</TABLE>


<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="140">

<SPAN STYLE="font-family: Times New Roman; font-size: 14px; color: #00CCFF">
<br><br>
Gie³da motocykli w Warszawie.<BR><BR>
<-- Legendarny TRIUMPH

</SPAN>

</td>


	

</td>
</tr>
</TABLE>







<?};?>




<?if ($rozklad!=""&&$dane02=="")
{
?>




<TABLE WIDTH="780" BORDER="0" STYLE="border: 1px dotted #0099FF;">
<tr>
<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="140">

<SPAN STYLE="font-family: Times New Roman; font-size: 14px; color: #FFFFFF">
<MARQUEE DIRECTION="RIGHT" BEHAVIOR="SCROLL" LOOP="0">ROZK£AD JAZDY</MARQUEE>
<br>
W najbli¿szy weekend namiot SKULLS jedzie na impreze do poznania.<br><br>
Nasze stoisko -->

</SPAN>

</td>
<TD WIDTH="640">
<TABLE WIDTH=640 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/impra1_01.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_02.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_03.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_04.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_05.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_06.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_07.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_08.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_09.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_10.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_11.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_12.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/impra1_13.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_14.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_15.jpg" WIDTH=160 HEIGHT=120></TD>
		<TD>
			<IMG SRC="images/impra1_16.jpg" WIDTH=160 HEIGHT=120></TD>
	</TR>
</TABLE>

</td>
</tr>
</TABLE>

<?};?>






















<br>
<HR ALIGN="CENTER" SIZE="2" WIDTH="780" COLOR="#CCFFCC" STYLE="color: #CCFFCC">

<SPAN STYLE=" font-family: Times New Roman; font-size: 13px">

Prosimy przeczytaæ <A HREF="regulam.php?regul=yes" TARGET="_blank" TITLE="regulamin">regulamin zakupów</A>.
Masz pytania? <A HREF="mailto:biuro@skulls.nazwa.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: #FFFFFF">Napisz do nas</A>. Lub tel 0-607-196-453<br>
e-mail: biuro@skulls.nazwa.pl admin@skulls.nazwa.pl<br>
Webmaster: sikurzakk@wsi.edu.pl<br>
</SPAN>
WWW.SKULLS.PL<br>
<A HREF="index1.php?ofirm=ofirm" TITLE="O firmie" STYLE="font-family: Times New Roman; font-size: 12px">O firmie</A>
</center>
</body>
</meta>
</html>

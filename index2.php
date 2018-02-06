<?session_start();

//ustawienia strony
session_register('bgcolor');
session_register('banertype');
session_register('krawedztabeli');
session_register('textcolor');
session_register('linkcolor');
session_register('katalogkameleon1');
session_register('bckgnd');
session_register('banertop');
session_register('baner1l');
session_register('baner2l');
session_register('baner3l');
session_register('baner1p');
session_register('baner2p');
session_register('baner3p');
session_register('url1l');
session_register('url2l');
session_register('url3l');
session_register('url1p');
session_register('url2p');
session_register('url3p');
session_register('checksession');

//punkty

session_register('pmroczne');
session_register('pzwykle');
session_register('pmuzyczne');
session_register('psportowe');





//koniec ustawien

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




$db=mysql_Connect("sql. .nazwa.pl"," _1","kameleon");
  mysql_select_db(" _1");


 		// wylogowanie

		if ($wyloguj!="")
		{
		$zalogowany="";
		$pmroczne="";
		$pzwykle="";
		$pmuzyczne="";
		$psportowe="";
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
		$destroy="yes";
		};


		//punktowanie za wyb�r kolekcji.

		if($do3!="")
		{

		$kameleon3=mysql_query("SELECT p_ms,p_ss,p_zs,p_mus FROM `kolekcje` where kolekcja='$kolekcja01' LIMIT 0 , 1",$db);

		list($p_ms15,$p_ss15,$p_zs15,$p_mus15)=mysql_Fetch_Row($kameleon3);
		{
		$pmroczne+=$p_ms15;
		$pzwykle+=$p_zs15;
		$pmuzyczne+=$p_mus15;
		$psportowe+=$p_ss15;
		};

		};











		if($login30!=""&&$dane02="zaloguj")
   {


   $abc=mysql_query("SELECT * FROM `adresy` where haslo='$haslo1'&&login='$login1' LIMIT 0 , 1",$db);

		list($nr100,$haslo100,$login100,$imie100,$nazwisko100,$kodpoczt100,$miejscow100,$ulica100,$nrd100,$nrm100,$tel100,$email100,$p_ms100,$p_ss100,$p_zs100,$p_mus100)=mysql_Fetch_Row($abc);



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
		$pmroczne=$p_ms100;
		$psportowe=$p_ss100;
		$pzwykle=$p_zs100;
		$pmuzyczne=$p_mus100;

		$dane02="";
		$zalogowany="zalogowany";
		if ($zamow!="")
		{
		?>
		<input type="hidden" name="zamow" value="tak">
		<?
		};
		$login66="";
		}
   		else
		{
		$komunikat1="Nieprawid�owy login, lub has�o.";
		$login66="tak";
		if ($zamow!="")
		{
		?>
		<input type="hidden" name="zamow" value="tak">
		<?
		};
		};

   };

   if ($wstecz1!=""&&$dane02=="zaloguj")
   {
   $dane02="";

   if ($zamow!="")
		{
		?>
		<input type="hidden" name="zamow" value="tak">
		<?
		};
   }
































		// ustawienia






		   $roznica1=0;
		   $roznica1+=$pmroczne;

		   $roznica2=0;
		   $roznica2+=$pzwykle;

		   $roznica3=0;
		   $roznica3+=$pmuzyczne;

		   $roznica4=0;
		   $roznica4+=$psportowe;


		   // SORTOWANIE B�BELKOWE




		   $x1=$roznica1;
		   $x2=$roznica2;
		   $x3=$roznica3;
		   $x4=$roznica4;


		   for ($i=0;$i<=4;$i++)
		   {
		   if($x4<$x3)
		   {
		   $y3=$x4;
		   $y4=$x3;
		   $x3=$y3;
		   $x4=$y4;
		   };
		   if($x3<$x2)
		   {
		   $y2=$x3;
		   $y3=$x2;
		   $x2=$y2;
		   $x3=$y3;
		   };
		   if($x2<$x1)
		   {
		   $y1=$x2;
		   $y2=$x1;
		   $x1=$y1;
		   $x2=$y2;
		   };

		   };


		if($x4==$roznica3)
		{
		$kameleonklimat="muzyczny";
		};

		if($x4==$roznica4)
		{
		$kameleonklimat="sportowy";
		};
		if($x4==$roznica1)
		{
		$kameleonklimat="mroczny";
		};

		if($x4==$roznica2)
		{
		$kameleonklimat="zwykly";
		};




		if($checksession=="")
		{
		   $checksession="yes";
		   $kameleonklimat="zwykly";
		};






		$kameleon=mysql_query("SELECT * FROM `general` where klimat='$kameleonklimat' LIMIT 0 , 1",$db);

		list($trash1,$trash2,$trash3,$banertype1,$bgcolor1,$textcolor1,$linkcolor1,$krawedztabeli1,$kolorlini1)=mysql_Fetch_Row($kameleon);
		{
		$bgcolor=$bgcolor1;
		$textcolor=$textcolor1;
		$linkcolor=$linkcolor1;
		$krawedztabeli=$krawedztabeli1;
		$kolorlini=$kolorlini1;
		$banertype=$banertype1;
		};


		$kameleon1=mysql_query("select * from banery where `banertype`='$banertype' LIMIT 0,1",$db);
		list($trash1,$katalogkameleon1a,$trash2,$bckgnd1,$banertopa,$baner1la,$baner2la,$baner3la,$baner1pa,$baner2pa,$baner3pa,$url1pa,$url2pa,$url3pa,$url3la,$url2la,$url1la)=mysql_Fetch_Row($kameleon1);
		{
		$katalogkameleon1=$katalogkameleon1a;
		$banertop=$banertopa;
		$baner1l=$baner1la;
		$baner2l=$baner2la;
		$baner3l=$baner3la;
		$baner1p=$baner1pa;
		$baner2p=$baner2pa;
		$baner3p=$baner3pa;
		$bckgnd=$bckgnd1;
		$url1l=$url1la;
		$url2l=$url2la;
		$url3l=$url3la;
		$url1p=$url1pa;
		$url2p=$url2pa;
		$url3p=$url3pa;
		};






























		// seria danych dla sekcji prawej
  		if($kolekcja01!="")
		{
		$dane01=$kolekcja01;
		};


		// Seria danych dla sekcji �rodkowej
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




		if($login66!="")
		{
		$dane02="zaloguj";
		};




if ($destroy!="")   //ODSWIEZANIE
   {
   $submitcheck1="";
   $checksubmit2="";
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




   	 	 // USTAWIENIE DLA ZALOGOWANEGO
		if ($zalogowany!="")

	   	   {

	   	   $kameleon5=mysql_query("UPDATE `adresy` SET `p_ms` = '$pmroczne',`p_ss` = '$psportowe',`p_zs` = '$pzwykle',`p_mus` = '$pmuzyczne' WHERE `login` = '$loginx' LIMIT 1",$db);



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
<META HTTP-EQUIV="Creation-date" CONTENT="2005-04-25T13:29:10Z">
<META HTTP-EQUIV="Reply-to" CONTENT="si k@wsi.edu.pl">
<META HTTP-EQUIV="Content-Language" CONTENT="pl">
<META NAME="Keywords" CONTENT="sklep">
<META NAME="Description" CONTENT="W sprzedarzy wszystko, co chcesz">
<META NAME="Author" CONTENT="Krzysztoff">
<title>
KAMELEON
</TITLE>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--
function onmouseover_1() {

}
//-->
</SCRIPT>
</HEAD>

<BODY  BACKGROUND="<?echo$katalogkameleon1?><?echo$bckgnd?>" TEXT="<?echo$textcolor?>" LINK="<?echo$linkcolor?>" ALINK="<?echo$linkcolor?>" VLINK="<?echo$linkcolor?>">

<?
  //REALIZACJA ZAM�WIENIA Z LOGOWANIEM PRZELEW.
  if ($potwzlog!=""&&$kodprzelewu!=""&&$zaplata=="przelew"&&$checksubmit2!="")
  {

   ?>
  <TABLE ALIGN="CENTER" BORDER="1" BGCOLOR="<?echo$bgcolor?>">
  <tr>
  <td>
  <?

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
   <form ACTION="index2.php">
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>

   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Dokonano zam�wienia.<br>
      Potwierdzenie zam�wienia zosta�o wys�ane emailem na konto <?echo$emailx?>.<br>
   Dzi�kujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Wp�aty prosimy dokonywa� na konto:<br>
   </SPAN>
   <table border=1 STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   <SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: <?echo$textcolor?>; font-weight: bold">
   Poni�sze dane prosz� sobie zanotowa�, lub zapisa� na dysku. Zostan� one tak�e wys�ane na podany przez pa�stwa e-mail.</SPAN>
   <br><br>
   Nazwa odbiorcy:<br>
      <br>
       ul.   i     &nbsp &nbsp<br><br>

   Nr konta:<br>
    <br><br>

   Bank Sp��dzielczy  <br><br>
      <?
   $cena57+=4;
   ?>
   Kwota: <?echo$cena57?> z�<br><br>
   Tytu�em: Zamowienie nr: <?echo$kodprzelewu?>


   </TD>
   <TD ALIGN="LEFT" VALIGN="TOP" WIDTH="540" HEIGHT="360" BACKGROUND="index/grafiki/blankiet.jpg">
   <TABLE CELLSPACING="4" CELLPADDING="3" BORDER="0" STYLE="font-family: Times New Roman; font-size: 16px; color: #000000; font-weight: bold">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   &nbsp &nbsp
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp ul.   i
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp
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
   <SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: <?echo$textcolor?>">
   Natychmiast po zaksi�gowaniu wp�aty wy�lemy zam�wione przedmioty na Pa�stwa adres.<br>
   Z regu�y trwa to od 2 do 7 dni roboczych.<br>
   W przypadku wi�kszych zam�wie� b�dziemy si� kontaktowa� z Pa�stwem telefonicznie.<br>
   Na wp�at� czekamy 14 dni. P��niej zam�wienie zostaje anulowane.
   �yczymy udanych zakup�w.

   </SPAN>
   <?
   $message="Zamowienie  .pl. \n Czekamy na wplate od Panstwa na konto: \n Nazwa odbiorcy: \n         ul.   i     \n Nr konta:   \n Bank Sp��dzielczy   Kwota: $cena57 z�. \n Tytu�em: Zamowienie nr: $kodprzelewu \n\n\n Zamowienie zlozone przez uzytkownika $loginx    \n\n    Dzi�kujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www. .pl";
   mail($emailx, '  Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@ .nazwa.pl");


   $dane02="";
   $koszyk1=0;
   $dane01="";
   $zamow="";
   $login="";
   $koszczeg="";
   $zambezlog="";
//   $zalogowany="";
//   $loginx="";
//   $imiex="";
//		$nazwiskox="";
//		$kodpocztx="";
//		$miejscowx="";
//		$ulicax="";
//		$nrdx="";
//		$nrmx="";
//		$telx="";
//		$emailx="";
		$limit1="";
		$limit2="";



   ?>

   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
<!--   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">  -->
   <input TYPE="submit" name="wylog" value="Powr�t do sklepu">

   </center>
   </FORM>

   <?













  ?>
  </td>
   </tr>
   </table>

  <?

  return;
  };





  //REALIZACJA ZAM�WIENIA Z LOGOWANIEM ZA POBRANIEM.
  if($potwzlog!=""&&$zaplata=="zapobraniem"&&$checksubmit2!="")
  {

  ?>
  <TABLE ALIGN="CENTER" BORDER="1" BGCOLOR="<?echo$bgcolor?>">
  <tr>
  <td>
  <?


  $checksubmit2="";
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

  <form ACTION="index2.php">
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>

   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Dokonano zam�wienia.<br>
   Dzi�kujemy za zakupy w naszym sklepie.<br>
   Potwierdzenie zam�wienia zosta�o wys�ane emailem na podane konto.<br>
   <br>
   </SPAN>
   <br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">



  <?
  $cena57+=9;
   $message="Zamowienie  .pl. \n\nDzien dobry.\n\n Potwierdzamy panstwa zamowienie w naszym sklepie.\n\n Na poczcie (lub listonoszowi) trzeba bedzie zaplacic $cena57 z�. przy odbiorze. \n\n\n      Dzi�kujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www. .pl";
   mail($emailx, '  Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@ .nazwa.pl");


   ?>
   Przy odbiorze do zap�aty b�dzie <?echo$cena57?> z�.<br><br>
   </SPAN>
   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
<!--   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">  -->
   <input TYPE="submit" name="wylogu" value="Powr�t do sklepu">


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
//   $zalogowany="";
//   $loginx="";
//   $imiex="";
//		$nazwiskox="";
//		$kodpocztx="";
//		$miejscowx="";
//		$ulicax="";
//		$nrdx="";
//		$nrmx="";
//		$telx="";
//		$emailx="";
		$limit1="";
		$limit2="";


  ?>
  </td>
   </tr>
   </table>

  <?

  return;
  }















//REALIZACJA ZAMOWIENIA BEZ LOGOWANIA PRZELEW
   if($potw1!=""&&$submitcheck1!=""&&$zaplata=="przelew" )
   {

   ?>
  <TABLE ALIGN="CENTER" BORDER="1" BGCOLOR="<?echo$bgcolor?>">
  <tr>
  <td>
  <?


   $submitcheck1="";

   $cena57=0;


   $ab65=mysql_query("INSERT INTO adresy (nr,haslo,login,imie,nazwisko,kodpoczt,miescow,ulica,nrd,nrm,tel,email) VALUES ('','bez has�a', 'bez logowania', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email')",$db);


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
   <form ACTION="index2.php">
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>

   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Dokonano zam�wienia.<br>
      Potwierdzenie zam�wienia zosta�o wys�ane emailem na podane konto.<br>
   Dzi�kujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Wp�aty prosimy dokonywa� na konto:<br>
   </SPAN>
   <table border=1 STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   <SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: <?echo$textcolor?>; font-weight: bold">
   Poni�sze dane prosz� sobie zanotowa�, lub zapisa� na dysku. Zostan� one tak�e wys�ane na podany przez pa�stwa e-mail.</SPAN>
   <br><br>
   Nazwa odbiorcy:<br>
      <br>
       ul.   i     &nbsp &nbsp<br><br>

   Nr konta:<br>
    <br><br>

   Bank Sp��dzielczy  <br><br>
      <?
   $cena57+=4;
   ?>
   Kwota: <?echo$cena57?> z�<br><br>
   Tytu�em: Zamowienie nr: <?echo$kodprzelewu?>


   </TD>
   <TD ALIGN="LEFT" VALIGN="TOP" WIDTH="540" HEIGHT="360" BACKGROUND="index/grafiki/blankiet.jpg">
   <TABLE CELLSPACING="4" CELLPADDING="3" BORDER="0" STYLE="font-family: Times New Roman; font-size: 16px; color: #000000; font-weight: bold">
   <tr>
   <TD ALIGN="LEFT" VALIGN="TOP">
   &nbsp &nbsp
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp ul.   i
   </TD>
   </TR>
   <tr>
   <td>
   &nbsp &nbsp
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
   <SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: <?echo$textcolor?>">
   Natychmiast po zaksi�gowaniu wp�aty wy�lemy zam�wione przedmioty na Pa�stwa adres.<br>
   Z regu�y trwa to od 2 do 7 dni roboczych.<br>
   W przypadku wi�kszych zam�wie� b�dziemy si� kontaktowa� z Pa�stwem telefonicznie.<br>
   Na wp�at� czekamy 14 dni. P��niej zam�wienie zostaje anulowane.
   �yczymy udanych zakup�w.

   </SPAN>
   <?
   $message="Zamowienie  .pl. \n Czekamy na wplate od Panstwa na konto: \n Nazwa odbiorcy: \n         ul.   i     \n Nr konta:   \n Bank Sp��dzielczy   Kwota: $cena57 z�. \n Tytu�em: Zamowienie nr: $kodprzelewu \n\n        Dzi�kujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www. .pl";
   mail($email, '  Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@ .nazwa.pl");


   ?>

   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="wyloguj" value="Powr�t do sklepu">

   </center>
   </FORM>

   <?





   ?>
   </td>
   </tr>
   </table>

   <?

   return;
   };






//REALIZACJA ZAMOWIENIA BEZ LOGOWANIA ZA POBRANIEM
   if($potw1!=""&&$submitcheck1!=""&&$zaplata=="zapobraniem")
   {
   ?>
  <TABLE ALIGN="CENTER" BORDER="1" BGCOLOR="<?echo$bgcolor?>">
  <tr>
  <td>
  <?


   $submitcheck1="";

   $cena57=0;


   $ab65=mysql_query("INSERT INTO adresy (nr,haslo,login,imie,nazwisko,kodpoczt,miescow,ulica,nrd,nrm,tel,email) VALUES ('','bez has�a', 'bez logowania', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email')",$db);


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

   <form ACTION="index2.php">
   <?
   $wyczysckosz="tak";
   $destroy="yes";
   ?>
   <center>

   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   Dokonano zam�wienia.<br>
      Potwierdzenie zam�wienia zosta�o wys�ane emailem na podane konto.<br>
   Dzi�kujemy za zakupy w naszym sklepie.<br><br>
   </SPAN>
   <br>
   <SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
   <?
   $cena57+=9;
   ?>
   <br><br>
   Do zap�aty b�dzie: <?echo$cena57?> z�. przy odbiorze.<br><br>

   �yczymy mi�ego dnia.
   </SPAN>
   <?
   $message="Zamowienie  .pl. \n Zam�wienie wlasnie jest w trakcie realizacji.\n Do zaplaty b�dzie $cena57 przy odbiorze. \n\n\n        Dzi�kujemy za zakupy w naszym sklepie. \n Zapraszamy ponownie \n \n www. .pl";
   mail($email, '  Potwierdzenie', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@ .nazwa.pl");


   ?>

   <br><br>
   <input TYPE="hidden" name="wyczysckosz" value="<?echo$wyczysckosz?>">
   <input TYPE="hidden" name="destroy" value="<?echo$destroy?>">
   <input TYPE="submit" name="wyloguj" value="Powr�t do sklepu">

   </center>
   </FORM>

   <?





   ?>
   </td>
   </tr>
   </table>
   <?

   return;
   };

?>
























































<center>




<br>
<TABLE BGCOLOR="<?echo$bgcolor?>" WIDTH="780" CELLSPACING="0" CELLPADDING="0" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">

<tr>

<!-- NAG��WEK, PIERWSZA KOM�RKA -->
<TD ALIGN="CENTER" WIDTH="780" HEIGHT="90" COLSPAN="3" BACKGROUND="<?echo$katalogkameleon1?><?echo$banertop?>";>

<SPAN STYLE=" font-family: Franklin Gothic Medium; font-size: 28pt; font-weight: bold; font-style: italic; color: <?echo$bgcolor?>">
 .PL
</SPAN>

<br><br>

</TD>

</TR>


<tr>

<TD VALIGN="TOP" WIDTH="100" >


	<TABLE CELLSPACING="0" CELLPADDING="0" BORDER="0" FRAME="VOID" >
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">

	<SPAN STYLE=" font-family: Times New Roman; font-size: 11px; color: <?echo$textcolor?>">
	Kolekcje:
	</SPAN>

	</Td>
	</TR>
	<tr>
	<TD ALIGN="LEFT">


	<?
	$klima="mroczny";

  		$lb=mysql_query("SELECT kolekcja,p_ms,p_ss,p_zs,p_mus from kolekcje order by kolekcja",$db);
//		where klimat='$klima' order by nr",$db);

		while(list($kolekcja)=mysql_Fetch_Row($lb))
		{
		?>


		 &nbsp <A HREF=index2.php?kolekcja01=<?echo$kolekcja?>&&do1=wyzeroj&&do2=tak&&do3=tak><SPAN STYLE=' font-family: Times New Roman; font-size: 12pt; color: <?echo$linkcolor?>'><?echo$kolekcja?><br></span></A>
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
	&nbsp <A HREF="index2.php?ofirm=ofirm" TITLE="O firmie" STYLE="font-family: Times New Roman; font-size: 12px">O firmie</A><br>
	&nbsp <A HREF="index2.php?regul=regul" TITLE="Regulamin" STYLE="font-family: Times New Roman; font-size: 12px">Regulamin</A>
	</TD>
	</TR>


	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">

	</TD>
	</TR>
	<tr>
	<TD ALIGN="center">
	<form action="index2.php" method=post>
	<INPUT TYPE="SUBMIT" NAME="login66" VALUE="Zaloguj si�" TABINDEX="0" STYLE="font-family: Times New Roman; font-size: 12px">
	</form>
	</TD>
	</TR>




	<?
	if($koszyk1!="")
	{
	$cena20=0;
	?>
	<!-- KOSZYK -->
	<td>
	<br>
	<TABLE  rules=rows WIDTH="100%" BORDER="0" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<tr>
	<TD ALIGN="LEFT" VALIGN="MIDDLE">
	<IMG SRC="index/grafiki/banery/mroczne/koszykm.gif" WIDTH="31" HEIGHT="27" BORDER="0" ALT="Rozmiar: 1192 bajt�w">
	</td>
	<TD ALIGN="RIGHT" VALIGN="MIDDLE">
	<center>
	koszyk
	</center>
	</TD>
	</tr>
	<tr>
	<TD ALIGN="LEFT" COLSPAN="2" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">

	<TABLE ALIGN="CENTER" VALIGN="TOP" CELLSPACING="0" CELLPADDING="0" BORDER="0">


	<?
	for($i=1;$i<=$koszyk1;$i++)
	{
	?>
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<?echo$i?>
	</TD>
	<td ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
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
	<?echo$cena20?> z�.
	</td>
	</tr>
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<form ACTION="index2.php">
	<INPUT TYPE="SUBMIT" NAME="koszczeg" VALUE="Szczeg��y" STYLE="font-family: Times New Roman; font-size: 12px">

	</td>
	</tr>
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<tr>
	<TD ALIGN="CENTER" COLSPAN="2">
	<form ACTION="index2.php">
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy��" STYLE="font-family: Times New Roman; font-size: 10px">
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


	<!-- od�wie�anie -->
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	</TD>
	</TR>
	<tr>
	<td>
	<?
	if($zalogowany!="")
	{
	?>
	&nbsp <A HREF="index2.php?wyloguj=yes" TARGET="_top" TITLE="Od�wie�" STYLE="font-family: Times New Roman; font-size: 14px; font-weight: bold; color: <?echo$textcolor?>">Wyloguj</A><br>
	<?
	};
	?>
	&nbsp <A HREF="index2.php?destroy=yes" TARGET="_top" TITLE="Od�wie�" STYLE="font-family: Times New Roman; font-size: 14px; font-weight: bold; color: <?echo$linkcolor?>">Od�wie�</A><br>
	&nbsp <A HREF="mailto:biuro@ .nazwa.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">Napisz do nas</A>
	</TD>
	</TR>
	<tr>





	<!-- LINKI LEWE-->
	<tr>
	<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1.gif">
	</TD>
	</TR>
	<tr>
	<td>
	<table border="0">
	<tr>
	<td>
	<?
	if ($url1l!="")
	{
	?>
	<A HREF="<?echo$url1l?>" TARGET="_blank" TITLE="<?echo$url1l?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner1l?>" BORDER="0" ALT="" WIDTH="90px" HEIGHT="35px"></A>
	<?
	};
	?>
	</TD>
	</TR>
	<?
	if ($url2l!="")
	{
	?>
	<tr>
	<td>
	<A HREF="<?echo$url2l?>" TARGET="_blank" TITLE="<?echo$url2l?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner2l?>" BORDER="0" ALT="" WIDTH="90px" HEIGHT="35px"></A>
	</TD>
	</TR>
	<?
	};
	if ($url3l!="")
	{
	?>
	<tr>
	<td>
	<A HREF="<?echo$url3l?>" TARGET="_blank" TITLE="<?echo$url3l?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner3l?>" BORDER="0" ALT="" WIDTH="90px" HEIGHT="35px"></A>
	</TD>
	</TR>
	<?
	};
	?>
	</TABLE>





	</TD>
	</TR>
	<tr>

	</table>



</TD>





























































<!-- GLOWNA KOMORKA	 -->

<TD ALIGN="LEFT" VALIGN="TOP" WIDTH="580" STYLE="border: 1px dotted <?echo$krawedztabeli?>";>





<?
  //LOGOWANIE GLOWNE


  if($dane02=="zaloguj"&&$login66!="")
  {
  ?>

  <form ACTION="index2.php">


	<SPAN STYLE=" font-family: Times New Roman; color: <?echo$textcolor?>; font-size: 16px; font-weight: bold">
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
	<A HREF="newuser.php" TARGET="_blank" TITLE="Nowy u�ytkownik" STYLE="color: <?echo$linkcolor?>; font-size: 16px; font-family: Times New Roman">Nowy u�ytkownik, zarejestruj si� w 2 minuty</A>
	</TD>
	</TR>
	<tr>
	<td>
	Has�o:
	</td>
	<td>
	<input TYPE="password" name="haslo1" value="" MAXLENGTH="15">
	</TD>
	</TR>

	</table>
	<center>
	<br>
	<?
	if ($zamow!="")
		{
		?>
		<input type="hidden" name="zamow" value="tak">
		<?
		};
	?>
	<INPUT TYPE="SUBMIT" name="wstecz1" value="<< Powr�t"> &nbsp

	<INPUT TYPE="SUBMIT" name="login30" value="Zaloguj >>">
	<br><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	Je�eli jeste� zalogowanym u�ytkownikiem, to masz dodatkowe mo�liwo�ci.<br>
	</SPAN>
	</center>
	</FORM>





  <?
  };














if ($dane02!="zaloguj")
{

//WY�WIETLANIE PRODUKT�W:


if ($dane02!=""&&$dane02!="ofirm"&&$dane02!="regul"&&$koszczeg==""&&$zamow==""&&$login==""&&$zambezlog==""&&$zamzlog=="")
{

$ab10=mysql_query("SELECT  nazwa,kolekcja,STAN,p_ms,p_ss,p_zs,p_mus,katalog,nazwa_p,nazwa_p2,opis,status,cena
				from przedmiot where nr='$dane02' order by nazwa LIMIT 0,1",$db);

		list($nazwa10,$kolekcja10,$stan10,$p_ms10,$p_ss10,$p_zs10,$p_mus10,$katalog10,$nazwa_p10,$nazwa_p210,$opis10,$status10,$cena10)=mysql_Fetch_Row($ab10);
		$pmroczne+=$p_ms10;
		$pzwykle+=$p_zs10;
		$pmuzyczne+=$p_mus10;
		$psportowe+=$p_ss10;


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
		<SPAN STYLE="font-family: Times New Roman; font-size: 24px; font-style: italic; color: <?echo$textcolor?>">
		<?echo$kolekcja10?>
		</SPAN>
		</TD>
		</TR>
		<tr>
		<TD ALIGN="LEFT" VALIGN="TOP">
		<SPAN STYLE="font-family: Times New Roman; font-size: 16px; font-style: italic; color: <?echo$textcolor?>">
		<?echo$nazwa10?>
		</span>
		</TD>
		</TR>
<form ACTION="index2.php">
		<?
		if ($status10=="koszulka")
		{
		?>
		<tr>
		<TD ALIGN="LEFT" VALIGN="TOP">
						 <TABLE ALIGN="LEFT" VALIGN="TOP" BORDER="0">
		<tr>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$textcolor?>">
		Rozmiar:
		</SPAN>
		</td>
		<td>
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$textcolor?>">
		&nbsp&nbsp&nbsp Ilo��:
		</SPAN>
		</td>
		</tr>
		<tr>
		<td>
		<SELECT NAME="rozmiar10" STYLE="font-family: Times New Roman; font-size: 10px; color: #000000">
		<option VALUE="S">S</OPTION>
		<option VALUE="M">M</OPTION>
		<option VALUE="L">L</OPTION>
		<option VALUE="XL">XL</OPTION>
		<option VALUE="XXL">XXL</OPTION>
		<option VALUE="XXXL">XXXL</OPTION>
		</SELECT>
		</td>
		<td>
		&nbsp&nbsp <SELECT NAME="ilosc10" STYLE="font-family: Times New Roman; font-size: 10px; color: #000000">
		<?
		for ($i1=1;$i1<101;$i1++)
		{
		echo "<option VALUE='$i1'>$i1</OPTION>";
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
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$textcolor?>">
		Ilo��:<br>
		</SPAN>
		<SELECT NAME="ilosc10" STYLE="font-family: Times New Roman; font-size: 10px; color: #000000">
		<?
		for ($i1=1;$i1<101;$i1++)
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
		Cena: <?echo$cena10?> z�.
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
		<A HREF="index2.php?widok=przod" TITLE="Prz�d"><SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">
		Prz�d
		</SPAN>
		</A>, &nbsp
		<A HREF="index2.php?widok=tyl" TITLE="Ty�">
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">
		Ty�
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


//wype�niony formularz

	if($zambezlog!="")
	{

	 	if($nazwisko!=""&&$imie!=""&&$kodp!=""&&$miejscow!=""&&$ulica!=""&&$nrd!=""&&$tel!=""&&$zaplata!=""&&$email!=""&&$zalogowany=="")
		{
		?>
		<form ACTION="index2.php?request_server=www.nazwa.pl" name="form_login" method="POST">
		<?
		$submitcheck1="tak";
		?>
		<center>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Kupuj�cy:
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
		<b>Rodzaj zap�aty: <?echo$zaplata?></b><input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
		</TD>
		</TR>
		</TABLE>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Zamawia nast�puj�ce przedmioty:
		</span>
		</center>
		<?
		}
		else
		{
		$komunikat="WYPE�NIJ UWA�NIE WYMAGANE POLA!";
		$zamow="tak";
		};


	};





	// WYPE�NIONY FORMULARZ Z LOGOWANIEM


	if ($zamzlog!="")
	{
	?>
	<center>




			<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Kupuj�cy:
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
		<b>Rodzaj zap�aty: <?echo$zaplata?></b><input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">
		</TD>
		</TR>
		</TABLE>
		<SPAN STYLE=" font-family: Terminal; font-size: 18px; color: #6699FF">
		Zamawia nast�puj�ce przedmioty:
		</span>
		</center>





	<?
	};


// WY�WIETLANIE SZCZEGU��W Z  KOSZYKA

if($koszczeg!=""||$zamow!=""||$login!=""||$zambezlog!=""||$zamzlog!="")
{
$cena50=0;
?>
<TABLE ALIGN="CENTER" VALIGN="TOP" CELLSPACING="0" CELLPADDING="0" BORDER="0" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	lp &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	nazwa przedmiotu: &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	rozmiar &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	ilo�� &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	przedmiot &nbsp
	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	cena /szt. &nbsp
	</TD>


	</TR>

	<?
	for($i=1;$i<=$koszyk1;$i++)
	{
	?>
	<tr>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<?echo$i?>
	</TD>
	<td ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
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

 	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<?
	$r="rozmiar30$i";

	echo$$r;
	?> &nbsp
	</td>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<?
	$il="ilosc30$i";
	echo $$il;

	?>



	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	<?

	echo $status50;

	?> &nbsp



	</TD>
	<TD ALIGN="LEFT" VALIGN="TOP" STYLE="border: 1px dotted #<?echo$krawedztabeli?>;">
	<?
	echo $cena51;
	?>
	&nbsp z�.
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

	<TD ALIGN="CENTER" VALIGN="MIDDLE" STYLE="border: 1px dotted <?echo$krawedztabeli?>;">
	Koszt w sumie:<br>
	<?echo$cena50?> z�.
	</TD>

	</TR>

	</TABLE>
	<center>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 13px">

	Prosimy przeczyta� <A HREF="regulam.php?regul=yes" TARGET="_blank" TITLE="regulamin">regulamin zakup�w</A>.
	Masz pytania? <A HREF="mailto:biuro@ .nazwa.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">Napisz do nas</A>. Lub tel  </SPAN>
	</CENTER>


	<?
//	Potwierdzenie zamawiania z logowaniem

	if($zamzlog!="")
	{
	if($zaplata=="zapobraniem")
	{
	$cena54=$cena50+9;
	echo "<center>+ koszt wysylki 9z�. (Za pobraniem).<SPAN STYLE=' font-family: Times New Roman; color: $textcolor; font-size: 16px'> W sumie do zap�aty $cena54 z�.<br><br></SPAN></CENTER>";
	};

	if($zaplata=="przelew")
	{
	$cena54=$cena50+4;
	echo "<center>+ koszt wysylki 4z�. (Przelewem).<SPAN STYLE=' font-family: Times New Roman; color: $textcolor; font-size: 16px'> W sumie do zap�aty $cena54 z�.<br><br></SPAN></CENTER>";
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	Wp�at� traktujemy jako potwierdzenie zam�wienia z pa�stwa strony.
	Od dnia zam�wienia czekamy 14 dni na przelew, potem zam�wienie uznaje si� za anulowane (zostanie wys�any e-mail).
	Im szybciej wp�acisz tym szybciej przedmioty dotr� do Ciebie!!!
	Je�eli zechc� pa�stwo zrezygnowa� z zam�wienia - nic prostrzego.
	Wystarczy nie wp�aci� pieni�dzy na nasze konto.
	</SPAN><center><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: <?echo$textcolor?>">
 	Po naci�ni�ciu potwierdzam otrzymaj� pa�stwo nasze konto, oraz nr zam�wienia, kt�ry koniecznie trzeba wpisa� w rubryce "Tytu�em" aby�my jak najszybciej rozpoznali wp�acaj�cego i jego zam�wienie.</SPAN><br>
	<br>



	<?
	$kodprzelewu=date(mdhis);
	};
	$checksubmit2="tak"

	?>
	<form ACTION="index2.php">

	<input TYPE="hidden" name="kodprzelewu" value="<?echo$kodprzelewu?>">
	<input TYPE="hidden" name="zaplata" value="<?echo$zaplata?>">


	<center>
	<br>
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy�� zawarto�� koszyka" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp
	<br><br>
	<input TYPE="submit" name="zamow" value="<< wstecz"> &nbsp &nbsp
	<input TYPE="submit" name="wyloguj" value="Wyloguj"> &nbsp &nbsp
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
	<form ACTION="index2.php">
	<br>
	<INPUT TYPE="SUBMIT" NAME="wyczysckosz" VALUE="Wyczy�� zawarto�� koszyka" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp
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
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	<?
	$cena54=$cena50+9;
	echo "+ koszt wysylki 9z�. (Za pobraniem).<SPAN STYLE=' font-family: Times New Roman; color: $textcolor; font-size: 16px'> W sumie do zap�aty $cena54 z�.<br>Przy odbiorze.<br><br></SPAN>";
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
	echo "+ koszt wysylki 4z�. (op�ata przelewem).<SPAN STYLE=' font-family: Times New Roman; color: $textcolor; font-size: 16px'> W sumie do zap�aty $cena54 z�.<br><br></SPAN>";
	$kodprzelewu=date(mdhis);
	?>
	</center>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	Wp�at� traktujemy jako potwierdzenie zam�wienia z pa�stwa strony.
	Od dnia zam�wienia czekamy 14 dni na przelew, potem zam�wienie uznaje si� za anulowane (zostanie wys�any e-mail).
	Im szybciej wp�acisz tym szybciej przedmioty dotr� do Ciebie!!!
	Je�eli zechc� pa�stwo zrezygnowa� z zam�wienia - nic prostrzego.
	Wystarczy nie wp�aci� pieni�dzy na nasze konto.
	</SPAN><center><br>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: <?echo$textcolor?>">
 	Po naci�ni�ciu potwierdzam otrzymaj� pa�stwo nasze konto, oraz nr zam�wienia, kt�ry koniecznie trzeba wpisa� w rubryce "Tytu�em" aby�my jak najszybciej rozpoznali wp�acaj�cego i jego zam�wienie.</SPAN><br>
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















	<?
// FORMULARZ ZAMAWIANIA
	if($zamow!="")
	{


	if($zalogowany=="")
	{
	?>
	<form ACTION="index2.php">

	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	<center>
	<input TYPE="hidden" name="zamow" value="tak10">
	<input TYPE="submit" name="login66" value="Zaloguj si�">
	</CENTER>
	<br>
	LUB<br>
	Wype�nij dok�adnie poni�szy formularz,<br>
	aby zam�wi� bez logowania (tylko dane teleadresowe).

	</SPAN>
	<?
	}
	else
	{
	?>
	<FORM ACTION="index2.php" method=post>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: <?echo$textcolor?>">
	Witaj <?echo$loginx?>. Mo�esz teraz chodzi� po sklepie<br>
	bez konieczno�ci ponownego wype�niania formularza.
	</span>
	<?
	};

	if($komunikat!="")
	{
	?>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 18px; color: <?echo$textcolor?>">
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
	Miejscowo��:
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
	Rodzaj zap�aty
	</TD>
	<td>


	<SELECT NAME="zaplata">
	<option VALUE="przelew">Przelew (+4 z� wysy�ka)</OPTION>
	<option VALUE="zapobraniem" selected>Za pobraniem (+9z� wysy�ka)</OPTION>
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
	<INPUT TYPE="SUBMIT" NAME="zambezlog" VALUE="Zam�w bez logowania >>" STYLE="font-family: Times New Roman; font-size: 12px">
	(zamawianie bez logowania - najpierw wype�nij formularz)

	</span>
	</FORM>
	<?
	}
	else
	{
	?>
	<input TYPE="submit" name="wyloguj" value="Wyloguj" STYLE="font-family: Times New Roman; font-size: 12px"> &nbsp &nbsp
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


























//	  WY�WIETLANIE PROMO
?>
<CENTER>
<?
if ($dane02==""&&$frontpage==""&&$koszczeg==""&&$zamow==""&&$login==""&&$zambezlog==""&&$zamzlog=="")
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

		<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="110" HEIGHT="85" STYLE="border: 1px dotted <?echo$krawedztabeli?>">

		<A HREF="index2.php?nr02=<?echo$nr05?>&&kolekcja01=<?echo$kolekcja05?>&&do1=wyzeroj">
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







// WY�WIETLANIE O FIRMIE
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

// WY�WIETLANIE REGULAMINU
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

















};
?>


</center>

</TD>
































<!-- PRAWA KOMORKA -->
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

<SPAN STYLE="font-family: Times New Roman; font-size: 14px; color: <?echo$textcolor?>; font-style: italic">
Nasz serwis odwiedzi�o ju� <?echo$liczba1?> ludzi.
</SPAN>
<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="<?echo$kolorlini?>">
<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: <?echo$textcolor?>">


T-shirt'y z nadrukami!!!

<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="<?echo$kolorlini?>">
Wszystkie rozmiary, ci�gle nowe rzeczy.<br>
</SPAN>
<HR ALIGN="CENTER" SIZE="1" WIDTH="90" COLOR="<?echo$kolorlini?>">
<table border="0">
<tr>
<td>
<?
if ($url1p!="")
{
?>
<A HREF="<?echo$url1p?>" TARGET="_blank" TITLE="<?echo$url1p?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner1p?>" BORDER="0" ALT="" WIDTH="80px" HEIGHT="35px"></A>
<?
};
?>
</TD>
</TR>
<?
if ($url2p!="")
{
?>
<tr>
<td>
<A HREF="<?echo$url2p?>" TARGET="_blank" TITLE="<?echo$url2p?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner2p?>" BORDER="0" ALT="" WIDTH="80px" HEIGHT="35px"></A>
</TD>
</TR>
<?
};
if ($url3p!="")
{
?>
<tr>
<td>
<A HREF="<?echo$url3p?>" TARGET="_blank" TITLE="<?echo$url3p?>"><IMG SRC="<?echo$katalogkameleon1?><?echo$baner3p?>" BORDER="0" ALT="" WIDTH="80px" HEIGHT="35px"></A>
</TD>
</TR>
<?
};
?>





</center>
<?
};



if ($dane01!="")
{
?>
<TD ALIGN="CENTER" VALIGN="MIDDLE" WIDTH="100" HEIGHT="15" BACKGROUND="index/grafiki/banery/mroczne/table1r.gif">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px; color: <?echo$textcolor?>">
<MARQUEE BEHAVIOR="ALTERNATE" LOOP="0">
<?echo$dane01?>
</MARQUEE>
</SPAN>
</TD>
</TR>
<tr>
<!-- WY�WIETLANIE ZASOB�W Z KOLEKCJI -->
<TD ALIGN="CENTER">
<SPAN STYLE="font-family: Arial; font-size: 10px; color: <?echo$kolorlini?>; margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px; text-align: center">

Wybierz
przedmiot:
</span>


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

		<A HREF=index2.php?&&nr02=<?echo$nr01?>><SPAN STYLE=' font-family: Times New Roman; font-size: 12pt; color: <?echo$linkcolor?>'><?echo$nazwa?><br></span></A>

		<?


		};


		if($xxx>10)
		{
		?>
		<center>
		<form ACTION="index2.php">
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
		<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$textcolor?>">
		Wy�wietlone:<br>od
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



<tr>

<TD ALIGN="LEFT" COLSPAN="3" BGCOLOR="<?echo$bgcolor?>">
<br>

<?
if($zalogowany!="")
{?>

<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">
Zalogowany u�ytkownik: <?echo$loginx?>.
</SPAN>

<?
};?>
<center>
<HR ALIGN="CENTER" SIZE="2" WIDTH="80%" COLOR="#CCFFCC" STYLE="color: <?echo$kolorlini?>">
<SPAN STYLE=" font-family: Times New Roman; font-size: 13px">
Prosimy przeczyta� <A HREF="regulam.php?regul=yes" TARGET="_blank" TITLE="regulamin">regulamin zakup�w</A>.
Masz pytania? <A HREF="mailto:si k@wsi.edu.pl" STYLE="font-family: Times New Roman; font-size: 12px; color: <?echo$linkcolor?>">Napisz do nas</A>.
Webmaster: si k@wsi.edu.pl<br>
</SPAN>
WWW. .PL/KAMELEON<br>
<A HREF="index2.php?ofirm=ofirm" TITLE="O firmie" STYLE="font-family: Times New Roman; font-size: 12px">O firmie</A><br> &nbsp

</center>
</TD>
</TR>
</TABLE>


</center>
</body>
</meta>
</html>

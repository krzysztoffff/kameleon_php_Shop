<?
$db=mysql_Connect("www.sql.skulls.nazwa.pl","skulls_1","kameleon");
  mysql_select_db("skulls_1");

?>



<HTML>
<HEAD>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">
<META HTTP-EQUIV="Creation-date" CONTENT="2005-03-30T06:40:33Z">
<META HTTP-EQUIV="Reply-to" CONTENT="sikurzakk@wsi.edu.pl">
<META HTTP-EQUIV="Content-Language" CONTENT="pl">
<META NAME="Keywords" CONTENT="koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls">
<META NAME="Description" CONTENT="W sprzedarzy dosy� kontrowersyjne koszulki">
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
<FORM ACTION="newuser.php" method=post>
<center>
NOWY U�YTKOWNIK.<BR>
<?
$checkerror1="";
?>
<IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="Rozmiar: 24863 bajt�w">
<br><br>


Wype�nij uwa�nie forularz:<br>
<TABLE WIDTH="580" BORDER="1" STYLE="border: 1px dotted #0099FF;">
	<tr>
	<td WIDTH="100">
	Login (Id)
	</td>
	<td WIDTH="150">	
	<input TYPE="TEXT" name="login" value="<?echo$login?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	
   
   $ab50=mysql_query("SELECT  login from adresy where login='$login'",$db);
		list($check50)=mysql_Fetch_Row($ab50);
   
   if ($check50!="")
   {
   $checkerror1="error";
   echo "Taki Login (Id) ju� istnieje. Musisz wymy�le� inny.";
   };
	
	if ($login=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	
	
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Has�o
	</td>
	<td>
	<input TYPE="PASSWORD" name="haslo" value="<?echo$haslo?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">

	<?
	if ($dalej1!="")
	{
	if ($haslo!=$haslo1)
	{
	echo "Upewnij si�, czy dobrze wpisa�e� has�o!! ";
	$checkerror1="error";
	}
	if ($haslo=="")
	{
	echo "Prosz� wype�ni� wszystkie dane. ";
	$checkerror1="error";
	};
	};
	?>
	</SPAN>
	</TD>
	</tr>
	<tr>
	<td>
 	Powt�rz has�o
	</td>
	<td>
	<INPUT TYPE="PASSWORD" NAME="haslo1" VALUE="<?echo$haslo1?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="LEFT">
	&nbsp Potwierd� wpisane przez siebie has�o.
	</TD>
	</tr>
	
	<tr>
	<td WIDTH="100">
	Imie:
	</td>
	<td WIDTH="150">	
	<input TYPE="TEXT" name="imie" value="<?echo$imie?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$imie=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Nazwisko
	</td>
	<td>
	<input TYPE="TEXT" name="nazwisko" value="<?echo$nazwisko?>" MAXLENGTH="25">
	</td>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$nazwisko=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Kod pocztowy:
	</td>
	<td>
	<INPUT TYPE="TEXT" NAME="kodp" value="<?echo$kodp?>" MAXLENGTH="6">
	</td>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$kodp=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Miejscowo��:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="miejscow" value="<?echo$miejscow?>" MAXLENGTH="20">
	</TD>
	<TD ALIGN="LEFT">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$miejscow=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</TR>
	<tr>
	<td>
	Ulica: 
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="ulica" MAXLENGTH="25" value="<?echo$ulica?>">
	</TD>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$ulica=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</TR>
	<tr>
	<td>
	Nr domu:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="nrd" MAXLENGTH="6" value="<?echo$nrd?>">
	</TD>
	<TD ALIGN="left">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$nrd=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</TR>
	<tr>
	<td>
	Nr mieszkania:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="nrm" MAXLENGTH="6" value="<?echo$nrm?>">
	</TD>
	<TD ALIGN="LEFT">
	&nbsp je�li niepotrzebne to prosz� nie wype�nia�.
	</TD>
	</TR>
	<tr>
	<td>
	Nr telefonu:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="tel" MAXLENGTH="20" value="<?echo$tel?>">
	</TD>
	<td>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$tel=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</TR>	
	<tr>
	<td>
	e-mail
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="email" MAXLENGTH="30" value="<?echo$email?>">
	</TD>
	<td>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$email=="")
	{
	echo "Prosz� wype�ni� wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</TR>
	<tr>
	<td>
	Zgoda:
	</TD>
	<TD WIDTH="120">
	<INPUT TYPE="CHECKBOX" NAME="zgoda" CHECKED value="Zgoda">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 12px; color: #CCFFFF">
	Wyra�am zgod� na<br>
	przetwarzanie moich danych <br>
	osobowych w celu wys�ania<br>
	zakup�w na m�j adres.
	</SPAN>
	</TD>
	<td>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$zgoda=="")
	{
	echo "Je�li nie wyra�asz zgody to zakupy w internecie s� niemo�liwe.";
	$checkerror1="error";
	};
	?>
	</span>
	
	</td>
	</TR>
	
	</TABLE>
	<?
	if($checkerror1!="")
	{	
	?>
	<br>
	<input TYPE="submit" name="dalej1" value="Dalej -->">
	<?
  	};
	
	
	if($dalej1!=""&&$checkerror1=="")
	{
	echo "Zosta�e� zalogowany jako $login<br>"; 
		
	
	$ab55=mysql_query("INSERT INTO `adresy` ( `nr` , `haslo` , `login` , `imie` , `nazwisko` , `kodpoczt` , `miescow` , `ulica` , `nrd` , `nrm` , `tel` , `email` )
	VALUES (
	'', '$haslo', '$login', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email'
	);",$db);
	?>
	<SPAN STYLE=" font-family: Times New Roman; color: #CCFFFF; font-size: 16px">
		
	<A HREF="newuser.php" STYLE="color: #CCFFCC; font-family: Times New Roman; font-size: 16px" onclick="self.close();">Zamknij teraz to okno i zaloguj si� w skulls.</A>
		
	</SPAN>
	
	<?
   $message="Witmy \n Potwierdzenie rejestracji uzytkownika: \n\n Login: '$login', \n Haslo: ****** \n Imie: '$imie', \n Nazwisko: '$nazwisko', \n Adres: \n $kodp $miejscow \n ul. $ulica $nrd / $nrm \n\n Nr tel. $tel \n Email: $email \n\n Je�eli chcieliby panstwo usunac, lub zmienic swoje dane prosze wyslac maila na adres admin@skulls.nazwa.pl, opisac problem i podac nr telefonu. Oddzwonimy (Trzeba bedzie podac login i haslo).  \n\n Pozdrawiamy     WWW.SKULLS.PL ";
   mail($email, 'SKULLS Rejestracja', $message,
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");	
	
	return;
	};

?>

	
	
	
	</FORM>
	
</center>



</body>
</meta>
</html>
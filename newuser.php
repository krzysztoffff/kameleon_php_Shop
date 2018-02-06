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
<META NAME="Description" CONTENT="W sprzedarzy dosyć kontrowersyjne koszulki">
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
NOWY UŻYTKOWNIK.<BR>
<?
$checkerror1="";
?>
<IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0" ALT="Rozmiar: 24863 bajtów">
<br><br>


Wypełnij uważnie forularz:<br>
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
   echo "Taki Login (Id) już istnieje. Musisz wymyśleć inny.";
   };
	
	if ($login=="")
	{
	echo "Proszę wypełnić wszystkie dane.";
	$checkerror1="error";
	};
	
	
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Hasło
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
	echo "Upewnij się, czy dobrze wpisałeś hasło!! ";
	$checkerror1="error";
	}
	if ($haslo=="")
	{
	echo "Proszę wypełnić wszystkie dane. ";
	$checkerror1="error";
	};
	};
	?>
	</SPAN>
	</TD>
	</tr>
	<tr>
	<td>
 	Powtórz hasło
	</td>
	<td>
	<INPUT TYPE="PASSWORD" NAME="haslo1" VALUE="<?echo$haslo1?>" MAXLENGTH="15">
	</td>
	<TD ALIGN="LEFT">
	&nbsp Potwierdź wpisane przez siebie hasło.
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
	echo "Proszę wypełnić wszystkie dane.";
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
	echo "Proszę wypełnić wszystkie dane.";
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
	echo "Proszę wypełnić wszystkie dane.";
	$checkerror1="error";
	};
	?>
	</span>
	</TD>
	</tr>
	<tr>
	<td>
	Miejscowość:
	</TD>
	<td>
	<INPUT TYPE="TEXT" NAME="miejscow" value="<?echo$miejscow?>" MAXLENGTH="20">
	</TD>
	<TD ALIGN="LEFT">
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$miejscow=="")
	{
	echo "Proszę wypełnić wszystkie dane.";
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
	echo "Proszę wypełnić wszystkie dane.";
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
	echo "Proszę wypełnić wszystkie dane.";
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
	&nbsp jeśli niepotrzebne to proszę nie wypełniać.
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
	echo "Proszę wypełnić wszystkie dane.";
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
	echo "Proszę wypełnić wszystkie dane.";
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
	Wyrażam zgodę na<br>
	przetwarzanie moich danych <br>
	osobowych w celu wysłania<br>
	zakupów na mój adres.
	</SPAN>
	</TD>
	<td>
	<SPAN STYLE=" font-family: Times New Roman; font-size: 16px; color: #FF99FF">
	<?
	if ($dalej1!=""&&$zgoda=="")
	{
	echo "Jeśli nie wyrażasz zgody to zakupy w internecie są niemożliwe.";
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
	echo "Zostałeś zalogowany jako $login<br>"; 
		
	
	$ab55=mysql_query("INSERT INTO `adresy` ( `nr` , `haslo` , `login` , `imie` , `nazwisko` , `kodpoczt` , `miescow` , `ulica` , `nrd` , `nrm` , `tel` , `email` )
	VALUES (
	'', '$haslo', '$login', '$imie', '$nazwisko', '$kodp', '$miejscow', '$ulica', '$nrd', '$nrm', '$tel', '$email'
	);",$db);
	?>
	<SPAN STYLE=" font-family: Times New Roman; color: #CCFFFF; font-size: 16px">
		
	<A HREF="newuser.php" STYLE="color: #CCFFCC; font-family: Times New Roman; font-size: 16px" onclick="self.close();">Zamknij teraz to okno i zaloguj się w skulls.</A>
		
	</SPAN>
	
	<?
   $message="Witmy \n Potwierdzenie rejestracji uzytkownika: \n\n Login: '$login', \n Haslo: ****** \n Imie: '$imie', \n Nazwisko: '$nazwisko', \n Adres: \n $kodp $miejscow \n ul. $ulica $nrd / $nrm \n\n Nr tel. $tel \n Email: $email \n\n Jeżeli chcieliby panstwo usunac, lub zmienic swoje dane prosze wyslac maila na adres admin@skulls.nazwa.pl, opisac problem i podac nr telefonu. Oddzwonimy (Trzeba bedzie podac login i haslo).  \n\n Pozdrawiamy     WWW.SKULLS.PL ";
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
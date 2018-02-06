
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">
<META HTTP-EQUIV="Creation-date" CONTENT="2005-03-15T10:06:31Z">
<META HTTP-EQUIV="Reply-to" CONTENT="sikurzakk@wsi.edu.pl">
<META HTTP-EQUIV="Content-Language" CONTENT="pl">
<META NAME="Keywords" CONTENT="koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls koszulki, t-shirt, czaszki, skulls">
<META NAME="Description" CONTENT="W sprzedarzy dosy� kontrowersyjne koszulki">
<META NAME="Author" CONTENT="Krzysztoff">
<title>
Regulamin klepu
</TITLE>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--
function onmouseover_1() {

}
//-->
</SCRIPT>
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#FFFFFF" LINK="#FFFFFF" ALINK="#FFFFFF" VLINK="#FFFFFF">

<center>

<IMG SRC="index/grafiki/napis1.gif" WIDTH="580" HEIGHT="51" BORDER="0"><br>
<SPAN STYLE=" font-family: Times New Roman; font-size: 14px; color: #99FFFF">


<?
if ($regul!="")
{

$plik02=fopen("index/regul.txt","r");

do
{
$tekst1=fgets($plik02,"1024");
echo"$tekst1<br>";
}
while ($tekst1!="");
fclose($plik02);
}
?>

Aby powr�ci�, zamknij to okno.

</SPAN>

<center>


</body>
</meta>
</html>

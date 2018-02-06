<?session_start();

if($passwd=="admin"&&$usern=="admin")
{
session_register('passwd');
session_register('usern');
session_register('admin');
$db=mysql_Connect("serwer","user","password");
  mysql_select_db("databse");



if($admin1!="")
{

$admin=$admin1;
};


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">
<META HTTP-EQUIV="Creation-date" CONTENT="2005-04-12T07:07:20Z">
<META HTTP-EQUIV="Reply-to" CONTENT="">
<META HTTP-EQUIV="Content-Language" CONTENT="pl">
<META NAME="Keywords" CONTENT="koszulki, t-shirt, czaszki,   koszulki, t-shirt, czaszki,   koszulki, t-shirt, czaszki,   koszulki, t-shirt, czaszki,  ">
<META NAME="Description" CONTENT="W sprzeda�y dosy� kontrowersyjne koszulki">
<META NAME="Author" CONTENT="Krzysztoff">
<title>
CMS KAMELEON
</TITLE>
</HEAD>


<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#000000" ALINK="#000000" VLINK="#000000">
<center>

<SPAN STYLE=" font-family: Times New Roman; font-size: 14pt; color: #FF0000">
<center>
Content Management System<br>
PANEL ADMINISTRACYJNY SKLEPU
</CENTER>
<BR>
</SPAN>

<TABLE CELLSPACING="2" CELLPADDING="2" BORDER="0" BGCOLOR="#FFFFFF">
<tr>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=analiza" STYLE="font-family: Times New Roman; font-size: 12px">Analiza sprzeda�y</A>

<td ALIGN="CENTER" BGCOLOR="#00FFFF" >
<A HREF="index.php?admin1=dodajkolekcje" STYLE="font-family: Times New Roman; font-size: 12px">Dodaj kolekcje</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=dodajprzedmiot" STYLE="font-family: Times New Roman; font-size: 12px">Dodaj przedmiot</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=edycjaofirmie" STYLE="font-family: Times New Roman; font-size: 12px">O firmie</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=edycjaregulamin" STYLE="font-family: Times New Roman; font-size: 12px">Regulamin</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=edycjaprzedmiot" STYLE="font-family: Times New Roman; font-size: 12px">Edytuj/usu� przedmiot</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=edycjakolekcja" STYLE="font-family: Times New Roman; font-size: 12px">Edytuj/usu� kolekcje</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=dodajjbaner" STYLE="font-family: Times New Roman; font-size: 12px">Dodaj baner</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=edytujbaner" STYLE="font-family: Times New Roman; font-size: 12px">Edytuj/usu� baner</A>
</TD>
<td ALIGN="CENTER" BGCOLOR="#00FFFF">
<A HREF="index.php?admin1=frontpage" STYLE="font-family: Times New Roman; font-size: 12px">Strona g��wna</A>
</TD>
</TR>
</TABLE>
<br>







<?


// POR�WNYWANIE SPRZEDA�Y


if($admin=="analiza")
{


?>

<TABLE WIDTH="783" CELLSPACING="0" CELLPADDING="0" BORDER="0" BGCOLOR="#CCCCCC">
<tr>
<TD ALIGN="CENTER" COLSPAN="3">
Por�wnywanie wykres�w ilo�ci sprzeda�y poszczeg�lnych przedmiot�w w okre�lonych przedzia�ach czasu.
</TD>
</tr>
<tr>

<TD ALIGN="CENTER" WIDTH="394">
<FORM ACTION="index.php" method="post">
<HR SIZE="2" WIDTH="80%" COLOR="#0066FF">
<SPAN STYLE=" font-family: Times New Roman; font-size: 12px">
Wybierz przedzia� czasu sprzeda�y.
</SPAN>
<br>
Od dnia: &nbsp
<SELECT name="adata1" value="">
<?
if ($adata1=="")
{
?>
<OPTION SELECTED VALUE="">Od dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata1?>"><?echo$adata1?></OPTION>
<?
};




$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata1)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>
<?
};
};
?>
</select>

&nbsp
Do dnia:
&nbsp

<SELECT name="adata2" value="">
<?
if ($adata2=="")
{
?>
<OPTION SELECTED VALUE="">Do dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata2?>"><?echo$adata2?></OPTION>
<?
};



$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata2)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>

<?
};
};
?>
</select>





</TD>

<TD ALIGN="CENTER" VALIGN="TOP" WIDTH="390">









<HR SIZE="2" WIDTH="80%" COLOR="#FF3300">
<SPAN STYLE=" font-family: Times New Roman; font-size: 12px">
Wybierz por�wnywany przedzia� czasu sprzeda�y.
</SPAN>
<br>
Od dnia: &nbsp
<SELECT name="adata3" value="">
<?
if ($adata3=="")
{
?>
<OPTION SELECTED VALUE="">Od dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata3?>"><?echo$adata3?></OPTION>
<?
};




$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata3)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>
<?
};
};
?>
</select>

&nbsp
Do dnia:
&nbsp

<SELECT name="adata4" value="">
<?
if ($adata4=="")
{
?>
<OPTION SELECTED VALUE="">Do dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata4?>"><?echo$adata4?></OPTION>
<?
};



$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata4)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>

<?
};
};
?>
</select>
















</TD>
</tr>
<tr>
<TD ALIGN="RIGHT" COLSPAN="2">
<input TYPE="submit" name="submitdata" value="Poka� wykres"> &nbsp
</form>

</TD>
</TR>
</TABLE>





<?






if($submitdata!="")
{


?>



<TABLE WIDTH="783" CELLSPACING="1" BORDER="0" STYLE="font-family: Times New Roman; font-size: 12px">
<TR>
<TD STYLE="border: 1px solid #000000;">

Nazwa przedm.
</TD>

<TD ALIGN="CENTER" STYLE="border: 1px solid #000000;">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px">
% sprzedanych przedmiot�w w stosunku do<br>ca�kowitej sprzeda�y w wyznaczonym okresie.
</SPAN>
</TD>
<TD STYLE="border: 1px solid #000000;">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px">
Ilo��
</span>
</TD>
<TD WIDTH="3" BGCOLOR="#000000"></td>
<TD STYLE="border: 1px solid #000000;">

Nazwa przedm.
</TD>

<TD ALIGN="CENTER" STYLE="border: 1px solid #000000;">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px">
% sprzedanych przedmiot�w w stosunku do<br>ca�kowitej sprzeda�y w wyznaczonym okresie.
</SPAN>
</TD>
<TD STYLE="border: 1px solid #000000;">
<SPAN STYLE=" font-family: Times New Roman; font-size: 11px">
Ilo��
</span>
</TD>

</TR>


<?
// SZUKANIE MAKSIMUM


$ab10=mysql_query("SELECT SUM(ilosc) FROM zamowienia WHERE data BETWEEN '$adata1' AND '$adata2'  ORDER BY nrztabprzedm",$db);
list($maxilosc1)=mysql_Fetch_Row($ab10);

$suma3=0;
$zp=mysql_query("select DISTINCT nazwa,nrztabprzedm  from
przedmiot,zamowienia where przedmiot.nr=zamowienia.nrztabprzedm AND data BETWEEN '$adata1' AND '$adata2' order by
nazwa", $db);


while(list($nazwa2,$nrztab)=Mysql_Fetch_Row($zp))
{


?>
<tr>
<TD STYLE="border: 1px solid #000000;"><?echo$nazwa2?></TD>
<TD STYLE="border: 1px solid #000000;">
<?

$ab70=mysql_query("SELECT SUM(ilosc) FROM zamowienia WHERE `nrztabprzedm`='$nrztab' AND `data` BETWEEN '$adata1' AND '$adata2' ",$db);
list($suma1)=mysql_Fetch_Row($ab70);


$procent=$suma1*100/$maxilosc1;
$procent=round($procent);
$procent1=$procent*2;
?>
<IMG SRC="index/pics/kwadrat.gif" WIDTH="<?echo$procent1?>" HEIGHT="16" BORDER="0" ALIGN="ABSMIDDLE" ALT=""><?echo$procent?>%


</TD>

<TD STYLE="border: 1px solid #000000;">
<?echo$suma1?>
</TD>

<TD WIDTH="3" BGCOLOR="#000000"></td>


<!-- Druga kolumna -->

<?
$zp1=mysql_query("select DISTINCT nazwa,nrztabprzedm  from
przedmiot,zamowienia where (przedmiot.nr=zamowienia.nrztabprzedm) AND (nrztabprzedm='$nrztab' AND data BETWEEN '$adata3' AND '$adata4')", $db);

list($nazwa4,$nrztab1)=Mysql_Fetch_Row($zp1);
if($nazwa4!="")
{
?>

<TD STYLE="border: 1px solid #000000;"><?echo$nazwa4?></TD>
<TD VALIGN="MIDDLE" STYLE="border: 1px solid #000000;">
<?

$ab71=mysql_query("SELECT SUM(ilosc) FROM zamowienia WHERE `nrztabprzedm`='$nrztab1' AND `data` BETWEEN '$adata3' AND '$adata4' ",$db);
list($suma2)=mysql_Fetch_Row($ab71);


$procent=$suma2*100/$maxilosc1;
$procent=round($procent);

$procent2=$procent*2;
if($procent2>=200)
{
$procent2=200;
};
?>
<IMG SRC="index/pics/kwadrat1.gif" WIDTH="<?echo$procent2?>" HEIGHT="16" BORDER="0" ALIGN="ABSMIDDLE" ALT=""><?echo$procent?>%


</TD>

<TD STYLE="border: 1px solid #000000;">
<?
echo "$suma2";
$suma3+=$suma2;
?>


</TD>
<?
}
else
{

?>
<td colspan="3" STYLE="border: 1px solid #000000;">
Brak sprzada�y <b>'<?echo$nazwa2?>'</b> w por�wnywanym okresie.
</TD>
<?
};
?>

</TR>


<?
};

?>

<tr>
<td>
&nbsp
</TD>
<td>
&nbsp
</TD>
<TD STYLE="border: 1px solid #000000;">
<?echo$maxilosc1?>
</TD>
<td>
&nbsp
</TD>
<td>
&nbsp
</TD>
<td>
&nbsp
</TD>

<TD STYLE="border: 1px solid #000000;">
<?echo$suma3?>
</TD>


</TR>

</table>

<?
};
?>





<!-- KONIEC POR�WNYWANIA -->


















<!-- OBSERWACJA PRZEDMIOT�W W CZASIE -->


<HR ALIGN="CENTER" SIZE="2" WIDTH="100%" COLOR="#000000">

<form ACTION="index.php" method="post">
<TABLE WIDTH="783" CELLSPACING="1" BORDER="0" BGCOLOR="#CCCCCC">
<tr>
<TD ALIGN="CENTER" colspan="3">
Obserwacja ilo�ci sprzeda�y danego przedmiotu w okre�lonym czasie.
</TD>
</TR>
<tr>
<TD ALIGN="CENTER" VALIGN="MIDDLE">


<SELECT name="aprzedmiot" value="">
<?
if ($aprzedmiot=="")
{
?>
<OPTION SELECTED VALUE="">Wybierz przedmiot</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$aprzedmiot?>"><?echo$aprzedmiot?></OPTION>
<?
};




$ab50=mysql_query("SELECT DISTINCT `nazwa` FROM przedmiot order by nazwa",$db);
while(list($snazwa)=mysql_Fetch_Row($ab50))
{
if($snazwa!=$aprzedmiot)
{
?>
<option VALUE="<?echo$snazwa?>"><?echo$snazwa?></OPTION>
<?
};
};
?>
</select>




</TD>


<TD ALIGN="CENTER" VALIGN="MIDDLE">


<SELECT name="adata5" value="">
<?
if ($adata5=="")
{
?>
<OPTION SELECTED VALUE="">Od dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata5?>"><?echo$adata5?></OPTION>
<?
};

$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata5)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>
<?
};
};
?>
</select>




</TD>
<TD ALIGN="CENTER" VALIGN="MIDDLE">
<SELECT name="adata6" value="">
<?
if ($adata6=="")
{
?>
<OPTION SELECTED VALUE="">Do dnia</OPTION>
<?
}
ELSE
{
?>
<OPTION SELECTED VALUE="<?echo$adata6?>"><?echo$adata6?></OPTION>
<?
};




$ab50=mysql_query("SELECT DISTINCT `data` FROM zamowienia",$db);
while(list($sdata)=mysql_Fetch_Row($ab50))
{
if($sdata!=$adata6)
{
?>
<option VALUE="<?echo$sdata?>"><?echo$sdata?></OPTION>
<?
};
};
?>
</select>

</TD>
</TR>
<tr>
<TD ALIGN="RIGHT" COLSPAN="3">
<br>
<input type="submit" name="wykresprzedmiotu" value="Poka� wykres"> &nbsp
</FORM>
</TD>
</TR>
</TABLE>





<?
if ($wykresprzedmiotu!="")
{
?>
<TABLE WIDTH="783" CELLSPACING="1" BORDER="0">
<tr>
<td STYLE="border: 1px solid #000000;">
Data
</TD>
<TD ALIGN="CENTER" STYLE="border: 1px solid #000000;">
% Sprzedanych przedmiot�w w stosunku do ca�o�ci sprzeda�y w wybranym przedziale czasu.
</TD >
<td STYLE="border: 1px solid #000000;">
Ilo��
</TD>
</TR>

<?
$ab95=mysql_query("SELECT `nr` from przedmiot where nazwa='$aprzedmiot'",$db);
list($nr05)=mysql_Fetch_Row($ab95);

// szukanie maksimum

$ab105=mysql_query("SELECT SUM(ilosc)FROM zamowienia WHERE (nrztabprzedm = '$nr05') AND (`data` BETWEEN '$adata5' AND '$adata6')",$db);
list($maksimum)=mysql_Fetch_Row($ab105);
$ab100=mysql_query("SELECT DISTINCT `data` from zamowienia where (`nrztabprzedm`='$nr05') AND (`data` BETWEEN '$adata5' AND '$adata6')",$db);
while(list($data100)=mysql_Fetch_Row($ab100))
{
?>
<TR>
<TD WIDTH="80" STYLE="border: 1px solid #000000;">
<?
echo "$data100";
?>
</TD>
<TD ALIGN="LEFT" VALIGN="MIDDLE" WIDTH="640" STYLE="border: 1px solid #000000;">
<?
$ab120=mysql_query("SELECT SUM(ilosc)FROM zamowienia WHERE (nrztabprzedm = '$nr05') AND (`data`='$data100')",$db);
list($ilosc200)=mysql_Fetch_Row($ab120);
$procent100=$ilosc200*100/$maksimum;
$procent100=round($procent100);
$procent101=$procent100*6;
?>
<IMG SRC="index/pics/kwadrat.gif" WIDTH="<?echo$procent101?>" HEIGHT="16" BORDER="0" ALIGN="ABSMIDDLE" ALT=""><SPAN STYLE=" font-family: times New Roman; font-size: 14px">
<?echo$procent100?>%</SPAN>
</TD>
<TD STYLE="border: 1px solid #000000;">
<?
echo "$ilosc200";

?>
</TD>

</TR>

<?
};
?>

</TABLE>
<?
};
?>

<HR ALIGN="CENTER" SIZE="2" WIDTH="100%" COLOR="#000000">




<!-- KONIEC OBSERWACJI PRZEDMIOTU W CZASIE -->


<?
};
?>










<!-- DODAJ KOLEKCJE -->

<?
if ($admin=="dodajkolekcje")
{
?>
<form ACTION="index.php">
Dodaj kolekcje do sklepu:
<table border=1>
<tr>
<td>
Kolekcja:
</TD>
<td>
<input name="kolekcja" value="">
</TD>
</TR>
<tr>
<td>
Klimat:
</TD>
<td>
<select name="klimat">
<option VALUE="mroczny">Mroczny</OPTION>
<option VALUE="muzyczny">Muzyczny</OPTION>
<option VALUE="sportowy">Sportowy</OPTION>
<option VALUE="zwykly">Zwyk�y</OPTION>
</select>
</TD>
</tr>
<tr>
<td>
Katalog:
</TD>
<td>
<input name="katalog" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl mroczny:
</TD>
<td>
<input name="p_ms" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl sportowy:
</TD>
<td>
<input name="p_ss" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl zwyk�y:
</TD>
<td>
<input name="p_zs" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl muzyczny:
</TD>
<td>
<input name="p_mus" value="">
</TD>
</TR>
</TABLE>
<br>
<input TYPE="submit" name="dodaj03" value="dodaj">
</FORM>



<?
}


//dodanie rekordu do kolekcja
if ($kolekcja!=""&&$dodaj03=="dodaj") //&& $rodzaj!="" && $kolekcja!="" && $STAN!=""  && $p_ms!=""&& $p_ss!=""&& $p_zs!=""&& $p_mus!=""&& $katalog!=""&& $nazwa_p!="")

   {
   // dodanie rekordu do tabel

   mysql_query("insert into kolekcje (kolekcja,klimat,katalog,p_ms,p_ss,p_zs,p_mus)
                 values ('$kolekcja','$klimat','$katalog','$p_ms','$p_ss','$p_zs','$p_mus')",$db);

   echo "Dodano rekord�w: ",mysql_affected_rows($db);
   }


?>


<!-- EDYCJA ZAWARTO�CI REGULAMIN -->



<?
if($admin=="edycjaregulamin")
{
?>
<table border=1 cellspacing="0">
<tr>
<TD ALIGN="CENTER">
EDYCJA ZAWARTO�CI SEKCJI "REGULAMIN"<br>
(Mo�na u�ywa� skrypt�w HTML).
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">

<form ACTION="index.php">



<?
$plik03=fopen("../index/regul.txt","r");
?>


<TEXTAREA NAME="regul" COLS="70" ROWS="15" WRAP="PHYSICAL" STYLE="text-align: center">
<?
do
{
$tekst1=fgets($plik03,"4096");
echo"$tekst1";
}
while ($tekst1!="");
fclose($plik03);
?>
</TEXTAREA>
<br><br>
<input TYPE="submit" name="regul1" value="zapisz">

</FORM>



</TD>
</TR>

</TABLE>


<?
}
 //edycja regulaminu
if ($regul1=="zapisz")
{

$plik04=fopen("../index/regul.txt","w");
fwrite($plik04, $regul, "4096");

fclose($plik04);
}


?>







<!-- EDYCJA ZAWARTO�CI O FIRMIE -->

<?
if($admin=="edycjaofirmie")
{
?>
<table border=1 cellspacing="0">
<tr>
<TD ALIGN="CENTER">
EDYCJA ZAWARTO�CI SEKCJI "O FIRMIE"<br>
(Mo�na u�ywa� skrypt�w HTML).
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">

<form ACTION="index.php">



<?
$plik02=fopen("../index/ofirmie.txt","r");
?>


<TEXTAREA NAME="ofirmie" COLS="70" ROWS="15" WRAP="PHYSICAL" STYLE="text-align: center">
<?
do
{
$tekst=fgets($plik02,"4096");
echo"$tekst";
}
while ($tekst!="");
fclose($plik02);
?>
</TEXTAREA>
<br><br>
<input TYPE="submit" name="ofirm01" value="zapisz">

</FORM>



</TD>
</TR>

</TABLE>


<?
}
 //edycja o firmie
if ($ofirm01=="zapisz")
{

$plik01=fopen("../index/ofirmie.txt","w");
fwrite($plik01, $ofirmie, "4096");

fclose($plik01);
}


?>


<!--DODAWANIE PRZEDMIOTU DO BAZY DANYCH -->

<?
if ($admin=="dodajprzedmiot")
{
?>

<table border="1" cellspacing="0">
<tr>
<TD ALIGN="CENTER">
Do jakiej kolekcji chcesz doda� przedmiot?
</TD>
</TR>
<tr>
<TD ALIGN="CENTER">



<form ACTION="index.php">
<select name=kolekcje02>
<?
 $ab=mysql_query("SELECT kolekcja FROM kolekcje",$db);

 while(list($kolekcja05)=mysql_Fetch_Row($ab))
 {
 echo "<option value=$kolekcja05>$kolekcja05</option>";
 }
?>
</SELECT>
<br><br>
<input TYPE="submit" name="dodajprzedmiot01" value="Dalej">
</FORM>


</TD>
</TR>



</TABLE>
<?
}
if ($dodajprzedmiot01=="Dalej")
{
?>
Dodaj przedmiot:

<form ACTION="index.php">
<table border="1" cellspacing="0">
<tr>
<TD>
Nazwa przedmiotu:
</TD>
<td>
<INPUT TYPE="TEXT" NAME="nazwa">
</TD>
</TR>
<tr>
<td>
Kolekcja:
</TD>
<td>
<input name="kolekcja" READONLY value="<?echo$kolekcje02?>">
</TD>
</TR>
<tr>
<td>
Stan na magazynie (TAK/NIE):
</TD>
<td>
<input name="STAN" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl mroczny:
</TD>
<td>
<input name="p_ms" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl sportowy:
</TD>
<td>
<input name="p_ss" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl zwyk�y:
</TD>
<td>
<input name="p_zs" value="">
</TD>
</TR>
<tr>
<td>
Punkty za styl muzyczny:
</TD>
<td>
<input name="p_mus" value="">
</TD>
</tr>
<tr>
<td>
Katalog ze zdj�ciami:
</TD>
<td>
<?

$ab05=mysql_query("SELECT katalog FROM kolekcje WHERE kolekcja='$kolekcje02'",$db);
list($katalog05)=mysql_Fetch_Row($ab05);
?>
<input name="katalog" READONLY value="index/towar/<?echo$katalog05?>">
</td>
</tr>
<tr>
<td>
Nazwa pliku:
</TD>
<td>
<input name="nazwa_p" value="">
</TD>
</TR>
<tr>
<td>
Status:
</TD>
<td>
<input name="status" value="">
</TD>
</TR>

<tr>
<td>Opis przedmiotu:</TD>
<td>
<TEXTAREA NAME="opis" COLS="30" ROWS="4">
</TEXTAREA>
</TD>
</TR>
<tr>
<td>
Cena:
</TD>
<td>
<input name="cena" value="">
</TD>
</TR>


</table>
<br><br>
<input TYPE="submit" name="dodajp02" value="Dodaj">
</FORM>
<?
}
if ($dodajp02=="Dodaj"&&$nazwa!="")
{

$nazwa_p2="t$nazwa_p";
mysql_query("insert into przedmiot (nazwa,kolekcja,STAN,p_ms,p_ss,p_zs,p_mus,katalog,nazwa_p,nazwa_p2,opis,status,cena)
                 values ('$nazwa','$kolekcja','$STAN','$p_ms','$p_ss','$p_zs','$p_mus','$katalog','$nazwa_p','$nazwa_p2','$opis','$status','$cena')",$db);

   echo "Dodano rekord�w: ",mysql_affected_rows($db);



}







 // REALIZACJA ZAM�WIE�

if ($admin5=="realizacja"&&$edycja=="Wykonaj")

{
?>


EGFWGWE





<?
}

?>









</center>


</body>
</meta>
</html>

<?
}
else
{
?>

<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#000000" ALINK="#000000" VLINK="#000000">
<center>

<SPAN STYLE=" font-family: Times New Roman; font-size: 14pt; color: #FF0000">
<center>
Content Management System<br>
PANEL ADMINISTRACYJNY SKLEPU  .PL
</CENTER>
<BR>
</SPAN>

<form ACTION="index.php?request_server=www.nazwa.pl" name="form_login" method="POST">
<CENTER><br><br>
<?
echo "<input name='usern' value=''><br>";
echo "<input TYPE='password' name='passwd' value=''>";
?>
<br><br>
<INPUT TYPE="SUBMIT" name=submit value="submit">
</FORM>
<br><br>
<?



echo "<center>ACCES DENIED</CENTER>";
};
?>
</CENTER>

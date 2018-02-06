<HTML>
<HEAD>
</HEAD>
<BODY>




<?
echo "chce wyslac maila";

$adres="sikurzakk@wsi.edu.pl";

mail ( $adres, "test", "test" );



mail($adres, 'subject', 'body',
     "From: admin@$SERVER_NAME",
     "-fadmin@$SERVER_NAME");








?>











</BODY>
</HTML>

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


mail($adres, 'subject', 'body',
     "From: admin@akulls.nazwa.pl",
     "-fadmin@skulls.nazwa.pl");






?>











</BODY>
</HTML>
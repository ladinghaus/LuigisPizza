<!DOCTYPE html>
<html>

<body>
<?php
  $dbname = "mydb";
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "quadangle";

  $SalamiKlein = $_POST['SalamiKlein'];
  $TonnoMittel = $_POST['TonnoMittel'];
  $HawaiiMittel = $_POST['HawaiiMittel'];

  $Name = $_POST['Vorname'];
  $Nachname = $_POST['Nachname'];
  $StrasseNummer = $_POST['StrasseNummer'];
  $Postleitzahl = $_POST['Postleitzahl'];
  $Stadt = $_POST['Stadt'];
  $Telefonnummer = $_POST['Telefonnummer'];

  $Datum = date("d.m.Y");
  $Uhrzeit = date("H:i:s");

  $dbconnection = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
  mysql_select_db($dbname, $dbconnection) or die (mysql());

  $eingabe = "INSERT INTO Bestellungen (Name, Nachname, StrasseNummer, Postleitzahl, Stadt, Telefonnummer, SalamiKlein, TonnoMittel, HawaiiMittel, Datum , Uhrzeit)
    VALUES ('$Vorname', '$Nachname', '$StrasseNummer', '$Postleitzahl', '$Stadt', '$Telefonnummer', '$SalamiKlein', '$TonnoMittel', '$HawaiiMittel', '$Datum', '$Uhrzeit')";

  if (mysql_query($eingabe, $dbconnection)){
    header("Location: http://localhost/~hanswurst/GerritsPizzaDanke.php");
  } else {
    echo "Fehler!";
  }

  mysql_close();

?>
</body>
</html>

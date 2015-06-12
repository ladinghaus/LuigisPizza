<!DOCTYPE html>
<html>

<body>
<?php

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

  include "MysqlLogin.inc"

  $eingabe = "INSERT INTO Bestellungen (Name, Nachname, StrasseNummer, Postleitzahl, Stadt, Telefonnummer, SalamiKlein, TonnoMittel, HawaiiMittel, Datum , Uhrzeit)
    VALUES ('$Vorname', '$Nachname', '$StrasseNummer', '$Postleitzahl', '$Stadt', '$Telefonnummer', '$SalamiKlein', '$TonnoMittel', '$HawaiiMittel', '$Datum', '$Uhrzeit')";

  if (mysql_query($eingabe, $dbconnection)){
    header("Location: http://localhost/~hanswurst/LuigisPizzaDanke.php");
  } else {
    echo "Fehler!";
  }

  mysql_close();

?>
</body>
</html>

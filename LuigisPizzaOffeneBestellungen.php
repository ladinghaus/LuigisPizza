<!DOCTYPE html>
<html>
  <head>

    <?php include 'LuigisPizzaHead.inc'; ?>

  </head>
  <body>

    <?php include $Header; ?>

    <h2>Offene Bestellungen</h2>
    <div id="Bestelluebersicht">
      <table id="mytable">
        <thead>
          <tr>
            <th>Datum</th>
            <th>Uhrzeit</th>
            <th>Name</th>
            <th>Adresse</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Aktion</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include "MysqlLogin.inc";

            $abfrage = "SELECT * FROM Bestellungen";
            $daten = mysql_query($abfrage);

            while ( $Zeile = mysql_fetch_object($daten)) { ?>
              <tr>
                <td><?php echo $Zeile['Datum'] ?></td>
                <td><?php echo $Zeile['Uhrzeit'] ?></td>
                <td><?php echo $Zeile['Vorname'] $Zeile['Nachname'] ?></td>
                <td><?php echo $Zeile['StrasseNummer'] ?></td>
                <td><?php echo $Zeile['Postleitzahl'] ?></td>
                <td><?php echo $Zeile['Stadt'] ?></td>
                <td><button id="bttn<?php echo $Zeile['ID'] ?>">Details</button>

                  <div style="display:none">
                    <table id="tbl<?php echo $Zeile['ID'] ?>" class="table table-striped">
                      <tr>
                        <td>Salami klein:</td><td><?php echo $Zeile['SalamiKlein'] ?></td>
                      </tr>
                      <tr>
                        <td>Tonno mittel:</td><td><?php echo $Zeile['TonnoMittel'] ?></td>
                      </tr>
                      <tr>
                        <td>Hawaii mittel:</td><td><?php echo $Zeile['HawaiiMittel'] ?></td>
                      </tr>
                    </table>
                  </div>
                  <script>

                    $(document).ready(function(){
                      $('#bttn<?php echo $Zeile['ID'] ?>').popover({title: "Bestellung", content: function() { return $('#tbl<?php echo $Zeile['ID'] ?>').html();} , html: true, placement: "right"});
                    });

                  </script>
                </td>
              </tr>
            <?php
            }
          ?>
        </tbody>
      </table>
    </div>

    <?php include $Footer; ?>

  </body>
</html>

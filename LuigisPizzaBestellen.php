<!DOCTYPE html>
<html>
  <head>
    <?php include 'LuigisPizzaHead.inc'; ?>
  </head>
  <body>

    <?php include $Header; ?>

    <div class="container">
      <form action="LuigisPizzaForm.php" method="post" class="centering">
        <div id="Menukarte">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Pizza </th>
                <th> Größe </th>
                <th> Anzahl </th>
                <th> Preis </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Salami </td>
                <td> klein </td>
                <td> <input class="Anzahl" type="number" name="SalamiKlein" min="0" max="10" step="1"> </td>
                <td> 4,00 Euro </td>
              </tr>
              <tr>
                <td> Tonno </td>
                <td> mittel </td>
                <td> <input class="Anzahl" type="number" name="TonnoMittel" min="0" max="10" step="1"> </td>
                <td> 6,00 Euro </td>
              </tr>
              <tr>
                <td> Hawaii </td>
                <td> mittel </td>
                <td> <input class="Anzahl" type="number" name="HawaiiMittel" min="0" max="10" step="1"> </td>
                <td> 6,50 Euro </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="Bestelldaten">
          <table class="table borderless">
            <tr>
              <div id="vname">
                <td><label for="Vorname">Vorname</label></td>
                <td><input id="Vorname" type="text" name="Vorname" length="30" maxlength="40"></td>
              </div>
            </tr>
            <tr>
              <div id="nname">
                <td><label for="Nachname">Nachname</label></td>
                <td><input id="Nachname" type="text" name="Nachname "length="30" maxlenght="40"></td>
              </div>
            </tr>
            <tr>
              <div id="strnummer">
                <td><label for="StrasseNummer">Straße / Hausnummer</label></td>
                <td><input id="StrasseNummer" type="text" name="StrasseNummer" length="30" maxlength="40"></td>
              </div>
            </tr>
            <tr>
              <div id="stadresse">
                <td><label for="Postleitzahl">PLZ / Ort </label></td>
                <td><input id="Postleitzahl" type="text" name="Stadt" length="5" maxlength="6">
                  <input id="Stadt" type="text" length="20" maxlength="40"></td>
                </div>
              </tr>
              <tr>
                <div id="telnummer">
                  <td><label for="Telefonnummer">Handynummer</label></td>
                  <td><input id="Telefonnummer" type="tel" name="Telefonnummer" ></td>
                </div>
              </tr>
          </table>
          <button id="Bestellen" type="submit"> Bestellen </button>
        </div>
      </form>
    </div>

    <?php include $Footer; ?>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>

    <?php $PageId = "SignUp"; ?>
    <?php include 'LuigisPizzaHead.inc' ?>

  </head>
  <body>

    <?php include $Header; ?>

    <div class="container">
      <div class="centering">
        <header class="header">
          <h1>Registrierung</h1>
        </header>
          <form class="form-horizontal" role="form" method="post" action="#">
            <div class="form-group">
              <label for="vorname" class="col-md-4 control-label">Vorname:</label>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Vorname">
              </div>
            </div>
            <div class="form-group">
              <label for="nachname" class="col-md-4 control-label">Nachname:</label>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nachname">
              </div>
            </div>
            <div class="form-group">
              <label for="adresse" class="col-md-4 control-label">Straße und Hausnummer:</label>
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Straße">
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Hausnummer">
              </div>
            </div>
            <div class="form-group">
              <label for="plzstadt" class="col-md-4 control-label">PLZ / Ort:</label>
              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Postleitzahl">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Wohnort">
              </div>
            </div>
            <div class="form-group">
              <label for="telefonnummer" class="col-md-4 control-label">Telefonnummer:</label>
              <div class="col-md-6">
                <input type="tel" class="form-control" placeholder="Telefonnummer">
              </div>
            </div>
            <div class="form-group">
              <label for="emailadresse" class="col-md-4 control-label">Emailadresse:</label>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Emailadresse">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-10">
                <input type="submit" class="btn" value="Weiter">
              </div>
            </div>
          </form>
      </div>

    </div>

    <?php include $Footer; ?>
    
  </body>

</html>

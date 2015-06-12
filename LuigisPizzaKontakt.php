<!DOCTYPE html>
<html>
  <head>
    <?php $PageId = "Kontakt"; ?>
    <?php include 'LuigisPizzaHead.inc'; ?>

  </head>
  <body>

    <?php include $Header; ?>

    <div class="container">
      <div class="centering">
        <header class="header">
          <h1>Kontakt</h1>
        </header>
        <form class="form-horizontal" role="form" method="post" action="#">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="name" name="name" placeholder="Vor- und Nachname">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email" name="email" placeholder="Emailadresse">
            </div>
          </div>
          <div class="form-group">
            <label for="mitteilung" class="col-sm-2 control-label">Mitteilung:</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="submit" class="btn" name="submit" value="Senden">
            </div>
          </div>

        </form>
      </div>

    </div>

    <?php include $Footer; ?>

  </body>
</html>

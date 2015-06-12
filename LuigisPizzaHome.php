<!DOCTYPE html>
<html>
  <head>
    <?php $PageId = "Home"; ?>
    <?php include 'LuigisPizzaHead.inc'; ?>
  </head>
  <body>

    <?php include $Header; ?>
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="Tonno.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="Salami-Pizza.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="Pizza.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">

              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <?php include $Footer; ?>
  </body>
</html>

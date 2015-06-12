    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand">Luigi's Pizza<img id="logo-navbar" src="logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li<?php LPactive("Home"); ?>><a href="LuigisPizzaHome.php">Home</a></li>
                <li<?php LPactive("Bestellen"); ?>><a href="LuigisPizzaBestellen.php" id="Bestellen-Navbar">Bestellen</a></li>
                <li<?php LPactive("Kontakt"); ?>><a href="LuigisPizzaKontakt.php">Kontakt</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li<?php LPactive("SignUp"); ?>><a href="LuigisPizzaSignUp.php">Registrieren</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Einloggen<span class="caret"></span></a>
                  <div class="dropdown-menu login-menu">
    	               <div class="login-content">
    	                  <form action="#" method="post">
    	    	               <div class="form-group">
    		                       <label>Email</label>
    		                        <input type="text" class="form-control username-input input-sm" name="username" placeholder="Email Address">
    	    	               </div>
    	    	               <div class="form-group">
    		                       <label>Passwort</label>
    		                       <input type="password" class="form-control password-input input-sm" name="password" placeholder="Password">
    		                   </div>
    	    	               <div class="form-group">
    		                       <label><input type="checkbox" name="remember" id="remember"> Eingeloggt bleiben</label>
    	    	               </div>
    	    	               <div class="form-group">
    				                   <input class="btn login-btn" type="submit" name="submit" value="Einloggen" style="display: block;">
    			                 </div>

    	                  </form>
    	               </div>
                  </div>
                </li>
              <ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

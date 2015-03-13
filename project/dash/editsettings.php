<?php

if(isset($_POST['team'])){
  
  $team = $_POST['team'];
  
  $city = $_POST['city'];
  
  $state = $_POST['state'];
  
  $unit = $_POST['unit'];
  
  $config = '<?php 
  $team = "' . $team . '";
  $city = "' . $city . '";
  $state = "' . $state . '";
  $unit = "' . $unit . '";
  ?>';

  /* Write Variables to file */
  $fp = fopen("../settings.php", "w");
  fwrite($fp, $config);
  fclose($fp);
  include_once "../includes/config.php" ;
  
  header( "refresh:0");
  
}else{
  include("../settings.php");
}


?>
<html>
  <head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/anytime.5.0.7.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/anytime.5.0.7.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Dash</title>
  </head>
  <body>
    <div class="visible-xs visible-sm"></div>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dash</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../">Display</a></li>
            <li><a href="index.php">Matches</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-12 main">
          <h1 class="page-header">Team Settings</h1>
		        <div class="table-responsive">
              <table class="table table-striped">
		    	      <thead>
                  <tr>
                    <th>Data</th>
                    <th>Value</th>
                  </tr>
                </thead>
                <form method="post" action="">
                  <tbody>
                    <tr>
                      <td>Team Number</td>
                      <td><input type="text" name="team" value="<?php echo $team; ?>"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>City</td>
                      <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td><input type="text" name="state" value="<?php echo $state; ?>"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>Weather Unit</td>
                      <td><input type="text" name="unit" value="<?php echo $unit; ?>"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                  </tbody>
                </form>
              </table>
            </div>
          </h1>
        </div>
      </div>
    </div>
  </body>
</html>
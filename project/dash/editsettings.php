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
                      <td><input type="text" name="team" value="4665"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>City</td>
                      <td><input type="text" name="city" value="Glencoe"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td><input type="text" name="state" value="MN"></td>
                      <td><input type="submit" class='btn btn-default'/></td>
                    </tr>
                    <tr>
                      <td>Weather Unit</td>
                      <td><input type="text" name="unit" value="F"></td>
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
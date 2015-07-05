MeetStatusScreen
================

###About
An application for displaying upcoming meet information at an FRC Competition

It will display information about the competition as well as other helpful information:

* When the next meet is
* How long until the next meet (live countdown!)
* Allies Competing and your Alliance Color
* Opponents Competing and their Alliance Color
* Current Weather

###Using

To Use MeetStatusScreen, either download the release or the current source code. The files in the ```project/``` folder are the only files you should need, and you can put these either in the root or in any subdirectory of your website.

If you want to host it locally during competition, we use [easyPHP](http://www.easyphp.org/) to host our project to localhost, and use [Ngrok](http://www.ngrok.com/) to access the dash remotely.

To customize your team information, you'll need to change the logo.png file and customize the information in settings.php:
```php
<?php
  $team = "4665"; // This should be your FRC team number
  $timezone = "America/Chicago"; // Time zone for clock setting in PHP
  $city = "Glencoe"; //The city for your weather data
  $state = "MN"; // The state for your weather data
  $unit = "F"; // The unit for your temperature; C(elsius), R(ankine), F(arenheit), or K(elvin)
  date_default_timezone_set($timezone); // A bit of ignorable code to make the above work
?>
```
Also, you'll need to edit the database information found in ```match.php``` and ```dash/index.php``` to make these work with your mySQL database configuration.

Lastly, if you do use this, please let us know at gslrobotics@gmail.com. We'd love to know who's making use of our projects!

###Contributing
If you want to make changes to MeetStatusScreen, feel free to fork it. Send us a pull request if you think your changes would be helpful to others!

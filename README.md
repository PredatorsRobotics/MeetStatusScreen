MeetStatusScreen
================

### About
An application for displaying upcoming meet information at an FRC meet

It will display information about the competition as well as other helpful information:

* When the next meet is
* How long until the next meet (live countdown!)
* Allies Competing and your Alliance Color
* Opponents Competing and their Alliance Color
* Current Weather

### Installation

These instructions are tested to work on a fresh Ubuntu 16.04 install.

```
sudo apt install apache2 php7.0 apache2-mod-php7.0 mysql-server php7.0-mysql
git clone git@github.com:PredatorsRobotics/MeetStatusScreen.git
cp -r MeetStatusScreen/project/* /var/www/html/
```
* Replace `/logo.png` with your team's logo.
* Customize settings in `/settings.php`
* Set up your database and configure the information in `/match.php` and `/dash/index.php`.

Lastly, if you do use this, please let us know at [gslrobotics@gmail.com](mailto:gslrobotics@gmail.com). We'd love to know who's making use of our projects!

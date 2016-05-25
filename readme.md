#Configure Wordpress an Creating Custom Plugin
###Configure Wordpress
##Set up New Virtual Host
####127.0.0.1 is Local - Then the name
```
sudo vi /etc/hosts
127.0.0.1 local-drupal.com
127.0.0.1 local-furniture-site.com
```
##Download Wordpress
####Go to www.wordpress.org
####Dowload zip of Wordpress 4.5.2 and Extract
#### Save in Folder Open up in Sublime
##Configure Virtual Host in Apache Configuration
#####Apache listening on Port 80 - but no Virtual Host Setup
```
sudo vi /etc/apache2/extra/httpd-vhosts.conf

<VirtualHost *:80>
  ServerName local-furniture.com
  DocumentRoot /Users/Bryant/Desktop/DigitalCrafts/unit4/wordpress/furniture-site

  <Directory "/Users/Bryant/Desktop/DigitalCrafts/unit4/wordpress/furniture-site">
    Allow from all
    Options +Includes +Indexes +FollowSymLinks
    AllowOverride all
    Require all granted
  </Directory>
</VirtualHost>

//Setup drupal as well

<VirtualHost *:80>
  ServerName local-drupal.com
  DocumentRoot /Users/Bryant/Desktop/DigitalCrafts/unit4/drupal

  <Directory "/Users/Bryant/Desktop/DigitalCrafts/unit4/drupal">
    Allow from all
    Options +Includes +Indexes +FollowSymLinks
    AllowOverride all
    Require all granted
  </Directory>
</VirtualHost>
```
##Restart Apache
```
//Syntax Checker
sudo apachectl -t
//Restart Command
sudo apachectl restart
```
###Set Up DataBase 
#####Went into Sequel Pro and created Database with name "Furniture"
#####Update Schema Priviliges for X user
###Update wp-config.php, Save, Run Install (following directions on WP)
#####Copy the code in the "sorry can't get the wp-config.php file"
#####Paste into sublime Save in root directory 
#####Keep following WP directions
#####Check Sequal and see if connected
##Customize Site
####Go to root WP directory in Terminal and Give Apache User ownership of uploads because User owns it now
```
cd unit4/wordpress/furniture-site
cd wp-content
//Give Apache ownership of uploads folder
//Make uploads folder
mkdir uploads
//_www is the Apache User
sudo chown _www uploads/
```
#####That worked. Holy Crap
##Add plugin
####Save into root/wp-content/plugins/
#####Create file "sample.php" and save
#####In order for Wordpress to acknowledge Your plugin you Must have the following
```html
<?php
/**
* Plugin Name: Student Controller
* Description: This is the custom controller for the WP-Challenge.
* Version: 1.0.
* Author: William Bryant
*/
```
####PHP Array Review
```php
function getClass(){

$theClass = array(
	'Tristan',
	'Joshua',
	'Bogdan',
	'Laz',
	'Rock Man',
	'Will',
	'Curtis',
	'Joe',
	'Koshan',
	'Patrick',
	'The Handsome One',
	'Jeremy'
	);

return;

array_pop($class);


$theClass = array(
	'student_one' => 'Tristan',
	'student_two' => 'Joshua',
	'student_three' => 'Bogdan',
	'student_four' => 'Laz',
	'student_five' => 'Rock Man',
	'student_six' => 'Will',
	'student_seven' => 'Curtis',
	'student_eight' => 'Joe',
	'student_nine' => 'Koshan',
	'student_ten' => 'Patrick',
	'student_eleven' => 'The Handsome One',
	'student_twelve' => 'Jeremy'
	);

$class = array();
$class[] = 'Tristan';
$class[] = 'Josh';
array_push($class, 'Tristan');
array_push($class, 'Josh');

$class - new stdClass;
$class->student_one = 'Tristan';
$class->student_two = 'Josh';
}
```
###Activate Plugin inside Wordpress Dashboard
###Inside index.php Inside your themes call your function
```




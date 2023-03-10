# St. Paul's University Blog Website
This is the official repository for the St. Paul's University Blog Website, a platform for students, faculty, and staff to share their thoughts and ideas.

### Built With
The website is built using the following technologies:

HTML5 
CSS3
JavaScript
MySQL
### Getting Started
To get started with the website, clone the repository and set up a local development environment with a web server and MySQL database.

bash
Copy code
```
git clone https://github.com/michaelgikunda/st-pauls-university-blog-website.git
```
```
cd st-pauls-university-blog-website
```
### Database Configuration
The website uses a MySQL database to store blog posts and user information. To configure the database, create a new MySQL database and update the config.php file with your database credentials.

### php
Copy code
// Database configuration
```
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_mysql_username');
define('DB_PASSWORD', 'your_mysql_password');
define('DB_NAME', 'your_mysql_database_name');
```
Then, import the database.sql file to create the necessary tables.

### Running the Website
To run the website, start your web server and navigate to the index.html file in your browser.

### Contributing
If you would like to contribute to the website, please open an issue or submit a pull request.

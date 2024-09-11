# Curious Blog Platform

Curious is a blog platform where users can post and read blogs on various topics like Technology, Health, Travel, Lifestyle, and Finance. Users can register, log in, and start writing blogs on their favorite topics. Each blog post is categorized and visually represented with a default image according to the category selected.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Technologies Used](#technologies-used)
- [Usage](#usage)



## Features

- User Authentication (Signup and Login pages)
- Blog creation, categorization, and viewing
- Categories: Technology, Health, Travel, Lifestyle, Finance
- Default category-specific images for blog posts
- Responsive design using external CSS (`style.css`)

## Installation

Follow the steps below to set up the project on your local machine.

### Prerequisites

Make sure you have the following installed:

- PHP 7.4+: You can download it from [here](https://www.php.net/downloads).
- MySQL Database: Required for blog and user data storage.
- Apache Server (XAMPP or WAMP): To run PHP locally. You can download XAMPP from [here](https://www.apachefriends.org/index.html).

# Steps to Install

1. Clone the Repository

   ```bash
   git clone https://github.com/yourusername/curious-blog-platform.git

   Set Up the Database

2. Open phpMyAdmin (http://localhost/phpmyadmin).
Create a new database called curious_blog.
Import the SQL file (curious_blog.sql) provided in the db/ directory to set up the required tables for users and blog posts.
Configure Database Connection

3. Open the connection.php file in the root directory.
Update the following details with your MySQL credentials:

$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "curious_blog"; // the database you just created

4. Run the Application

Move the project folder to the htdocs directory in XAMPP or WAMP.
Start Apache and MySQL in the XAMPP/WAMP control panel.
Open your browser and visit http://localhost/curious-blog-platform/ to view the application.
Technologies Used
HTML5 & CSS3: For front-end design and layout.
PHP: For server-side scripting and back-end logic.
MySQL: For data storage (blogs, users, categories).
JavaScript: For front-end interactivity (optional).
Bootstrap: For a responsive and modern UI design.


5. Usage

   
1. Create an Account
Visit the signup page (signup.html).
Enter your details and create an account.
2. Log In
Visit the login page (login.html).
Use your registered credentials to log in.
3. Post a Blog
After logging in, go to the compose page (compose.html).
Select a category, enter your blog content, and submit your blog.
4. View Blogs
Visit the blog section or specific category pages (e.g., technology.html, health.html) to view posted blogs.



License
This project is licensed under the MIT License. See the LICENSE file for more information.


 Key Points:
1. Installation Steps: Detailed steps for setting up the project, including database configuration and PHP setup.
2. Usage Instructions: Guides the user on how to create an account, post a blog, and view blogs.


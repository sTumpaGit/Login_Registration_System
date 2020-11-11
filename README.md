# Login_Registration_System

This is a simple login-registration page.

There are 8 fields – Username , Full name , Gender , Educational Qualification, Date of Birth, Email, Password and ImageLlink. 
I have used HTML5, CSS3, JavaScript , php and mySql .
Database Name – samplelogindB 
Table name - userinfotableall
This project has four php files – 
1. index.php( For the Log in page. If any username is not recorded or wrong username/password  is typed then it shows “ Invalid Credentials ”. Then go for new log in or register a new table. )
2. register.php( For Registration page) - I have used radio button , selection , uploading of photo here. If picture is more than 2 MB it will not be accepted. If registration is successful then data is shown in userinfotableall table in sampleloginDB database. No two username will be same.)
3. homepage.php (Showing Registered names with identity photo if username and password are correctly logged in. Then log out for further access.)
4. config.php( For database connection checking. It is successfully connected.)
A CSS file named style.css . As my javascript code was of 5-6 line so I coded it in register file itself.

Note :config.php is in dbconfi folder and style.css in css folder.


Student Registration Form with MySQL Database

Project Overview:
This is a simple Student Registration Form built using HTML, CSS, JavaScript, PHP, and MySQL. The form allows schools to collect student details such as Name, Roll No., Class, Section, Gender, Mobile Number, Email, and Address. When a student submits the form, the data is stored securely in a MySQL database.

Features:
✅ User-friendly registration form
✅ JavaScript validation for proper input
✅ PHP backend to process form submissions
✅ MySQL database for secure data storage
✅ Clean and responsive UI with CSS styling

Project Structure:
student-registration/
│── index.html       # Student Registration Form
│── styles.css       # CSS for styling
│── script.js        # JavaScript for form validation
│── config.php       # Database connection file
│── insert.php       # Handles form submission and inserts data into MySQL
│── db_setup.sql     # SQL script to create the database and table
│── README.md        # Project documentation

Technology Stack:
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL

Installation & Setup:
Step 1: Set Up MySQL Database
1. Open phpMyAdmin or MySQL command line.
2. Create a new database by running: CREATE DATABASE school;
3. Use the database: USE school;
4. Create the students table by running the SQL script inside db_setup.sql.

Step 2: Configure the Project
1. Install XAMPP (if not installed) and start Apache & MySQL.
2. Place the project folder inside the htdocs directory (for XAMPP).
3. Open config.php and update the database connection settings if needed.

Step 3: Run the Project
1. Open a browser and go to: http://localhost/student-registration/index.html
2. Fill out the registration form and submit.
3. Check the students table in the database to see the stored records.

License
This project is open-source. You are free to use, modify, and distribute it.

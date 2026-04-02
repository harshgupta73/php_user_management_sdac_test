# php_user_management_sdac_test
PHP SESSION, CRUD

.

📌 PHP User Management System (SDAC Test)

A simple User Management System built using Core PHP & MySQL, implementing Session Management and CRUD operations.

🚀 Features
🔐 User Registration
🔑 User Login & Logout
👤 Session Handling
📝 CRUD Operations:
Create User
View Users
Update User
Delete User
📸 UI Screens (Login, Register, Home, Edit, Delete)
🛠️ Tech Stack
Frontend: HTML
Backend: PHP
Database: MySQL
Server: XAMPP
📂 Project Structure
php_user_management_sdac_test/
│
├── db.php              # Database connection
├── login.php           # Login page
├── register.php        # Registration page
├── home.php            # Dashboard / Home
├── edit.php            # Update user
├── delete.php          # Delete user
├── logout.php          # Logout
│
├── images/             # Project screenshots
│   ├── login.png
│   ├── register.png
│   ├── home1.png
│   ├── home2.png
│   ├── edit1.png
│   ├── edit2.png
│   ├── edit3.png
│   ├── delete.png
│
└── README.md
⚙️ Setup Instructions
Clone the repository:
git clone https://github.com/harshgupta73/php_user_management_sdac_test.git
Move folder to:
C:\xampp\htdocs\
Start Apache & MySQL in XAMPP
Create database:
CREATE DATABASE user_management;
Create table:

Update database credentials in db.php
Run in browser:
http://localhost/php_user_management_sdac_test


🔐 Security
Password hashing using password_hash()
Session-based authentication
Basic input validation

👨‍💻 Author

Harshvardhan Gupta
GitHub: https://github.com/harshgupta73

💡 Future Improvements
Password reset system
Email verification
Role-based access (Admin/User)


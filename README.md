# E-commerce Website (PHP + MySQL)

This is a simple e-commerce website built using PHP, MySQL, HTML, CSS, and JavaScript. It features user authentication, product browsing, a shopping cart, wishlist, checkout process, and an admin panel for managing the store.

## 💡 Features

- User registration and login
- Product listing and quick view
- Shopping cart and wishlist
- Checkout and order tracking
- Admin dashboard for managing users, products, and orders
- MySQL database schema provided

## 🛠 Technologies Used

- PHP
- MySQL (via `shop_db.sql`)
- HTML, CSS, JavaScript

## 🚀 Getting Started

### Prerequisites

- PHP (>= 7.4)
- MySQL Server
- Web server (e.g., XAMPP, MAMP, or LAMP stack)

### Installation Steps

1. Clone or download the project:

   ```bash
   git clone https://github.com/yourusername/ecommerce-website.git

2. Move the project to your web server root directory (e.g., htdocs in XAMPP): /xampp/htdocs/ecommerce-website/

3. Import the database:

- Open phpMyAdmin

- Create a new database (e.g., shop_db)

- Import shop_db.sql located in the root folder

4. Configure the database connection in: components/connect.php with your MySQL credentials

5. Start your web server and access the website at: http://localhost/ecommerce-website/


🧑‍💼 Admin Login
You can create an admin account directly via phpMyAdmin or modify the login credentials in admin_login.php.


📁 Project Structure
shop.php — Product listing

cart.php, wishlist.php — Cart features

checkout.php, orders.php — Order process

user_login.php, user_register.php — User auth

admin/ — Admin panel files

shop_db.sql — Database schema


📦 License
This project is for educational purposes. Feel free to fork and modify it.

This project requires:

- PHP >= 7.4
- MySQL
- Apache or similar web server
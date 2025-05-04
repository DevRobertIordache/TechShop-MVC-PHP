# 🛒 Tech Shop

> A fully functional **PHP e-commerce platform** using **PDO, MySQL, and MVC**, built for the **Web Development Server-Side** module.

---

![Tech Shop Banner](https://i.imgur.com/f7HnJek.png)

---

## 🚀 Features

* 🔐 **User Authentication**

  * Register / Login / Logout
  * Hashed passwords using `password_hash()`
  * Session-based login

* 📦 **Product Management (CRUD)**

  * Add, Edit, Delete, View
  * Fields: name, description, price, stock
  * Protected actions (only logged-in users)

* 🛒 **Shopping Cart**

  * Session-based
  * Add/Remove items
  * Auto-total calculation

## 📷 Screenshots

| Product List                                 | Add Product                             | Cart                                     |
| -------------------------------------------- | --------------------------------------- | ---------------------------------------- |
| ![products](https://i.imgur.com/83sUezO.png) | ![add](https://i.imgur.com/zR2KhbH.png) | ![cart](https://i.imgur.com/1rUMKPt.png) |

---

## 🛠️ Setup Instructions

1. 🔽 [Download the project as ZIP](https://github.com/YOUR_USERNAME/tech-shop-ecommerce/archive/refs/heads/main.zip)
2. Extract the files into your web root (`htdocs` for XAMPP).
3. Start **Apache** and **MySQL** in XAMPP.
4. Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Create a database called `ecommerce` (You can rename this)
6. Import the `database.sql` file.
7. Open the app at [http://localhost/ecommerce/public/index.php](http://localhost/ecommerce/public/index.php)

---

## 📦 Download

* 🔗 [Latest ZIP Release](https://github.com/YOUR_USERNAME/tech-shop-ecommerce/archive/refs/heads/main.zip)
* 🔗 [View on GitHub](https://github.com/YOUR_USERNAME/tech-shop-ecommerce)

---

## 🔧 Technologies Used

* PHP 8.x
* MySQL (via PDO)
* HTML5 & Bootstrap 5
* No JavaScript
* No frameworks

## 👤 Author

* **Name**: *Robert Iordache*
* **Module**: Web Development Server-Side
* **Project Date**: May 2025
* **Contribution**: *100% solo-developed by me. No external help or templates were used.*

---

## 🧪 Manual Testing Checklist

* ✅ User registration/login/logout
* ✅ Product add/edit/delete
* ✅ Add to cart / remove from cart

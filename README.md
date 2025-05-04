# 🛒 Tech Shop

> A fully functional **PHP e-commerce platform** using **PDO, MySQL, and MVC**, built for the **Web Development Server-Side** module.

---

## 🚀 Features

* 🔐 **User Authentication**

  * Register / Login / Logout
  * Hashed passwords using `password_hash()`
  * Session-based login
    ![Register Form](https://cdn.discordapp.com/attachments/750389786438664272/1368606833841016893/2.png?ex=6818d5f0\&is=68178470\&hm=5bf9ba4bb64154afa41fd4c21d9896d1dfc9ecf7bf915a68dc1040025370276b&)
    ![Success Message](https://cdn.discordapp.com/attachments/750389786438664272/1368606834092408842/3.png?ex=6818d5f0\&is=68178470\&hm=fd806f90a3a17d352cf33ee52c80d199c333e1090b8099e282e67e2cba637e0c&)

* 📦 **Product Management (CRUD)**

  * Add, Edit, Delete, View
  * Fields: name, description, price, stock
  * Only logged-in users can manage products
    ![Add Product](https://cdn.discordapp.com/attachments/750389786438664272/1368606834377625600/4.png?ex=6818d5f0\&is=68178470\&hm=84222af96d84a138a58516ef84994b713cc4bd3d4980dc33eb20be8af05ce5ec&)
    ![Edit Product](https://cdn.discordapp.com/attachments/750389786438664272/1368606835182932009/6.png?ex=6818d5f0\&is=68178470\&hm=35ebb6880cee1490df8ef13b61d97786fc070355e997269bc3e1054ed752b09a&)

* 🛒 **Shopping Cart**

  * Session-based cart
  * Add to cart, view, and remove
  * Count updates instantly
    ![Cart](https://cdn.discordapp.com/attachments/750389786438664272/1368606834092408842/3.png?ex=6818d5f0\&is=68178470\&hm=fd806f90a3a17d352cf33ee52c80d199c333e1090b8099e282e67e2cba637e0c&)

---

## 📷 Screenshots

| Product List                                                                                                                                                                             | Add Product                                                                                                                                                                              | Edited Product List                                                                                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| ![1](https://cdn.discordapp.com/attachments/750389786438664272/1368606833576640543/1.png?ex=6818d5f0\&is=68178470\&hm=62cb4056e5160081b8bddd085ccf643afead10caf882498f415084ea89d5df38&) | ![4](https://cdn.discordapp.com/attachments/750389786438664272/1368606834377625600/4.png?ex=6818d5f0\&is=68178470\&hm=84222af96d84a138a58516ef84994b713cc4bd3d4980dc33eb20be8af05ce5ec&) | ![7](https://cdn.discordapp.com/attachments/750389786438664272/1368606835657015380/7.png?ex=6818d5f1\&is=68178471\&hm=e51fd45012abf79e9075f3e998d841bd41627c8fd00e41af6e43f4e75e445dbc&) |

---

## 🛠️ Setup Instructions

1. 🔽 [Download the project as ZIP](https://github.com/YOUR_USERNAME/tech-shop-ecommerce/archive/refs/heads/main.zip)
2. Extract into your web root (`htdocs` in XAMPP)
3. Start **Apache** and **MySQL** in XAMPP
4. Visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Create a database called `ecommerce`
6. Import the `database.sql` file
7. Go to [http://localhost/ecommerce/public/index.php](http://localhost/ecommerce/public/index.php)

---

## 📦 Download

* 🔗 [Latest ZIP Release](https://github.com/YOUR_USERNAME/tech-shop-ecommerce/archive/refs/heads/main.zip)
* 🔗 [View on GitHub](https://github.com/YOUR_USERNAME/tech-shop-ecommerce)

---

## 🔧 Technologies Used

* PHP 8.x
* MySQL (with PDO)
* HTML5 + Bootstrap 5
* No JavaScript
* No frameworks

---

## 👤 Author

* **Name**: *Robert Iordache*
* **Module**: Web Development Server-Side
* **Project Date**: May 2025
* **Contribution**: *100% solo-developed by me. No external help or templates were used.*

---

## 🧪 Manual Testing Checklist

* ✅ Registration & login
* ✅ Product create, edit, delete
* ✅ Add to cart and view cart
* ✅ Database tested with sample data
* ✅ Full CRUD works properly
* ✅ Session control works
* ✅ Cart count & updates
* ✅ All screenshots taken during final test run

---

All testing was done locally using XAMPP and phpMyAdmin.

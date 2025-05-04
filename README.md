# E-Commerce Project

**Student Name:** Jane Doe  
**Solo Work:** This project was completed 100% solo, using only course-taught techniques.

## Setup Instructions

1. Import the `database.sql` file into your MySQL server to create the `ecommerce` database and tables:

```bash
mysql -u username -p < database.sql
```

2. Place all project files in your web server directory (e.g., `htdocs` or `www`).
3. Ensure the `config.php` file has the correct database credentials (username/password).
4. Access the application via your browser at `http://localhost/your-folder/public/index.php`.

## Features Implemented

- User registration and login (session-based authentication).
- Product management (Create, Read, Update, Delete).
- Session-based shopping cart (add items, view cart, remove items).
- Input validation and sanitization on forms.
- MVC structure with separate folders for models, views, controllers, includes, and public files.
- Bootstrap CSS for basic styling (no JavaScript used).

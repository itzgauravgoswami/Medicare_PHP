# Medicare

A responsive medical website built with **PHP**, **MySQL**, and **Bootstrap 5**, featuring a public-facing site and a secure admin panel for managing content.

---

### 👨‍💻 Developed by:
**Name :- Gaurav Goswami, Shreya Saini**  
**Roll No. :- 233032, 236026**

---

## 🚀 Features

### Public Website
- 🏠 Home  
- 📄 About  
- 💉 Services  
- 👨‍⚕️ Doctors  
- 📰 Blog  
- 📞 Contact (with appointment booking form)

### Admin Panel
- 📊 Dashboard  
- ✍️ Manage Services  
- 🗞 Manage Blog Posts  
- 📅 View Appointments  
- 🔒 Secure Admin Login

---

## 🛠 Technologies Used

- PHP  
- MySQL  
- Bootstrap 5  
- FontAwesome  
- HTML5 & CSS3  

---

## ⚙️ Setup Instructions

### 1. Clone Project
Place the `/medicare` folder in your web server root (e.g., `htdocs` for XAMPP).

### 2. Create Database

Open **phpMyAdmin** and create a new database named:

```sql
medicare_db
```

### 3. Run the following SQL commands to create tables:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

CREATE TABLE services (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  description TEXT,
  icon VARCHAR(50)
);

CREATE TABLE blog_posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT,
  image VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE appointments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  date DATE,
  time TIME,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 4. Set Admin User

```sql
INSERT INTO users (username, password) VALUES ('admin', 'YOUR_HASH');
```

Generate password hash using:

```bash
php -r "echo password_hash('admin123', PASSWORD_DEFAULT);"
```


## 🧪 Running the Project

- Public Site: [http://localhost/medicare/](http://localhost/medicare/)
- Admin Panel: [http://localhost/medicare/admin/login.php](http://localhost/medicare/admin/login.php)

---

## 🔐 Admin Credentials

- **Username:** `admin`  
- **Password:** `admin123` (or the password you set)

---

## 📦 Usage

- Navigate through public pages and use the appointment form to book slots.
- Use the admin panel to:
  - Add/Edit/Delete services
  - Manage blog content
  - View appointment requests

---

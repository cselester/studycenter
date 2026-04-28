# 🎓 Study Center Management System

A web-based **Study Center Management System** built using **PHP, MySQL, HTML, CSS, and JavaScript**.
This system helps manage students, courses, and administrative operations efficiently in a centralized platform.

---

## 🚀 Features

* 👨‍🎓 Student Registration & Management
* 📚 Course Management System
* 🧑‍🏫 Admin Panel for Control & Monitoring
* 🗂️ Organized Record Management
* 🔍 Search & Filter Functionality
* 📊 Structured Data Handling

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Server:** Apache (XAMPP/WAMP)

---

## 📁 Project Structure

```bash
studycenter/
│
├── index.php              # Main dashboard
├── db.php                 # Database connection
├── config.php             # Configuration settings
│
├── /students              # Student management module
├── /courses               # Course management module
├── /admin                 # Admin functionalities
├── /assets                # CSS, JS, images
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/cselester/studycenter.git
```

### 2️⃣ Move Project to Server Directory

Place the project inside:

```bash
htdocs/
```

### 3️⃣ Start Server

* Start **Apache**
* Start **MySQL**

### 4️⃣ Setup Database

* Open **phpMyAdmin**
* Create a database (e.g. `study_center_db`)
* Import the provided `.sql` file (if available)

### 5️⃣ Configure Database Connection

Edit `db.php`:

```php
$conn = new mysqli("localhost", "root", "", "study_center_db");
```

---

### 6️⃣ Run the Project

Open your browser:

```bash
http://localhost/studycenter/
```

---

## 📸 Screenshots

*Add screenshots of dashboard, student module, and course module here*

---

## ⚠️ Limitations

* No authentication/login system
* Basic UI design
* Limited validation and security
* No role-based access control

---

## 🔮 Future Enhancements

* 🔐 User Authentication (Login/Register)
* 👥 Role-Based Access (Admin/Staff/Student)
* 📊 Analytics Dashboard
* 📅 Attendance Tracking
* 💳 Fee Management System
* 📩 Notification & Alerts

---

## 🤝 Contributing

Contributions are welcome!
Feel free to fork this repository and submit a pull request.

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## 👨‍💻 Author

Developed as a learning project to understand full-stack web development and database management systems.

---

# Study Center Project

Welcome to the Study Center Project! 🎓 This comprehensive college mini project serves as a versatile tool for study centers and libraries. Students can register, post queries, and admins can efficiently address them through the secure admin login.

## Project Structure

- **index.php**: The landing page provides an introduction to the project.
- **reg.php**: Register for study seats with personalized details.
- **admin.php**: Admin login for secure access and management.
- **contact.php**: User complaint pages for query resolution.
- **db.php**: Establishes a connection to the MySQL database.
- **dashboard.php**: View registered entries from reg.php.
- **messages.php**: View user messages and feedback.
- **styles.css**: Style definitions for dashboard.php and messages.php.
- **cover.css**: Styling for the remaining pages.

## Database Setup

Ensure you set up a MySQL database with the following tables:

### Table: registration

```sql
CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time VARCHAR(5) NOT NULL,
    wifi VARCHAR(3) NOT NULL,
    desk_type VARCHAR(10) NOT NULL
);
```

### Table: contact

```sql
CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    comment TEXT NOT NULL
);
```

### Table: login

```sql
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

## Explore and Provide Feedback!

Feel free to explore the Study Center Project and share your thoughts. Your feedback is valuable in enhancing the project. Contact me at tushartripathi2002@gmail.com.

Happy Learning! 🚀

 CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(50),
    password VARCHAR(255) NOT NULL,
    account_type ENUM('User', 'Vendor') NOT NULL
);

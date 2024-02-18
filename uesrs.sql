CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    registration_year INT NOT NULL,
    registration_days INT NOT NULL,
    registration_age TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    password VARCHAR(255) NOT NULL,
    gold INT NOT NULL DEFAULT 0,
    email VARCHAR(255) NOT NULL UNIQUE,
    strength INT NOT NULL,
    agility INT NOT NULL,
    critical_damage FLOAT NOT NULL
);

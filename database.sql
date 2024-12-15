-- Create the database (if not already created)
CREATE DATABASE IF NOT EXISTS crypto_exchange;

-- Use the created database
USE crypto_exchange;

-- Create the 'users' table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Example insert (for testing purposes)
INSERT INTO users (username, password, email) 
VALUES ('testuser', 'hashed_password_here', 'testuser@example.com');

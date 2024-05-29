CREATE DATABASE IF NOT EXISTS questioner;

USE questioner;

CREATE TABLE IF NOT EXISTS survey_responses (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    market VARCHAR(50) NOT NULL,
    business_name VARCHAR(100) NOT NULL,
    owner_name VARCHAR(100) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    operational_challenges TEXT NOT NULL,
    financial_challenges TEXT NOT NULL,
    marketing_challenges TEXT NOT NULL,
    customer_challenges TEXT NOT NULL,
    technological_challenges TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    phonenumber VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE DATABASE ticket_system;

USE ticket_system;

CREATE TABLE queries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    query_id VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    query TEXT NOT NULL,    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

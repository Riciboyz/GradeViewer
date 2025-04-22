CREATE DATABASE grades_sistema;


USE grades_sistema;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    roles ENUM('teacher', 'student') DEFAULT 'student' NOT NULL,
    password TEXT NOT NULL
);



 

INSERT INTO users (name, email, roles, password) VALUES
('teacher', 'teacher@example.com', 'teacher', 'teacher'),
('student', 'student@example.com', 'student', 'student');






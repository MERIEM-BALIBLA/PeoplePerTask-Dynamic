-- DROP DATABASE data_crud;
CREATE DATABASE if NOT exists data_crud;
USE data_crud;

CREATE TABLE IF NOT EXISTS ROLES (
    role_ID INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(100)
);

INSERT INTO ROLES (role)
VALUES 
    ('Admin'),
    ('Client'),
    ('Freelancer');

CREATE TABLE IF NOT EXISTS User (
    User_ID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    lname VARCHAR(100),
    Email_Adress VARCHAR(200),
    pass_word VARCHAR(100),
    role_ID INT,
    FOREIGN KEY (role_ID) REFERENCES ROLES(role_ID)
    ON UPDATE CASCADE ON DELETE CASCADE  
);


CREATE TABLE IF NOT EXISTS freelencer (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    nick_name VARCHAR(100),
    skil VARCHAR(200),
    User_ID INT,
    FOREIGN KEY (User_ID) REFERENCES User(User_ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Categories (
    Categorie_ID INT PRIMARY KEY AUTO_INCREMENT,
    Categorie_Name VARCHAR(100),
    description VARCHAR(225)
);

INSERT INTO Categories (Categorie_Name, description) 
VALUES 
('mechanic', 'Mechanics is a branch of physics that deals with the study of motion, forces, and the behavior of physical systems.'),
('Electricity', 'Electricity is a form of energy resulting from the existence of charged particles (such as electrons or protons).'),
('automatic', 'Automatic systems refer to mechanisms or processes that operate with minimal human intervention.');


CREATE TABLE IF NOT EXISTS project (
    Project_ID INT PRIMARY KEY AUTO_INCREMENT,
    Project_title VARCHAR(100),
    Descriptions VARCHAR(225),
    User_ID INT,
    FOREIGN KEY (User_ID) REFERENCES User(User_ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    Categorie_ID INT,
    FOREIGN KEY (Categorie_ID) REFERENCES Categories(Categorie_ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS offers (
    offer_ID INT PRIMARY KEY AUTO_INCREMENT,
    offer_title VARCHAR(100),
    Descriptions VARCHAR(225),
    User_ID INT,
    FOREIGN KEY (User_ID) REFERENCES User(User_ID)
    ON UPDATE CASCADE ON DELETE CASCADE,
    Categorie_ID INT,
    FOREIGN KEY (Categorie_ID) REFERENCES Categories(Categorie_ID)
    ON UPDATE CASCADE ON DELETE CASCADE
    -- Project_ID INT,
    -- FOREIGN KEY (Project_ID) REFERENCES project(Project_ID)
    -- ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Job (
    price FLOAT,
    deadline DATE,
    message VARCHAR(225),
    status ENUM,
    Project_ID INT,
    FOREIGN KEY (Project_ID) REFERENCES project(Project_ID)
    ON UPDATE CASCADE ON DELETE CASCADE
);
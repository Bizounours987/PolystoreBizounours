CREATE TABLE IF NOT EXISTS User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS Order (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date DATE,
    status INT,
    idUser INT
);

CREATE TABLE IF NOT EXISTS Store (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    registrationNumber VARCHAR(50),
    idUser INT
);

CREATE TABLE IF NOT EXISTS Category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(50),
    idCategory INT
);

CREATE TABLE IF NOT EXISTS Product (
    id INT PRIMARY KEY AUTO_INCREMENT,
    reference VARCHAR(50),
    label VARCHAR(50),
    unitPrice FLOAT,
    idStore INT
);

CREATE TABLE IF NOT EXISTS Categorized (
    idProduct INT,
    idCategory INT,
    PRIMARY KEY(idProduct,idCategory)
);

CREATE TABLE IF NOT EXISTS OrderLine (
    idOrder INT,
    idProduct INT,
    quantity INT,
    unitPrice FLOAT,
    PRIMARY KEY(idOrder,idProduct)
);

ALTER TABLE Order ADD FOREIGN KEY (idUser) REFERENCES User(id);

ALTER TABLE Store ADD FOREIGN KEY (idUser) REFERENCES User(id);

ALTER TABLE Category ADD FOREIGN KEY (idCategory) REFERENCES Category(id);

ALTER TABLE Product ADD FOREIGN KEY (idStore) REFERENCES Store(id);

ALTER TABLE Categorized ADD FOREIGN KEY (idProduct) REFERENCES Product(id);

ALTER TABLE Categorized ADD FOREIGN KEY (idCategory) REFERENCES Category(id);

ALTER TABLE OrderLine ADD FOREIGN KEY (idOrder) REFERENCES Order(id);

ALTER TABLE OrderLine ADD FOREIGN KEY (idProduct) REFERENCES Product(id);

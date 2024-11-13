CREATE TABLE Auth (id INT AUTO_INCREMENT PRIMARY KEY,
                   email VARCHAR(100) NOT NULL UNIQUE,
                   password VARCHAR(64),
                   idUser INT UNIQUE REFERENCES User(id)
                   );
                   
INSERT INTO User(email, firstname, lastname) VALUES
      ('admin@change.me', 'Administrator', '');
      
INSERT INTO Auth(email, password, idUser) VALUES
      ('admin@change.me', 'admin', (SELECT id FROM User WHERE email = 'admin@change.me'));


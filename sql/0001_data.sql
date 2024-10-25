INSERT INTO User (firstName, lastName, email) VALUES
('Alice', 'Dupont', 'alice.dupont@example.com'),
('Bob', 'Martin', 'bob.martin@example.com'),
('Claire', 'Leroy', 'claire.leroy@example.com');


INSERT INTO Store (name, registrationNumber, idUser) VALUES
('Magasin de jouets', '123456789', 1),
('Librairie ABC', '987654321', 2),
('Épicerie du coin', '456789123', 3);


INSERT INTO Category (label, idCategory) VALUES
('Jouets', 1),
('Livres', 2),
('Alimentation', 3),
('PC', 4), 
('Smartphone', 5);


INSERT INTO Product (reference, label, unitPrice, idStore) VALUES
('TOY001', 'Poupée', 19.99, 1),
('BOOK001', 'Roman A', 9.99, 2),
('FOOD001', 'Pâtes', 2.50, 3);


INSERT INTO Categorized (idProduct, idCategory) VALUES
(1, 1),  -- Poupée appartient à la catégorie Jouets
(2, 2),  -- Roman A appartient à la catégorie Livres
(3, 3);  -- Pâtes appartiennent à la catégorie Alimentation


INSERT INTO Purchase (date, status, idUser) VALUES
('2024-10-01', 1, 1),  -- Commande d'Alice
('2024-10-02', 2, 2),  -- Commande de Bob
('2024-10-03', 1, 3);  -- Commande de Claire


INSERT INTO OrderLine (idPurchase, idProduct, quantity, unitPrice) VALUES
(1, 1, 2, 19.99),  -- 2 Poupées dans la commande d'Alice
(2, 2, 1, 9.99),   -- 1 Roman A dans la commande de Bob
(3, 3, 3, 2.50);   -- 3 Paquets de Pâtes dans la commande de Claire




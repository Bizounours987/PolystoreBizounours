-- Création du script SQL avec insertion des données fournies

sql_script = """
CREATE TABLE Boutiques (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    commune VARCHAR(255),
    description TEXT
);

INSERT INTO Boutiques (nom, commune, description) VALUES 
('Boutique du Lagoon', 'Papeete', 'Une boutique spécialisée dans les produits locaux et les souvenirs.'),
('Épicerie du Soleil', 'Faaa', 'Une épicerie proposant des produits frais et des spécialités tahitiennes.'),
('Vente de Vagues', 'Punaauia', 'Un magasin de surf et de sports nautiques, idéal pour les amateurs de plage.'),
('Atelier des Îles', 'Moorea', 'Un magasin d’artisanat local où l’on peut trouver des créations traditionnelles.');
"""

-- Sauvegarde du script dans un fichier .sql
-- with open("/mnt/data/boutiques.sql", "w") as file:
--     file.write(sql_script)

--  "/mnt/data/boutiques.sql"  -- Retourner le chemin du fichier généré



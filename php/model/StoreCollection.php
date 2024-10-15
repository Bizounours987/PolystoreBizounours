<?php
namespace model;

class StoreCollection extends Collection {
    
    public function getStores() {
        // Exemple de données de boutiques
        return [
            [
                'name' => 'Boutique du Lagoon',
                'commune' => 'Papeete',
                'description' => 'Une boutique spécialisée dans les produits locaux et les souvenirs.',
                'image' => 'img/boutique_du_lagoon.webp',
            ],
            [
                'name' => 'Épicerie du Soleil',
                'commune' => 'Faaa',
                'description' => 'Une épicerie proposant des produits frais et des spécialités tahitiennes.',
                'image' => 'img/epicerie_du_soleil.webp',
            ],
            // Ajoutez d'autres boutiques ici
        ];
    }
}

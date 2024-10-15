<?php
namespace model;

class StoreCollection extends Collection {
    
    public function getStores() {
        // Exemple de données de boutiques
        return [
           [
               'name' => 'Magasin de jouets',
               'registrationNumber' => '123456789',
               'idUser' => '1',
           ],
           [
            'name' => 'Librairie ABC',
            'registrationNumber' => '987654321',
            'idUser' => '2',
           ],
           // Ajoutez d'autres boutiques ici
           [
            'name' => 'Épicerie du coin',
            'registrationNumber' => '456789123',
            'idUser' => '3',
           ],
        ];
    }
}

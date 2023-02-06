<?php

namespace Models;

use Entity\Annonce;

class AnnonceModel
{
    function getAnnonces()
    {
        $json = file_get_contents('../app/Models/trajets.json');
        $annonces = json_decode($json, true);
        return $annonces;
    }

    function getAnnoncesbd()
    {
        $data = getSettings();
        print_r($data);
        exit;
        $query = 'SELECT * FROM annonces';
        $result = $pdo->query($query);
        $annonce = $result->fetchAll();
        return $annonce;
    }

    function createAnnonces($tab)
    {
        $query = 'INSERT INTO annonces (p, nom, email, contact, adresse) VALUES (:prenom, :nom, :email, :contact, :adresse)';
        $statement = $pdo->prepare($query);
        // Binding des valeurs
        $statement->bindValue(':prenom', $prenom);
        $statement->bindValue(':nom', $nom);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':contact', $contact);
        $statement->bindValue(':adresse', $adresse);
        $statement->execute();
    }

    function editAnnonces($tab)
    {
        $query = 'INSERT INTO annonces (p, nom, email, contact, adresse) VALUES (:prenom, :nom, :email, :contact, :adresse)';
        $statement = $pdo->prepare($query);
        // Binding des valeurs
        $statement->bindValue(':prenom', $prenom);
        $statement->bindValue(':nom', $nom);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':contact', $contact);
        $statement->bindValue(':adresse', $adresse);
        $statement->execute();
    }

    function deleteAnnonces($id)
    {
        $query = 'DELETE FROM annonces WHERE id = :id';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    function showAnnonnces($villedep, $villarr)
    {
        $query = "SELECT id, nom, prenom, email, contact, adresse FROM annonces WHERE villedep LIKE :villedep AND villearr LIKE :villarr";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':villedep', "%" . $_POST['villedep'] . "%", PDO::PARAM_STR);
        $statement->bindValue(':villearr', "%" . $_POST['villearr'] . "%", PDO::PARAM_STR);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
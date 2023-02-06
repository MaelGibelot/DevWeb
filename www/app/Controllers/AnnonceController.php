<?php

namespace Controllers;

use Models\AnnonceModel;
use Util\View;

class AnnonceController
{
    function list()
    {
        $model = new AnnonceModel;
        $anno = $model->getAnnonces();
        // include __DIR__.'/../views/Annonces/list.php';
        $view = new View;
        $view->render("Annonce/list", ["annonces" => $anno]);
    }

    function listbd()
    {
        $model = new AnnonceModel;
        $anno = $model->getAnnoncesbd();
        // include __DIR__.'/../views/Annonces/list.php';
        $view = new View;
        $view->render("Annonce/listbd", ["annonce" => $anno]);
    }

    function create()
    {
        if (isset($_GET['villedep'])) {
            $model = new AnnonceModel;
            $model->createAnnonces($_GET['villedep']);
            header('Location: /Annonce/create');
        } else {
            $view = new View;
            $view->render("Annonce/create");
        }
    }

    function edit()
    {
        if (isset($_GET['villedep'])) {
            $model = new AnnonceModel;
            $model->editAnnonces($_GET['villedep']);
            header('Location: /Annonce/listbd');
        }
    }

    function delete()
    {
        if (isset($_GET['id'])) {
            $model = new AnnonceModel;
            $model->deleteAnnonces($_GET['id']);
            header('Location: Annonce/listbd');
        }
    }
} ?>

<?php
require 'model/selectFlux.php';
require 'model/selectCategory.php';

class fluxController extends controller {

    public function flux(){
    global $twig,$data,$row,$_SESSION,$admin;
    echo $this->twig->render('flux.html.twig',[
            'data' => $data,
            'row' => $row,
            'session' => $_SESSION['idUser'],
            'admin' => $admin
        ]);
    }
}
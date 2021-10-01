<?php

class fluxController extends controller {

    public function flux(){
        global $twig,$data,$row,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('flux.html.twig',[
                    'data' => array_filter($data),
                    'row' => filter_var($row, FILTER_DEFAULT),
                    'session' => $_SESSION['idUser'],
                    'admin' => filter_var($admin, FILTER_DEFAULT)
                ]);
        } else {
            echo $this->twig->render('flux.html.twig',[
                'data' => array_filter($data),
                'row' => filter_var($row, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        }
    }
}
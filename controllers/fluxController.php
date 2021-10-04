<?php

class fluxController extends controller {

    public function flux(){
        global $twig,$data,$row,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('flux.html.twig',[
                    'data' => array_filter($data),
                    'row' => filter_var($row, FILTER_DEFAULT),
                    'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                    'admin' => filter_var($admin, FILTER_DEFAULT)
                ]));
        } else {
            print_r ( $this->twig->render('flux.html.twig',[
                'data' => array_filter($data),
                'row' => filter_var($row, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        }
    }
}
<?php

class fluxController extends controller {

    public function flux(){
        global $twig,$data,$row,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('flux.html.twig',[
                    'data' => $data,
                    'row' => $row,
                    'session' => $_SESSION['idUser'],
                    'admin' => $admin
                ]);
        } else {
            return $this->twig->render('flux.html.twig',[
                'data' => $data,
                'row' => $row,
                'admin' => $admin
            ]);
        }
    }
}
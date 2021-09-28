<?php

class fluxController extends controller {

    public function flux(){
        global $twig,$data,$row,$_SESSION,$admin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('flux.html.twig',[
                    'data' => $data,
                    'row' => $row,
                    'session' => $_SESSION['idUser'],
                    'admin' => $admin
                ]);
        } else {
            echo $this->twig->render('flux.html.twig',[
                'data' => $data,
                'row' => $row,
                'admin' => $admin
            ]);
        }
    }
}
<?php

class adminController extends controller {

    public function admin(){
        global $twig,$_SESSION,$admin,$dataCommentAdmin,$rowCommentAdmin;
        if(isset($_SESSION['idUser'])){
            return $this->twig->render('admin.html.twig',[
                'session' => $_SESSION['idUser'],
                'dataComment' => $dataCommentAdmin,
                'rowComment' => $rowCommentAdmin,
                'admin' => $admin
            ]);
        } else {
            return $this->twig->render('index.html.twig');
        }
    }
}
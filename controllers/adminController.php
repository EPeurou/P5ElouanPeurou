<?php

class adminController extends controller {

    public function admin(){
        global $twig,$_SESSION,$admin,$dataCommentAdmin,$rowCommentAdmin;
        if(isset($_SESSION['idUser'])){
            echo $this->twig->render('admin.html.twig',[
                'session' => $_SESSION['idUser'],
                'dataComment' => array_filter($dataCommentAdmin),
                'rowComment' => filter_var($rowCommentAdmin, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]);
        } else {
            echo $this->twig->render('index.html.twig');
        }
    }
}
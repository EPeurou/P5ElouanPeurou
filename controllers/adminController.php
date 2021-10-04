<?php

class adminController extends controller {

    public function admin(){
        global $_SESSION,$admin,$dataCommentAdmin,$rowCommentAdmin;
        if(isset($_SESSION['idUser'])){
            print_r ($this->twig->render('admin.html.twig',[
                'session' => filter_var($_SESSION['idUser'], FILTER_DEFAULT),
                'dataComment' => array_filter($dataCommentAdmin),
                'rowComment' => filter_var($rowCommentAdmin, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}
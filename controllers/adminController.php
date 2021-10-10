<?php

class adminController extends controller {

    public function admin(){
        $idUser = session::get('idUser');
        global $admin,$dataCommentAdmin,$rowCommentAdmin;
        if($idUser != null){
            print_r ($this->twig->render('admin.html.twig',[
                'session' => filter_var($idUser, FILTER_DEFAULT),
                'dataComment' => array_filter($dataCommentAdmin),
                'rowComment' => filter_var($rowCommentAdmin, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}
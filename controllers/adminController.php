<?php

class adminController extends controller {

    public function admin(){
        global $id,$admin,$dataCommentAdmin,$rowCommentAdmin;
        if(isset($id)){
            print_r ($this->twig->render('admin.html.twig',[
                'session' => filter_var($id, FILTER_DEFAULT),
                'dataComment' => array_filter($dataCommentAdmin),
                'rowComment' => filter_var($rowCommentAdmin, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}
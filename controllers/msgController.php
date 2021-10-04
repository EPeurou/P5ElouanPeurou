<?php

class msgController extends controller {

    public function confirm(){
        global $id,$admin;
        if(isset($id)){
            print_r ( $this->twig->render('confirm.html.twig',[
                'session' => filter_var($id, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ( $this->twig->render('index.html.twig'));
        }
    }

    public function error(){
        global $id,$admin;
        if(isset($id)){
            print_r ($this->twig->render('error.html.twig',[
                'session' => filter_var($id, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('error.html.twig',[
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        }
    }

    public function confirmComment(){
        global $id,$admin;
        if(isset($id)){
            print_r ($this->twig->render('confirmComment.html.twig',[
                'session' => filter_var($id, FILTER_DEFAULT),
                'admin' => filter_var($admin, FILTER_DEFAULT)
            ]));
        } else {
            print_r ($this->twig->render('index.html.twig'));
        }
    }
}
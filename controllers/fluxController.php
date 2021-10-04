<?php

class fluxController extends controller {

    public function flux(){
        global $data,$row,$id,$admin;
        if(isset($id)){
            print_r ($this->twig->render('flux.html.twig',[
                    'data' => array_filter($data),
                    'row' => filter_var($row, FILTER_DEFAULT),
                    'session' => filter_var($id, FILTER_DEFAULT),
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
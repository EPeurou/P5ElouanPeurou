<?php

class adminController extends controller {

    public function admin(){
        global $twig,$_SESSION,$admin,$dataCommentAdmin,$rowCommentAdmin;
        echo $this->twig->render('admin.html.twig',[
            'session' => $_SESSION['idUser'],
            'dataComment' => $dataCommentAdmin,
            'rowComment' => $rowCommentAdmin,
            'admin' => $admin
        ]);
    }
}
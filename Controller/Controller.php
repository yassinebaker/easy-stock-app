<?php
        class Controller
        {
            protected $model;

            public function model($model){
                require_once dirname(dirname(__FILE__)).'/Models/'.$model.'.php';
                return new $model();
            }

            public function view($view,$data=[]){
                (file_exists(dirname(dirname(__FILE__)).'/views'.$view.'.php')) ?
                require_once dirname(dirname(__FILE__)).'/views'.$view.'.php' :
                die('Page non trouvée');
            }
        }
?>
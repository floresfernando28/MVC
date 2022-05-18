<?php

    class Views{


        public function getViews($controller, $views){

            $controller = get_class($controller);
            if($controller == 'home'){
                $views = 'Views/'.$views.'.php';
            }else{
                $views = 'Views/'.$controller.'/'.$views.'.php';
            }
            require_once($views);
            // echo $views;

        }
    }

?>
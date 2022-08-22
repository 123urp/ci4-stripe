<?php
class MyClass{
    
    public function before_controller(){ 
        //print_r($_SESSION);
    }

    public function after_controller_constructor(){
        $session = session();
        $users = $session->get('users');
        //print_r($users);
        if(!isset($users)){
            helper(['url']);
            //return redirect('App\Controllers\SigninController::index');
            return redirect()->to('/signin');
        }
        //echo 'asdad'; exit;
    }

    public function before_method(){
      
      //  echo "pre_system running - after complete page load";
    }
}
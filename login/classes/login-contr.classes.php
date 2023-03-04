<?php

class LoginSignupContr extends Signup {

    private $username;
    private $password;


    public function __construct($username, $password, $confirm_password){
        $this->username = $username;
        $this->password = $password;
      
    }
        public function loginUser(){
            if($this->emptyInput()== false){
                header("location: ../index.php?error=emptyinput");
                exit();
            }
           
            $this->getUser($this->username,$this->password);
        }
    

    private function emptyInput(){
        $result;
        if(empty( $this->username) || empty( $this->password) || empty( $this->conifrm_password) ){
            $result= false;
        }
        else{
            $result=true;
        }
        return $result;
    }

   

}
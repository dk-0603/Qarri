<?php

class SignupContr extends Signup {

    private $username;
    private $password;
    private $confirm_password;

    public function __construct($username, $password, $confirm_password){
        $this->username = $username;
        $this->password = $password;
        $this->conifrm_password = $confirm_password;
    }
        public function signupUser(){
            if($this->emptyInput()== false){
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if($this->invalidUsername()== false){
                header("location: ../index.php?error=invalidUSername");
                exit();
            }
            if($this->pwdMatch()== false){
                header("location: ../index.php?error=pwdNotMatch");
                exit();
            }
            if($this->userExist()== false){
                header("location: ../index.php?error=userExists");
                exit();
            }

            $this->setUser($this->username,$this->password);
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

    private function invalidUsername(){
        $result;
        if(preg_match("/^[-zA-Z0-9]*$/", $this->username)){
            return false;
        }
        else{
            return true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result;
        if($this->password !== $this->conifrm_password){
            return false;
        }
        else{
            return true;
        }
        return $result;
    }

    private function userExist(){
        $result;
        if(!$this->checkUser($this->username)){
            return false;
        }
        else{
            return true;
        }
        return $result;
    }


}
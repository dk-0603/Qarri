<?php

class Login extends Dbh{
   
    protected function getUser($uid , $pwd){
        $stmt = $this->connect()->prepare('SELECT * FROM user_data WHERE username = ?;');
        

        if(!$stmt->execute(array($uid,$hashedPwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        $stmt=null;
    }

   
}


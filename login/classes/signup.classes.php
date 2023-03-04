<?php

class Signup extends Dbh{
   
    protected function setUser($uid , $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO user_data (username, password) values (?,?);');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid,$hashedPwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        $stmt=null;
    }

    protected function checkUser($uid){
        $stmt = $this->connect()->prepare('SELECT user_id FROM user_data WHERE  user_id = ?;');
        
        if(!$stmt->execute(array($uid))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");  
            exit();
        }
        $resultCheck;
        if( $stmt-> rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }
}


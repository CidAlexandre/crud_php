<?php

namespace App\Model;

class Users{
    private $name, $email, $password, $id;

    public function login($e, $p){
        $sql = "SELECT * FROM user WHERE email = ?, password = ?";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $e);
        $stmt->bindValue(2, $p);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $data = $stmt->fetchAll(\PDO::FETCH_ALL);
            $_SESSION['login'] = true;
            $_SESSION['id']=$data['id'];
            return true;
        else:
            return false;
        endif;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getId(){
        return $this->id;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($p){
        $this->password = $p;
    }
    public function setId($id){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->id = $id;
    }
    public function setName($n){
        $n = filter_var($n, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->name = $n;
    }

    public function setEmail($e){
        $e = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $e;
    }
}
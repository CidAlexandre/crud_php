<?php
namespace App\Model;
class UsersDao{
    public function createUser(User $u){
        $sql = "INSERT INTO user (name, email, password) VALUES (?,?,?)";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $u->getName());
        $stmt->bindValue(2, $u->getEmail());
        $stmt->bindValue(3, $u->getPassword());

        $stmt->execute();
    }

    public function readUser(User $u){
        $sql = "SELECT * FROM user";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;
    }

    public function updateUser(User $u){

        $sql = "UPDATE user SET name=?, email=?, password=? WHERE id=?";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(4, $u->getid());
        $stmt->bindValue(1, $u->getName());
        $stmt->bindValue(2, $u->getEmail());
        $stmt->bindValue(3, $u->getPassword());

        $stmt->execute();

    }

    public function deleteUser(User $u){
        $sql = "DELETE FROM user WHERE id=?";

        $stmt =Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $u->getId());
        $stmt->execute();

    }
}
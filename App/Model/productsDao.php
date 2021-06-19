<?php
namespace App\Model;

class ProductsDao{
    public function createProduct(Products $p){
        $sql ="INSERT INTO produtos (name, description) VALUES (?,?)";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p->getName());
        $stmt->bindValue(2, $p->getDescription());
        $stmt->execute();
    }

    public function updateProduct($pID, $pN, $pD){

        $sql = "UPDATE produtos SET name=?, description=? WHERE id= ?";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $pN);
        $stmt->bindValue(2, $pD());
        $stmt->bindValue(3, $pID());
        
        $stmt->execute();
    }

    public function readProduct(){
        $sql = "SELECT * FROM produtos";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;
    }

    public function deleteProduct($p){
        $sql = "DELETE FROM produtos WHERE id=?";

        $stmt = Connect::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p);

        $stmt->execute();
    }
}
<?php
    require_once 'vendor/autoload.php';    

    $pd = new App\Model\ProductsDao();
    $p = new App\Model\Products();
    
      if(isset($_POST['btn-send'])):
          $p->setName($_POST['name']);
          $p->setDescription($_POST['description']);
    
          $pd->createProduct($p);
      endif;

      if(isset($_POST['delete'])):
        $num=(int)$_POST['delete'];
        $pd->deleteProduct($num);       
      endif;


      if(isset($_POST['update'])):
        $num =(int)$_POST['update'];
            if(isset($_post['btn-update'])):
                $pN($_POST['name2']);
                $pD($_POST['description2']);
                $pId($GLOBALS["num"]);
        //echo "$pID, $pN, $pD";

            $pd->updateProduct($pId, $pN, $pD);
        endif;
    endif;
      
    ?>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>Adicionar Produtos</title>
    </head>
    <body>
    <h1>Cadastro de Produto</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Nome: <input type = "text" name = "name"><br>
        Descrição: <input type = "text" name = "description"><br>
        <button type="submit" name="btn-send">Cadastrar</button>
    </form>

    <form action='' method='POST'>
        Nome: <input type = 'text' name2 = 'name'><br>
        Descrição: <input type = 'text' name = 'description2'><br>
        <button type='submit' name='btn-update'>Alterar</button>
        </form>
    </body>
    </html>

<?php
    echo"<form action='' method='post'>";
    foreach($pd->readProduct() as $p):
        echo "<tr>";
            echo "<td>" . $p['name'] . "</td> - ";
            echo "<td>" . $p['description'] . "</td> - ";
            echo '<td><button type="submit" name="update" value="'.$p['id'].'"> Update </button></td> ';
            echo '<td><button type="submit" name="delete" value="'.$p['id'].'"> Delete </button></td>';
            
         echo "</tr><br>";
    endforeach;
    echo "</form>";
?>

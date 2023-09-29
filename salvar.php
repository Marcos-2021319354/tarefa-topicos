<?php 
    include_once ("conecta.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Skin</title>
</head>
<body>
    <?php
    if (isset($_POST["nome_skin"])) {
    

        var_dump($_FILES);
        $nome_skin = $_POST["nome_skin"];
        $preco_skin = $_POST["preco_skin"];
        //$imagem_skin = $_POST["imagem_skin"];
        $float_skin = $_POST["float_skin"];

        $sql = "INSERT INTO skin(nome_skin,preco_skin,imagem_skin,float_skin) VALUES(:nome_skin, :preco_skin,:imagem_skin, :float_skin)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nome_skin", $nome_skin, PDO::PARAM_STR);
        $stmt->bindParam(":preco_skin", $preco_skin, PDO::PARAM_STR);
        $stmt->bindParam(":imagem_skin", $imagem_skin, PDO::PARAM_STR);
        $stmt->bindParam(":float_skin", $float_skin, PDO::PARAM_STR);
        $stmt->execute();

    }
    ?>


    <h2>Adicionar Skin</h2>
    <form method="post" enctype='multipart/form-data'>
        Nome da Skin: <input type="text" name="nome_skin" required><br>
        Preço da Skin: <input type="text" name="preco_skin"><br>
        Imagem da Skin: <input type="file" name="imagem_skin"><br>
        Float da Skin: <input type="text" name="float_skin"><br>
        <input type="submit" value="Adicionar Skin">
    </form>
</body>
</html>















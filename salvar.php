
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Skin</title>
</head>
<body>
    <?php
    
    include_once ("conecta.php");


    if (isset($_POST["nome_skin"])) {
    

        $nome_skin = $_POST["nome_skin"];
        $preco_skin = $_POST["preco_skin"];
        $imagem_skin = $_POST["imagem_skin"];
        $float_skin = $_POST["float_skin"];


    
        $sql = "INSERT INTO skin (nome_skin, preco_skin, imagem_skin, float_skin) VALUES ('$nome_skin', $preco_skin, '$imagem_skin', '$float_skin')";
        //var_dump($sql);die;



        
        if ($smt->execute()) {
            header('location: index.php');
        } else {
            echo "Erro ao adicionar a skin: " . $smt->error;
        }


        
        $smt->close();
        $conexao->close();
    }
    ?>


    <h2>Adicionar Skin</h2>
    <form method="post">
        Nome da Skin: <input type="text" name="nome_skin" required><br>
        Preço da Skin: <input type="text" name="preco_skin"><br>
        Imagem da Skin: <input type="file" name="imagem_skin"><br>
        Float da Skin: <input type="text" name="float_skin"><br>
        <input type="submit" value="Adicionar Skin">
    </form>
</body>
</html>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker | Italo Alves Rabelo</title>
    <link rel="stylesheet" href="vendor/boostrap/css/bootstrap.min.css" />
</head>
<body>
    <?php
      $result = file_get_contents("http://node-conteiner:9001/produtos");
      $produtos = json_decode($result);
    ?>

    <div class="container">
        <table class="table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                    <tr>
                        <td><?php echo $produto->nome; ?></td>
                        <td><?php echo $produto->preco; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        
</body>
</html>
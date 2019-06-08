<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('../../view/head.php');
    ?>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
</head>

<body>
    <?php
    require_once('../../view/nav.php');
    ?>
    <div class="container">
        <div class="row justify-content-center bg-light">
            <form id="form_noticia" enctype="multipart/form-data" action="" method="post">
                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Digite um titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="texto">Texto:</label>
                    <textarea name="editor1" id="editor1" required></textarea>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem:</label>
                    <input type="file" name="imagem" accept="image/*" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="salvar" value="salvar">Salvar</button>
                </div>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
            </form>
        </div>
    </div>
</body>

</html>
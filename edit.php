<?php
    //Conexão
    include_once 'crud_action/db_connect.php';
    //header
    include_once 'includes/header.php';
    //Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT *FROM clientes WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($result);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3 granizo">
        <h3 class="light"> Editar Clientes </h3>
        
        <form action="crud_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['Sobrenome'] ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'] ?>">
                <label for="email">email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" class="btn green"> Lista de Clientes</a>
        </form>
    </div>
</div>

<?php
    //footer
    include_once 'includes/footer.php';
?>



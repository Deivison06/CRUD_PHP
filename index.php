<?php
//Sessão
session_start();
if (isset($_SESSION['mensagem'])) : ?>


    <script>
        window.onload = function() {
            M.toast({
                html: '<?php echo $_SESSION['mensagem']; ?>'
            })
        }
    </script>
<?php
endif;
session_unset();
//conexão
include_once 'crud_action/db_connect.php';
//header
include_once 'includes/header.php';
?>


<div class="row">
    <div class="col s12 m6 push-m3 granizo">
        <h3 class="light">Clientes</h3>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $result = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($result)) :
                ?>
                    <tr>
                        <td><?php echo $dados['id']; ?></td>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['Sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue">
                                <i class="material-icons">edit</i>
                            </a>
                            <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que deseja excluir esse cliente?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="crud_action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-deletar" class="btn red"> sim,
                                        quero deletar </button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="add.php" class="btn">Add Clientes</a>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>
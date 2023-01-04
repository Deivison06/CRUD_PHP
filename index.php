<?php
    //header
    include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3 granizo">
        <h3 class="light">Clientes</h3>
        <table class="striped responsive-table" >
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Deivison</td>
                    <td>Santos</td>
                    <td>deivison@santos.com</td>
                    <td>19</td>
                    <td>
                        <a href="" class="btn-floating blue">
                            <i class="material-icons">edit</i>
                        </a>
                        <a href="" class="btn-floating red">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>
                </tr>
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



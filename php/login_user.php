<?php 

    require_once "./actions/db_connect.php";
    session_start();

    if (isset($_SESSION['id']) && $_SESSION['id'] <> "") {
        include_once "./includes/header.php";

        $id = $_SESSION['id'];

        $sql = "SELECT * FROM posts WHERE usuario = $id;";
        $resultado = mysqli_query($connect, $sql);
        ?>

<!-- Inicio do COnteúdo -->
<main>
    <!-- Inicio do Espaçador -->
    <div class="medium-spacing"></div>
    <!-- Fim do Espaçador -->
    
    <section>
            <div class="container mb-5">
                <div class="row pt-5">
                    <div class="col-md-6">
                        <p class="h3 title-cg">Seja bem-vindo,</p>
                        <p class="h3 mb-5 title-cg">o que deseja fazer?</p>
                        <div class="row">
                            <div class="">
                                <a href="reference.php"><button type="button" class="btn btn-outline-dark p-4 mt-2 ml-2 font-weight-bold">Encontrar <br/>Referencias</button></a>
                            </div>
                            <div class="">
                                <a href="locator.php"><button type="button" class="btn btn-outline-dark p-4 mt-2 ml-2 font-weight-bold ">Localizar <br/>Projetos</button></a>
                            </div>
                            <div class="">
                                <a href="form_user.php"><button type="button" class="btn btn-outline-dark p-4 mt-2 ml-2 font-weight-bold">Instituições e<br/>Programas</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="w-75 ml-5 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/grKVcNV/welcome.png">
                    </div>
                </div>
            </div>

            <div class="container mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-cg"><b></b></p>
                        <p class="text-card-cg"><small></small></p>
                        <p class="h6 text-card-cg">Aqui você pode marcar instituições e programas de tratamento relacionado ao uso de drogas no botão "Instituições e Programas", alem disso você pode visualizar o que postou nesta pagina na tabela abaixo.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped table-hover">
                        <h3 class="h3 text-cg mb-4">Instituições e Programas</h3>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobre</th>
                            <th>Whatsapp</th>
                        </tr>
                        <?php
                        while($row = mysqli_fetch_assoc($resultado)) { 
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['titulo'] ?>
                            </td>
                            <td>
                                <?php echo $row['conteudo'] ?>
                            </td>
                            <td>
                                <?php echo $row['whatsapp'] ?>
                            </td>
                        </tr>
                        <?php 
                        } 
                        ?>
                        </table>
                    </div>
                </div>
            </div>
    </section>

</main>
<!-- Fim do Conteúdo -->

<!-- Inicio do Espaçador -->
<div class="long-spacing"></div>
<!-- Fim do Espaçador -->
 
<?php
    include_once "./includes/footer.php";
    } else {
        header("Location: login.php");
    }
?>
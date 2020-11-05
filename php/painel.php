<?php 

    require_once "./actions/db_connect.php";

    session_start();

    if(isset($_SESSION['id_usuario'])) {
        include_once "./includes/header.html";

        $id_ref = $_SESSION['id_ref'];

        $sql = "SELECT * FROM referencias WHERE autor = $id_ref;";
        $resultado = mysqli_query($connect, $sql);
?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Cargo</th>
                        <th>Sobre</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>youtube</th>
                        <th>site</th>
                    </tr>
                <?php
                    while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id_ref']; ?>
                    </td>
                    <td>
                        <?php echo $row['cargo']; ?>
                    </td>
                    <td>
                        <?php echo $row['sobre']; ?>
                    </td>
                    <td>
                        <?php echo $row['facebook']; ?>
                    </td>
                    <td>
                        <?php echo $row['instagram']; ?>
                    </td>
                    <td>
                        <?php echo $row['youtube']; ?>
                    </td>
                    <td>
                        <?php echo $row['site']; ?>
                    </td>
                </tr>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        </table>
<?php
    include_once "./../public/includes/footer.html";
    } else {
        header("Location login.php");
    }
?>
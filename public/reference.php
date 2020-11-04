<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Referencias - MVP</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <link rel="shortcut icon" href="#" type="image/png">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
    <script src="./scripts/script.js"></script>
</head>
<body class="bg-cg">
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('components/menu.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->

    <!-- Inicio do Espaçador -->
    <div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
    <!-- Fim do Espaçador -->

    <!-- Inicio do COnteúdo -->
    <main>
        <section>
            <div class="container py-5">
            <div class="row py-5">
                    <div class="col-md-6">
                        <p class="display-4 font-weight-bold title-cg">Encontre Pessoas e grupos em São Bernardo do Campo !</p>
                            <div class="justify-content-initial">
                                <p class="text-cg">Encontre depoimentos, palestras, artigos e muito mais de pessoas que já passaram pelo que desafio de largar as drogas.</p>
                            </div>
                    </div>
                    <div class="col-md-6 justify-content-center">
                        <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" src="https://i.ibb.co/K9dyJZg/team.png">
                    </div>
                </div>
            </div>
        </section>
        <?php include('./components/cards.html') ?>
    </main>
    <!-- Fim do Conteúdo -->

    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
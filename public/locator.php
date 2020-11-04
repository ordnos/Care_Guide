<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Localizador - MVP</title>
    <meta name="description" content="MVP Básico de projeto da Recode Pro 2020">
    <meta name="keywords" content="MVP Básico, Recode Pro 2020">
    <meta name="author" content="Squad 9 - SP2">
    <link rel="shortcut icon" href="#" type="image/png">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/9fd7b899ce.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <!-- Inicio do Cabeçalho -->
    <header>
        <?php include('components/menu.html'); ?>
    </header>
    <!-- Fim do Cabeçalho -->

    <!-- Inicio do COnteúdo -->
    <main>
    <section class="bg-menu-cg">
        <div class="container py-5">
        <div class="row py-5">
                <div class="col-md-6">
                    <img class="w-50 mt-5" src="https://i.ibb.co/sgbw33P/map.png">
                </div>
                <div class="col-md-6">
                    <p class="h1 mb-3 mt-5 title-cg-w"><b>Procure por Instituições ou programas de tratamento.</b></p>
                    <p class="text-cg-w">São Bernardo do Campo</p>
                </div>
            </div>
    </div>
    </section>
        <div id="mapid" class="container-fluid"></div>
    </main>
    <!-- Fim do Conteúdo -->

    <!-- Inicio do Rodapé -->
    <footer>
        <?php include('components/footer.html'); ?>
    </footer>
    <!-- Fim do Rodapé -->
    <script src="./scripts/functions.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
    
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
    // Destrói a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: login.php"); exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Livraria Sabe</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Livraria Sabe</span>
                <span class="site-heading-lower">Busque em Nosso Catálogo os Livros Disponíveis</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Livraria Sabe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="principal.php">Principal</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="livros.php">Livros</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="search">
        <div class="form-floating mb-3">
            <form action="#" method="get">
              <input class="form-control" name="pesquisa" id="pesquisa" type="text" placeholder="Pesquisa..."/>
            </form>
</div>
</div>
<?php
@$pesquisa = $_GET['pesquisa'];
@$json = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$pesquisa&key=AIzaSyBllud3lb3S4GXzcIkQHUv2DLmcoZGTPFg");
@$jsonObj = json_decode($json, false);
@$livros = $jsonObj->items;
?>          

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
   <?php
   if(!empty($pesquisa)){

    foreach($livros as $l){
    ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="<?php echo $l->volumeInfo->imageLinks->thumbnail ?>" height="350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><?php echo $l->volumeInfo->title ?></h5>
        </div>
      </div>


    </div>
    <?php }}?>
   </div>
  <!-- /.row -->

</div>
<!-- /.container -->
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Sabe 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

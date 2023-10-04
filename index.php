<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <title>Portifólio</title>
  </head>
  <body>
    
  <style>
    .imgcrud {
      display: flex;
      align: center !important;
      justify-content: center !important;
    }

   
    .navbar {
      background: #428dce;
      color: white;
    }

    a {
      color: white !important;
    }
    
    .nav-link:hover {
      font-size: 16.5px;
      color: #ebeff2 !important;
      
    }

  </style>

    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="">Cadastros</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=novo">Novo usuário</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=listar">Relatório de usuários</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=cadastrarproduto" style="color:#428dce!important">Cadastrar</a>
          <a class="dropdown-item" href="?page=produtolistar" style="color:#428dce!important">Listar Produtos</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Em breve</a>
      </li>
    </ul>
</nav>

    

      <div class="container"> 
        <div class="row">
          <div class="col mt-5 mx-auto">

        <?php

          include ("config.php");
          /*  echo '->'.@$_REQUEST["page"]; */
        
          switch(@$_REQUEST["page"]) {
            case "novo":
              include ("cadastrar-usuario.php");
            break;
            case "listar":
              include ("listar-usuario.php");
            break;
            case "salvar":
              include ("salvar-usuario.php");
            break;
            case "editar":
              include ("editar-usuario.php");
            break;


            /*CADASTRO DE PRODUTO */

            case "cadastrarproduto":
              include ("cadastrar-produto.php");
            break;
            case "produtolistar":
              include ("listar-produto.php");
            break;
            case "salvarproduto":
              include ("salvar-produto.php");
            break;
            case "editarproduto":
              include ("editar-produto.php");
            break;
            /* Condição padrão */
            default:
            print "<h3 align='middle'>Portifólio Crud</h3>";
            print "<div class='imgcrud'>";
            print "<img src='crud.jpg' class='img-fluid' alt='Responsive image' height='700' width='900' class='rounded mx-auto d-block'>";
            print "</div>";

        }
        ?>
        
      </div>  

      </div>

      <div class="row">
          <div class="col mt-5 mx-auto">
        <p></p>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" align="middle">
         Me siga! 
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
  <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a.998.998 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207Z"/>
  <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/>
</svg>



</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Me siga nas redes sociais!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6><a href="https://br.linkedin.com/in/gabriel-da-costa-rosa-b3194067" target="a_blank" style="color:#428dce!important">Linkedin Gabriel da Costa Rosa</a></h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
  


      
        
      </div>  
  </div>



    <!-- Optional JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
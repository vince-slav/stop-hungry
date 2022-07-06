<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>STOP HUNGRY</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="../assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-login-wall">
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <header class="header-area" style="top: 0px; width: 100%; position: fixed;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="../index.php"><img src="../assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul class="sub-menu">
                            <li><a href="pages/menu.php">Menu</a></li>
                            <li><a href="pages/login.php">Login</a></li>
                            <li><a href="pages/login.php">Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-login mx-auto" style="width: 100%; margin-top: 100px;">
                    <div class="card-header text-center">
                        <h3 class="text-warning text-center">cadastro</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" name="nome" id="nome">
                                </div>
                                <div class="form-group col-3">
                                    <label for="email">E-Mail</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="date">Data nascimento</label>
                                    <input type="text" class="form-control date" name="date" id="date">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="phone">Telefone</label>
                                    <input type="text" class="form-control phone" name="phone" id="phone">
                                </div>
                                <div class="form-group col-3">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control cpf" name="cpf" id="cpf">
                                </div>
                                <div class="form-group col-3">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha">
                                </div>
                                <div class="form-group col-3">
                                    <label for="r-senha">Confirmar senha</label>
                                    <input type="password" class="form-control" name="r-senha" id="r-senha">
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control cep" onchange="searchCep()" name="cep" id="cep">
                                </div>
                                <div class="form-group col-3">
                                    <label for="rua">Rua</label>
                                    <input type="text" class="form-control" name="rua" id="rua">
                                </div>
                                <div class="form-group col-3">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro">
                                </div>
                                <div class="form-group col-3">
                                    <label for="num">Número</label>
                                    <input type="text" class="form-control" name="num" id="num">
                                </div>
                                <div class="form-group col-6">
                                    <label for="comp">Complemento</label>
                                    <input type="text" class="form-control" name="comp" id="comp">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning float-right"><span style="color: #fff;">Cadastrar</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/vendor/owl-carousel.min.js"></script>
    <script src="../assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="../assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.mask.min.js"></script>
    <script>
        $('.cpf').mask('000.000.000-00');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 00000-0000');
        $('.date').mask('00/00/0000');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script>
        function searchCep() {
            var cep = document.querySelector(".cep").value;
            cep = cep.replace("-", "");

            if (cep.length < 8) {
                document.querySelector("#rua").disabled = false;
                document.querySelector("#bairro").disabled = false;
                document.querySelector("#rua").value = "";
                document.querySelector("#bairro").value = "";
            }

            axios.get(`https://viacep.com.br/ws/${cep}/json/`)
                .then((res) => {
                    document.querySelector("#rua").value = res.data.logradouro;
                    document.querySelector("#bairro").value = res.data.bairro;
                    document.querySelector("#rua").disabled = true;
                    document.querySelector("#bairro").disabled = true;
                });
        }
    </script>
</body>

</html>
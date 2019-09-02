<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/ai.png">
	<script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-sacale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Cadastro | Workshop UEG</title>
</head>
<body style="background-color: #353436;">
	<div id="site">
		<div class="container">
			<!--Cadastro-->
			<form action="?" method="POST"> 
                <div class="container">
                    <div class="form-group" id="formulario">
                        <br>
                            <h1 class="titulo">Cadastre-se</h1>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNome">Nome</label>
                                <input type="email" class="form-control" id="inputNome" placeholder="Digite seu nome...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Sobrenome</label>
                                <input type="password" class="form-control" id="inputSobrenome" placeholder="Digite seu sobrenome..">
                            </div>
                        </div>
                        <label for="inputCPF">CPF</label>
                        <input class="form-control" type="text" placeholder="Digite seu CPF" required="true"><br>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" id="inputCidade" placeholder="Digite sua cidade...">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Selecione...</option>
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AM</option>
                                    <option>AP</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MG</option>
                                    <option>MS</option>
                                    <option>MT</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>PR</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>RS</option>
                                    <option>SC</option>
                                    <option>SE</option>
                                    <option>SP</option>
                                    <option>TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCEP">CEP</label>
                                <input type="email" class="form-control" id="inputNome" placeholder="Digite seu CEP...">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLogradouro">Logradouro</label>
                                <input type="password" class="form-control" id="inputLogradouro" placeholder="Digite seu logradouro..">
                            </div>
                        </div>
                        <label for="inputEmail">E-Mail</label>
                        <input class="form-control" type="text" placeholder="Digite seu E-Mail..." required="true"><br>
                        <label for="inputCPF">Senha</label>
                        <input class="form-control" type="text" placeholder="Digite sua Senha..." required="true"><br>
                        <button type="submit" class="btn btn-success form-control"><i class="fas fa-sign-in-alt"> </i> Pronto!</button><br><br>
                        <a class="msg" href="login">Já tenho cadastro.</a>
                    </div>
                </div>
            </form>
			<!--Cadastro-->
		</div>
	</div>
</body>
</html>
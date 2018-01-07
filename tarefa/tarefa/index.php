<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");
?>



<?php
if(usuarioEstaLogado()) {
?>
	<p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Deslogar</a></p>
<?php
} else {
?>
		<div id="form-container">
        <div class="panel" id="form-box">
            <form action="login.php" method="post">
                <h1 class="text-center">Login</h1>

                <div class="form-group">
                    <label class="sr-only" for="login">E-mail</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Entrar" class="btn btn-success form-control">
                </div>


            </form>
        </div>

    </div>
<?php
}
?>

<?php include("rodape.php"); ?>

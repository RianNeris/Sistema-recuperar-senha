<form method="POST">
    <h4>Recuperar Senha</h4>
    <label>Insira o Email cadastrado</label><br>
    <input type="email" name="email" class= "form-control" required><br>
    <code>Insira o Email cadastrado para trocar sua senha</code><br>

    <input type="submit" value="Enviar dados para o email" class="btn btn-primary btn-lg btn-block">
    <input type="hidden" name="env" value="form">
</form>
<?php echo verifica_dados($con); ?> 
<form method="POST">
  <h4>Insira sua nova senha</h4>
  <hr>
    <label>Digite sua senha</label><br>
    <input type="password" name="senha" class="form-control"><br>

    <input type="submit" value="Efetuar alterações" >
    <input type="hidden" name="env" value="upd">
</form>
<?php verifica_rash($con, $_GET['rash']);?>
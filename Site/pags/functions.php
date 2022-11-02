<?php
    function verifica_dados($con){
        if (isset($_POST['env']) && $_POST['env'] == "form"){
        $email = addslashes($_POST['email']);
        $sql = $con->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $get = $sql->get_result();
        $total = $get->num_rows;

        if ($total > 0){
            $dados = $get->fetch_assoc();
            add_dados_recover($con, $email);
            enviar_email($con, $dados['email']);
        }else {

            }
        }
    }

    function add_dados_recover($con, $email){
        $rash = md5(rand());
        $sql = $con->prepare("INSERT INTO recover_solicitation (email, rash) VALUES (?, ?)");
        $sql->bind_param("ss", $email, $rash);
        $sql->execute();

        if($sql->affected_rows > 0 ){
            enviar_email($con, $email);
        }
    }

    function enviar_email($con, $email){
        mail($email, "Sua nova senha", "Minha nova senha é essa...");
    }

    /*function enviar_email($con, $email, $rash){
        $destinatario = $email;

        $subject = "RECUPERAR SENHA";
        $headers = "MIME-version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $message = "<html><head>";
        $message .= "
            <h2>Você solicitou uma nova senha ?</h2>
            <hr>
            <h3>Se sim, aqui está o link para voce recuperar a sua senha</h3>
            <p>Para recuperar sua senha acesse este link: <a href='".sitedir."?pagina=alterar&rash={$rash}'>".sitedir."
                ?pagina=alterar&rash={$rash}</a></p>
            <hr>
            <h5>Não foi você quem solicitou? Se não, ignore este email, porém alguém está tentando alterar seus dados.</h5>
            <hr>
            Atenciosamente, Webjobs.
            ";               
        $message .= "</html></head>";

        if (mail($destinatario, $subject, $message, $headers)){
            echo "<div class='alert alert-success'>Os dados foram enviados para o seu email. Acesse para recuperar</div>";
                }else {
                    echo "<div class='alert alert-danger'>Erro ao enviar</div>";
            }
*/
    function verifica_rash($con, $rash){
        $sql = $con->prepare("SELECT * FROM recover_solicitation WHERE rash = ? AND status = 0");
        $sql->bind_param("s", $_GET['rash']);
        $sql->execute();
        $get = $sql->get_result();
        $total = $get->num_rows;

        if ($total > 0){
            if (isset($_POST['env']) && $_POST['env'] == "upd"){
            $nsenha = addslashes(md5($_POST['senha']));

            $dados = $get->fetch_assoc();
            atualiza_senha($con, $dados['email'], $nsenha);
            deleta_rashs($con, $dados['email']);
            echo "<div class='alert alert-success'>Senha alterada com sucesso.</div>";
            redireciona("?pagina=inicio");
            }
        }else{
            echo "<br><div class='alert alert-danger'>Rash Inválida</div>";   
        }
    } 

    function atualiza_senha($con,$email,$senha){
        $sql = $con->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $sql->bind_param("s", $senha, $email); 
        $sql->execute();

        if ($sql->affected_rows > 0){
            return true;
            }else {
                return false;
        }

    }

    function deleta_rashs($con,$email){
        $sql = $con->prepare("DELETE FROM recover_solicitation WHERE email = ?");
        $sql->bind_param("s", $email); 
        $sql->execute();

        if ($sql->affected_rows > 0){
            return true;
            }else {
                return false;
            }
        }
        
    function redireciona($dir){
        echo "<meta http-equiv='refresh' content='3; url={$dir}'>";
        }
    
?>
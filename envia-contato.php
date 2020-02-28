<?php
session_start();
// Inclui o arquivo class.phpmailer.php localizado na pasta class
include_once("phpmailer/class.phpmailer.php");

    if(isset($_POST['agende'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $especialidade = $_POST['especialidade'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $mensagem = $_POST['mensagem']; 

        

        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);

        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        
        try {
            $mail->Host = 'smtp.ericarades.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
            $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
            $mail->Port       = 587; //  Usar 587 porta SMTP
            $mail->Username = 'site@ericarades.com.br'; // Usuário do servidor SMTP (endereço de email)
            $mail->Password = 'Envia#@1820'; // Senha do servidor SMTP (senha do email usado)
        
        
             //Define os destinatário(s)
            //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->AddAddress('felipe@plyn.com.br', 'Clica Rades'); // felipe@plyn.com.br
            
            //Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
            $mail->SetFrom('site@ericarades.com.br', $_POST["nome"]); //Seu e-mail
            $mail->AddReplyTo($_POST["email"]); //Seu e-mail
            $mail->Subject = 'Agendamento pelo site - Clinica Rades';//Assunto do e-mail
           
        
            //Campos abaixo são opcionais 
            //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
            //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
            //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
        
        
            //Define o corpo do email
            $mail->MsgHTML("<table width='510'  cellpadding='1' cellspacing='1'>
            <tr>
            <td>
            <tr>
            <td width='500'>Nome: <b>$nome</b></td>
            </tr>
            <tr>
            <td width='320'>E-mail: <b>$email</b></td>
            </tr>
            <tr>
            <td width='320'>Telefone: <b>$telefone</b></td>
            </tr>
            <tr>
            <tr>
            <td width='320'>Especialidade: <b>$especialidade</b></td>
            </tr>
            <tr>
            <td width='320'>Data: <b>$data</b></td>
            </tr>
            <tr>
            <td width='320'>Horario: <b>$horario</b></td>
            </tr>
            <tr>
            <td width='320'>Mensagem: <b>$mensagem</b></td>
            </tr>
            </td>
            </tr> 
            </table>"); 
        
            ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
            //$mail->MsgHTML(file_get_contents('arquivo.html'));
            $mail->Send();
            $sucess = "Mensagem enviada com sucesso, aguarde nosso retorno!";
            $_SESSION["newsession"]=$sucess;
            header("Location:".$_SERVER['HTTP_REFERER']);
        
            //caso apresente algum erro é apresentado abaixo com essa exceção.
        }catch (phpmailerException $e) {
                $sucess = "Houve um erro no envio, tente novamente!";

                // echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
                $_SESSION["newsession"]=$sucess;
                header("Location:".$_SERVER['HTTP_REFERER']);
        }

    }
    if(isset($_POST['contato'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem']; 

        

        // Inicia a classe PHPMailer
        $mail = new PHPMailer(true);

        // Define os dados do servidor e tipo de conexão
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        
        try {
            $mail->Host = 'smtp.ericarades.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
            $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
            $mail->Port       = 587; //  Usar 587 porta SMTP
            $mail->Username = 'site@ericarades.com.br'; // Usuário do servidor SMTP (endereço de email)
            $mail->Password = 'Envia#@1820'; // Senha do servidor SMTP (senha do email usado)
        
        
             //Define os destinatário(s)
            //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->AddAddress('felipe@plyn.com.br', 'Clica Rades'); // felipe@plyn.com.br
            
            //Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
            $mail->SetFrom('site@ericarades.com.br', $_POST["nome"]); //Seu e-mail
            $mail->AddReplyTo($_POST["email"]); //Seu e-mail
            $mail->Subject = 'Contato pelo site - Clinica Rades';//Assunto do e-mail
           
        
            //Campos abaixo são opcionais 
            //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
            //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
            //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
        
        
            //Define o corpo do email
            $mail->MsgHTML("<table width='510'  cellpadding='1' cellspacing='1'>
            <tr>
            <td>
            <tr>
            <td width='500'>Nome: <b>$nome</b></td>
            </tr>
            <tr>
            <td width='320'>E-mail: <b>$email</b></td>
            </tr>
            <tr>
            <td width='320'>Telefone: <b>$telefone</b></td>
            </tr>
            <tr>
            <tr>
            <td width='320'>Mensagem: <b>$mensagem</b></td>
            </tr>
            </td>
            </tr> 
            </table>"); 
        
            ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
            //$mail->MsgHTML(file_get_contents('arquivo.html'));
            $mail->Send();
            $sucess = "Mensagem enviada com sucesso, aguarde nosso retorno!";
            $_SESSION["newsession"]=$sucess;
            header("Location:".$_SERVER['HTTP_REFERER']);
        
            //caso apresente algum erro é apresentado abaixo com essa exceção.
        }catch (phpmailerException $e) {
                // echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
                $sucess = "Houve um erro no envio, tente novamente!";
                $_SESSION["newsession"]=$sucess;
                header("Location:".$_SERVER['HTTP_REFERER']);
        }

    }


?>
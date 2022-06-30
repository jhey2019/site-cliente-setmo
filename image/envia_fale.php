<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "setmoconsultoria@hotmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = $_REQUEST['assunto'];

 // monta o e-mail na variavel $body

$body = "setmoconsultoria@hotmail.com" . "\n";
$body = $body . "Contratar Serviços / Trabalhe Conosco" . "\n";
$body = $body . "setmoconsultoria@hotmail.com" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "setmoconsultoria@hotmail.com" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");
?>
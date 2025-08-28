
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script  type="text/javascript" src="../script/menu.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <div class="navbar">
      <div class="header-linear-content">
        <h1 class="logo"> AutoPeças <span> Express </span></h1>
        <nav>
          <ul>
            <li><a href="../index.html">Home</a></li>
            
            <li><a href="produtos.html">Produtos</a></li>
            
             <li><a href="login.html">Entrar</a></li>
                
                <li><a href="cadastro.html">Cadastro</a></li>
          </ul>
        </nav>
        <div class="canto">
          <figure class="perfil">
            <a href="pages/perfil.php"><img src="../img/perfil (2).png" alt=""></a>
        </figure>
          <figure class="nav-icon-container">
            <a href="carrinho.html"><img src="../img/carrinho.png" alt=""></a>
          </figure>

          <figure>
            <img onload="menu();" src="../img/menu.png" alt="" class="menu-button">
          </figure>
        </div>
      </div>

    </div>
  </header>


   <h2>perfil</h2> <br>
<main class="Perfil-container">
    <?php
$local_Server= "localhost";
$local_User = "root";
$local_Password = "sebrae@123";
$local_Database = "autopeca";

try{
    $pdo = new PDO("mysql:host=$local_Server;dbname=$local_Database", $local_User, $local_Password);
    $pdo->exec("SET CHARACTER SET utf8");

}
catch(Exception $er){
    echo "Atenção - Erro ao Conectar:  ". $er->getMessage();
    die();
}

$TABLE = "usuarios";

try{
    $sql="SELECT * FROM ".$TABLE.";";
    $ponteiro = $pdo->prepare($sql);
    $ponteiro->execute();
    $resultado = $ponteiro->fetchAll(PDO::FETCH_ASSOC);

        if(count($resultado) >0){
             
           foreach($resultado as $indice => $conteudo){
    echo "
    <div class='foto-perfil'>
        <img src='../img/user.jpeg' alt='Foto de perfil'>
    </div>

    <form>
        <fieldset class='dadosp'>
            <legend>Dados Pessoais</legend>

            <label for='nome'>Nome</label>
            <input type='text' id='nome' name='nome' value='".$conteudo['nome']."'><br><br>

            <label for='sobrenome'>Sobrenome</label>
            <input type='text' id='sobrenome' name='sobrenome' value='".$conteudo['sobrenome']."'><br><br>

            <label for='email'>Email</label>
            <input type='email' id='email' name='email' value='".$conteudo['email']."'><br><br>

            <label for='cpf'>CPF</label>
            <input type='text' id='cpf' name='cpf' value='".$conteudo['cpf']."'><br><br>

            <label for='telefone'>Telefone</label>
            <input type='tel' id='telefone' name='telefone' value='".$conteudo['telefone']."'><br><br>
        </fieldset>

        <fieldset class='ender'>
            <legend>Endereço</legend>

            <label for='cep'>CEP</label>
            <input type='text' id='cep' name='cep' value='".$conteudo['cep']."'><br><br>

            <label for='rua'>Rua</label>
            <input type='text' id='rua' name='rua' value='".$conteudo['rua']."'><br><br>

            <label for='numero'>Número</label>
            <input type='text' id='numero' name='numero' value='".$conteudo['numero']."'><br><br>

            <label for='complemento'>Complemento</label>
            <input type='text' id='complemento' name='complemento' value='".$conteudo['complemento']."'><br><br>

            <label for='bairro'>Bairro</label>
            <input type='text' id='bairro' name='bairro' value='".$conteudo['bairro']."'><br><br>

            <label for='cidade'>Cidade</label>
            <input type='text' id='cidade' name='cidade' value='".$conteudo['cidade']."'><br><br>

            <label for='estado'>Estado (UF)</label>
            <input type='text' id='estado' name='estado' value='".$conteudo['estado']."'><br><br>
        </fieldset>

        <fieldset class='senha'>
            <legend>Senha</legend>

            <label for='senha'>Senha</label>
            <input type='password' id='senha' name='senha' value='".$conteudo['senha']."'><br><br>
        </fieldset>
    </form>
    ";
}

   
   
        };

}
catch(Exception $e){
    echo "atenção- Erro ao consultar: " . $e->getMessage();


};

?>

</main>













            <footer>
          <div class="footer-superior-completa">
              <div class="footer-superior-esquerdo">
                  <h4>Institucional</h4>
                  <ul>
                  <li><a href="sobre.html">Sobre a empresa</a></li>
                  <li><a href="lgpd.html">Política de Privacidade</a></li>
                  <li><a href="">Termos de Uso</a></li>
                  </ul>
              </div>
              <div class="footer-superior-meio">
              <h4>Ajuda</h4>
              <ul>
                  <li><a href="">Fale Conosco/Suporte</a></li>
                  <li><a href="">Trocas e Devoluções</a></li>
                  <li><a href="">Formas de Pagamento</a></li>
                  <li><a href="">Prazo de Entraga</a></li>
              </ul>
              </div>
              <div class="footer-superior-direito">
                  <h4>Contato</h4>
                  <ul class="lista-contato">
                      <li>Telefone:(11) 99999-9999</li>
                      <li>Email: contato@autoexpress.com.br</li>
                      <li>Horario de atendimento: Seg a Sex, das 8h às 18h</li>
                  </ul>
              </div>
          </div>
          <hr/>
          <div class="footer-inferior-completa">
              <div class="footer-inferior-esquerdo">
                  <h4>Meios de pagamento:</h4>
                  <figure class="image-pag">
                      <img src="https://img.icons8.com/color/48/000000/visa.png"
                       alt="Visa" />
                      <img src="https://img.icons8.com/color/48/000000/mastercard.png"  alt="Mastercard" />
                      <img src="https://img.icons8.com/fluency/48/pix.png" alt="Pix" />
  
                  </figure>
              </div>
              <div class="footer-inferior-direito">
                  <h4>Redes Sociais</h4>
                  <div class="espacamento-icone-sociais">
                      <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/facebook.png" alt="Facebook" /></a>
                      <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/instagram-new.png" alt="Instagram" /></a>
                      <a href="#"><img src="https://img.icons8.com/ios-filled/30/ffffff/youtube-play.png" alt="YouTube" /></a>
  
                  </div>
              </div>
          </div>
  
         
      </footer>


</body>
</html>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Espaço Saúde/Denúncia</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/stylef.css'> <!--CSS da página -->
    <link rel="shortcut icon" href="imagens/logoES.png" type="image/x-icon"> <!--Logo na aba-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--CSS o bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet"><!--Fonte da página Título-->
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet"><!--Fonte da página Subtítulo-->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"><!--Fonte da página Texto-->

</head>
<body> 
       <header>
    <nav>
        
        <!-- Menu-->
        <a href="paginainicial1.php">Início</a>
        <a href="paginainicial1.php">Início</a>
            <a href="paginaservicos.php">Doenças e Prevenções</a>
            <a href="registro.php">Denúncias</a>
            <a href="sobrenos.php">Sobre nós</a>
            <a href="login.php">Perfil👤</a>
        </nav>

        <!--Nome do site e slogan -->
          <selection class="textos-header"> 
          <h1 class="fundo-letra">Reclame aqui!</h1>
          <h3 class="fundo-letra2">Sua saúde em primeiro lugar</h3>
          </selection>
           <!--Onda no topo do site-->
           <nav> 
            <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.22,67.61 C149.99,150.00 306.71,-23.17 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
           


<!--Mapa das UBS-->
    <center>
        <br>
        <br>
        <br>
        <article class="contenedor-fa"> 
    <iframe src="https://www.google.com/maps/d/embed?mid=1KQM5-9eq3a8I2X2Khw_fm9h8C0BN0S0&ehbc=2E312F" width="640" height="490"></iframe>
    <div class="contenedor-fc">
    <br>
    <br>
    <h4 style="color:rgb(5,119,196)">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Como realizar denúncia?</h4>
    <br>
    <p> Para realizar uma reclamação, preencha os campos do formulário ao lado, com suas informações.
        Após registrar sua denúncia entraremos contato confirmando que recebemos sua denúncia.</p>
    </div>

    </article>

    <!--Formulário de denúncia-->
    <article class="contenedor-fb"> 
    <section>
     <h2>Contato</h2>
     <form action="https://api.staticforms.xyz/submit"  method="post" >
        <input type="hidden" name="accessKey" value="578e6636-77ad-46e8-b8da-515406b68735">
        <input type="hidden" name="redirectTo" value="enviar" >
     <label >Nome</label>
     <input type="text"  id="inputNome" name="name" placeholder="Digite seu nome" required >
     <label >Email</label>
     <input type="email" id="inputEmail" name="email" placeholder="Digite seu email" required >
     <div >
        <label for="exampleDataList"  class="form-label"> UBS (Zona Norte) </label>
        <input class="form-control" type="text" list="datalista" id="ubs" required placeholder="Selecione aqui">
        <datalist id="datalista">
        <option value="Unidade Básica de Saúde Aquiles Stenghel">
        <option value="Unidade Básica de Saúde Chefe Newton">
        <option value="Unidade Básica de Saúde Parigot de Souza ">
        <option value="Unidade Básica de Saúde Maria Cecília">
        <option value="Unidade Básica de Saúde João Paz">
        <option value="Unidade Básica de Saúde Milton Gavetti">
        <option value="Unidade Básica de Saúde Carnascialli">
        <option value="Unidade Básica de Saúde Vivi Xavier">
        <option value="Unidade Básica de Saúde Padovani/ Vista Bela">
        <option value="Unidade Básica de Saúde Campos Verdes">
        </datalist>
        </div>
        <label >Confirme</label>
     <input type="text"  id="textArea" name="message" placeholder="Digite o nome da ubs selecionada" required >
     <label for="textAreaMensagem" >Mensagem</label>
     <input type="text"  cols="30" rows="10" id="textAreaMensagem" name="message" placeholder="Digite sua mensagem" required maxlength="100" >
    
        <button  href="form.html"  type="submit">Enviar</button></article>
        <div>
        <br>
        <!-- Logo do mensagem no rodapé da página -->
        <center><img src="imagens/mensagem.jpg"mensagem" width="400"></center> 
        </div>

     </form>
    </section>
</header>
    </center>


</body>
</html>
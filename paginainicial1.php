<html>
<head lang="pt-br">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Espaço Saúde</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/csspaginainicial.css'> <!--CSS da página -->
    <link rel="shortcut icon" href="imagens/logoES.png" type="image/x-icon"> <!--Logo na aba-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--CSS o bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet"><!--Fonte da página Título-->
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet"><!--Fonte da página Subtítulo-->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"><!--Fonte da página Texto-->

    </head>
    <body>
            <header>
            <nav> <!-- Menu-->
            <a href="paginainicial1.php">Início</a>
            <a href="paginaservicos.php">Doenças e Prevenções</a>
            <a href="registro.php">Denúncias</a>
            <a href="sobrenos.php">Sobre nós</a>
            <a href="login.php">Perfil👤</a>
            </nav>

            <!--Nome do site e slogan -->
              <selection class="textos-header"> 
              <h1 class="fundo-letra">Espaço da saúde</h1>
              <h3 class="fundo-letra2">Sua saúde em primeiro lugar</h3>
              </selection>

                   <!--Onda no topo do site-->
                   <nav> 
                   <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.22,67.61 C149.99,150.00 306.71,-23.17 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
                  </header>
                  <main><!-- Informações sobre os serviços prestados -->
                  <selection class="contenedor sobre-nosotros">
                  <div class="contenedor-sobre-nosotros">
                  <img src="imagens/saude.webp" alt="" class="imagen-about-us">
                  <div class="contenido-textos">
                  <center><h3 style="color:rgb(5,119,196)">Serviços prestados</h3></center>
                  <br>
                   Informações sobre Covid, Dengue e Postos de Saúde da Zona Norte de Londrina.
                  <br>
                  <br>
                  <br>
                  <div>  
                        <!--Icone de Covid-19 -->                                      
                        <h6 style="color:rgb(115,134,213)" align="left"> 
                          <a href="covidpagina.php">  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-virus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a1 1 0 0 1 1 1v1.402c0 .511.677.693.933.25l.7-1.214a1 1 0 0 1 1.733 1l-.701 1.214c-.256.443.24.939.683.683l1.214-.701a1 1 0 0 1 1 1.732l-1.214.701c-.443.256-.262.933.25.933H15a1 1 0 1 1 0 2h-1.402c-.512 0-.693.677-.25.933l1.214.701a1 1 0 1 1-1 1.732l-1.214-.7c-.443-.257-.939.24-.683.682l.701 1.214a1 1 0 1 1-1.732 1l-.701-1.214c-.256-.443-.933-.262-.933.25V15a1 1 0 1 1-2 0v-1.402c0-.512-.677-.693-.933-.25l-.701 1.214a1 1 0 0 1-1.732-1l.7-1.214c.257-.443-.24-.939-.682-.683l-1.214.701a1 1 0 1 1-1-1.732l1.214-.701c.443-.256.261-.933-.25-.933H1a1 1 0 1 1 0-2h1.402c.511 0 .693-.677.25-.933l-1.214-.701a1 1 0 1 1 1-1.732l1.214.701c.443.256.939-.24.683-.683l-.701-1.214a1 1 0 0 1 1.732-1l.701 1.214c.256.443.933.261.933-.25V1a1 1 0 0 1 1-1Zm2 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm1 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm5-3a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/></a>
                          </svg> Covid-19</h6>
                        <br>
                            <!--Icone de Dengue-->
                            <h6 style="color:rgb(115,134,213)" align="left"> 
                           <a href="denguepagina.php"><img   src="imagens/mosquito.webp"  width="50" height="50" class="dengue"></a>
                            </svg> Dengue</h6>
                            <br>
                                      
                                   <!--Icone de Unidades de Saúde-->
                                   <h6 style="color:rgb(115,134,213)" align="left">
                                    <a href="paginamapa.php"> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16">
                                   <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z"/>
                                   <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>   </a>                 
                                   </svg> Unidades de Saúde</h6>
                                   </div> 
                                   </div>
                                   </div>
                                   <br>
                                   <h2 class="linha"> </h2>
                                   <br>
                                   <center><h3 class="mapai" style="color:rgb(5,119,196)">Mapa Local</h3></center>
                                
                                   <br>
                                   <h2 class="linha"> </h2>
                                   <br>
                        
                                  
                                   <center>
                                   <iframe src="https://www.google.com/maps/d/embed?mid=1KQM5-9eq3a8I2X2Khw_fm9h8C0BN0S0&ehbc=2E312F" width="640" height="480"></iframe>
                                  </center>     
                                   <br>
                                   <h2 class="linha"> </h2>
                                   <br>

                                             <!-- Textos Tratamentos-->  
                                             <article class="contenedor-fa"> 
                                             <h4 style="color:rgb(5,119,196)">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Tratamentos</h4>
                                             <p> Através do tratamento e da prevenção conseguimos ter uma vida saudável e com mais segurança em relação a doenças.</p>
                                             </article>
                                                          <!-- Textos Dengue--> 
                                                          <article class="contet-fb">
                                                          <h4 class="titulo-1" style="color:rgb(5,119,196)">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Dengue</h4>
                                                          <p> Tirando suas duvidas sobre o mosquito e como previnir, com dicas e informações básicas.</p>
                                                          </article>
                                                                                 <!-- Textos Covid-19-->
                                                                                 <article class="contet-fc">
                                                                                 <h4 style="color:rgb(5,119,196)">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Covid-19</h4>
                                                                                 <p>Informação também previne o virús, sabendo quais tipos de sintomas que pode se obter através do contágio.</p>
                                                                                 </article>
<!-- Texto Informação-->
<article class="contet-fd">
<h4 style="color:rgb(5,119,196)">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Informação</h4>
<p>Manter a população informada sobre os serviços disponíveis e fornecer dados sobre a população.</p>
</article>
<br>
<br>
</nav> 

      <!-- Formulário  para denúncia -->
      <br>
      <h3 class="titulo-formulario" style ="color:rgb(5,119,196)"> Reclame aqui !</h3> 
      <br>
      <br>
      <br>
      <br>
      <center>
      <div class="wrap">
        <a href="../PROJETO-FINAL/login.php"><button class="button">Cadastrar ou logar</button></a>
       </div>
       <br>
       <br>
        <!-- Textos cadastro e login-->
        <article class="contet-fc">
          <p>Cadastre-se para ter acesso a página de denúcia e realizar sua reclamação sobre as ubs.
          </p>
          </article>
      </center>
      
                                                                                          <!-- Logo do mensagem no rodapé da página -->
                                               <center><img src="imagens/mensagem.jpg"mensagem" width="400"></center> 
</body>
</html>

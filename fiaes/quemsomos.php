<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Facilitando doação de sangue entre doadores e hospitais.">
  
  <link rel="shortcut icon" href="imagens/sangueQuel.png" type="gota">
  <title>Gotas de Vida</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&family=Lusitana&family=Nunito:wght@300;400&display=swap");
    h2.devida {
      text-indent: 60px;
    }
    a {
      text-decoration: none;
      color: #fff;
       font-family: "Lusitana", sans-serif;
      font-weight: 400;
      font-size: 25px;
      padding: 30px;

    }

    h2 {
  color: white;
  font-family: "Libre Caslon Text", serif;
  font-size: 25px;
  font-weight: 400;
}

    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  border: 0;
  padding: 0;
  border: 0;
  font-family: "Nunito", sans-serif;
  color: #ce6b6b;
}

footer {
  background: #ce6b6b;
  color: white;
}
p {
  font-family: "Lusitana";
  font-size: 40px;
  
}
.visite{
  color: #fff;
}

   .cabecalho {
  background: #ce6b6b;
  display: flex;
  justify-content: space-between;
  padding: 30px 150px;
  font-weight: 600;
}

    .containner {
  width: 100%;
  padding: 50px;
  gap: 10px;
  text-align: center;
}

    .box {
  background: rgba(200, 200, 200, 0.3);
  border-radius: 20px;
  padding: 100px;
  

  
}
    .containner2 {
  width: 100%;
  padding: 60px;
  gap: 10px;
  text-align: center;
  
  
}

    .box2 {
  background: rgba(200, 200, 200, 0.3);
  border-radius: 20px;
  padding: 100px;
  max-width: 100%;
  display: grid;
  grid-template-columns: auto auto auto ;
  row-gap: 50px;
}

.sejadoador {
  font-weight: 900;
  font-size: 70px;
  color: #ce6b6b;
  display: flex;
}
p{
  font-size: 50px;
}


.img_redonda{
  height: 340px;
  height: 340px;
  border-radius: 50%;
  border: 4px solid #ce6b6b;
  padding: 15px;
  
}



.login {
  background: #ce6b6b;
  font-weight: 550;
  font-size: 25px;
  padding: 3px 8px;
  border-radius: 14px;
  border: 3px solid white;
  color: white;
}

footer {
  background: #ce6b6b;
  color: white;
}


  </style>
</head>

<body>
  <header>
    <div class="cabecalho">
      <div class="logo">
        <a href="../fiaes/gotasdevida.php">
          <h2 class="gotas">Gotas <img class="gota" src="imagens/sangueQuel.png" alt="Logo gota"></h2>
          <h2 class="devida">de Vida</h2>
        </a>
      </div>
      <nav class="navegacao">
        <a href="../fiaes/gotasdevida.php">Home</a>
         <a href="php/formulariodoador.php">Doador</a>
        <a href="php/formulariojuridico.php">Empresa</a> 
        
        <a href="php/parceiros.php">Parceiros</a>
        <a href="php/loginbolinha.php"><button class="login">Login</button></a>

      </nav>
    </div>
    

  </header>
  <main>
    <section>

      <div class="containner">
        <div class="box">
          <h1 class="sejadoador">Projeto Integrador:</h1>
          <br><br>
          <p>Somos uma turma do curso de programação full-Stack Do Senac Bahia,
             que se propôs a montar um projeto envolvendo as habilidades adquiridas nas unidades cursadas no período do curso.
             O objetivo do projeto é de facilitar a comunicação entre o banco de sangue e os doadores,
             funcionando com uma base de dados para os bancos de sangue
             e envios de alerta para os doadores registo na cidade de Salvador</p>  
        </div>
      </div>


      <div class="containner2">
        <div class="box2">
        <h1 class="sejadoador">Participantes:</h1>

        <div id="a"> 
        </div>

        <div id="a"> 
        </div>


        <div id="a">
        <img class="img_redonda" src="img/davi.png" alt="">
        <p>Davi Fiaes</p>
        </div>


       <div id="a"> 
        <img class="img_redonda" src="img/felipe.png" alt="">
        <p>Felipe Sales</p>
       </div>


        <div id="a">
          <img class="img_redonda" src="img/luiz.png" alt="">
          <p>Luiz Felipe</p>
        </div>


        <div id="a">
          <img class="img_redonda" src="img/raquel.png" alt="">
          <p>Raquel Comsono</p>
        </div>


        <div id="a">
          <img class="img_redonda" src="img/vitor.png" alt="">
          <p>Vitor Trioschi</p>
        </div>


        <div id="a">
          <img class="img_redonda" src="img/wladimir.png" alt="">
          <p>wladimir Bastos</p>
        </div>


        <div id="a"> 
        </div>

        <div>
        <img class="img_redonda" src="img/jailton.png" alt="">
          <p>jailton Arragão</p>
        </div>
        
        </div>
      </div>

      
      
    </section>
  </main>

<footer>
    <div>
      <a href="">What's Up</a>
      <a href="">Instagram</a>
      <a href="">FaceBook</a>
      <p class="visite">Visite nossas Redes Sociais</p>
    </div>
  </footer> 






  
</body>

</html>
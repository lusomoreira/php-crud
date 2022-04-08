<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Crud</title>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <header>
    <a href="#">MyCRUD</a>
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact Me</a></li>
    </ul>
  </header>

  <main id="main">
    <div class="container">
     <form action="DB/createNewUser.php" method="post">

      <label>Nome: </label>
      <input type="text" name="name" id="name" placeholder="Digite seu nome completo">

      <label>Data de Nascimento: </label>
      <input type="date" name="dtn" id="dtn">

      <label>Email</label>
      <input type="email" name="email" id="email">

      <input type="submit" value="Enviar" name="Enviar">
     </form>
    </div>
  </main>

  <footer>
    <p>@lusomoreira - 2022</p>
  </footer>
</body>
</html>
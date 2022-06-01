<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-color: #318CE7
;">
    <form class="form-signin"  method="POST" action="{{ route('posts.store')}}">
      @csrf
    <h1 style="  font-family: 'Brush Script MT', cursive;
         " class="mt-5 text-5xl text-gray-200">DOCTCITY</h1>     
      <label for="inputEmail" class="sr-only ">Nom</label>
      <input type="text" id="inputEmail" class="form-control items-center" name="nom_name" placeholder="Nom de votre medcin" required autofocus style="width: 30%; margin-left:35%; margin-top:30px;">
      <label for="inputPassword" class="sr-only">Nom Complet</label>
      <input type="text" id="inputPassword" class="form-control" name="nomc_name" placeholder="votre nom complet" required style="width: 30%; margin-left:35%; margin-top:30px;">
      <label for="inputPassword" class="sr-only">Date</label>
      <input type="text" id="inputPassword" class="form-control" name="date_name" placeholder="Reservez votre rendez à voir sur le créneau" required style="width: 30%; margin-left:35%; margin-top:30px;">
      <label for="inputPassword" class="sr-only">votre Email</label>
      <input type="text" id="inputPassword" class="form-control" name="mail_name" placeholder="votre Email" required style="width: 30%; margin-left:35%; margin-top:30px;">
      <label for="inputPassword" class="sr-only">password</label>
      <input type="password" id="inputPassword" class="form-control" name="mdp_name" placeholder="Password" required style="width: 30%; margin-left:35%; margin-top:30px;">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" style="margin-top:30px;"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 30%; margin-left:35%; margin-top:30px;">Envoyer</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>

    <footer>
  <style>
    footer {margin:0;}

.icon-bar {
  border-top: 1px solid gray;
  margin-top: 70px;
  width: 100%;
  overflow: auto;
  justify-content: center;
  align-items: center;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 10px;
  transition: all 0.3s ease;
  color: black;
  font-size: 26px;
  margin-left: 200px;
  text-decoration: none;
  margin-top: 0;
}

.icon-bar a:hover {
  color:blue;
  border-top:2px solid blue;
}

.actives {
}
  </style>
  <div class="icon-bar">
  <a class="actives ml-5" href="{{ route('home')}}"><i class="fa fa-home " ></i><br> Accueil</a> 
  <a href="{{route('posts.create')}}"><i class="fa fa-calendar"></i><br>Rendez-vous</a> 
  <a href="{{route('inscription')}}"><i class="fa fa-user"></i><br>compte</a>
</div>

  </div>
</footer>
  </body>
</html>

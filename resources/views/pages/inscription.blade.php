<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body >

<div style="margin: 200px; margin-left:35%; margin-top:10%;">
    <h1>    <a href="{{route('posts.creates')}}" style="text-decoration: none; border:2px solid blue; border-radius:30px;padding:10px;color:white;
    background-color:#318CE7;">incription Pour Medcin</a></h1> <br> <br>
     <h1>     <a href="{{route('posts.created')}}" style="text-decoration: none; border:2px solid blue; border-radius:30px;padding:10px;color:white;
    background-color:#318CE7;">incription Pour Patient</a></h1>
</div>

<footer>
  <style>
    footer {margin:0;}

.icon-bar {
  border-top: 1px solid gray;
  margin-top: 30%;
  width: 100%;
  overflow: auto;
  justify-content: center;
  align-items: center;
  background-color: #318CE7;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 10px;
  transition: all 0.3s ease;
  color: black;
  font-size: 26px;
  margin-left: 100px;
  text-decoration: none;
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
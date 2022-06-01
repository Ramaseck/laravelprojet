



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<style>
  .carousel-inner img {
    width: 30%;
    height: 30%;
    margin-left: 35%;
  }
  .selector-for-some-widget {
  box-sizing: content-box;
}
</style>
<body > 


 
    <div class=" flex flex-col justify-between min-h-screen  ">
    
    <main role="main" class="flex flex-col  items-center bg-blue-600 "  >
    @yield('content')
    </main>
    <section class="flex flex-col  items-center ">
    @if(!Route:: is ('about','posts.create','posts.creates' ,'posts.created','inscription'))

        <h3 class="mt-5 text-5xl"><b>Doctcity :</b></h3>
        <h3 class="mt-2 text-5xl"><b>Au Service de votre Santé</b></h3>


        <img src="{{ asset('/image/docs.jpeg')}} " style="height:10%; width:40%; padding:-100%;">
         <h2 classs="text-5xl"> Accédez <b>rapidement</b> aux disponiblité de tous vos professionnels de santé</h2>
         <img src="{{ asset('/image/doc.jpeg')}} " class="mt-5" style="height:10%; width:40%; padding:-100%;">
         <h2 classs="text-5xl">  Prenez des decisions <b>éclairée</b> et adaptés à vos besoins de santé</h2>
         <img src="{{ asset('/image/appli.jpeg')}} " class="mt-5" style="height:10%; width:40%; padding:-100%;">
         <h2 classs="text-5xl"> Gérez vos  <b>rendez-vous</b> et <b>documents</b>de santé ainsi que ceux de vos proches sur une même apllication </h2>
         <h3 class="mt-5 text-5xl text-gray-500"><b>Doctcity c'est :</b></h3>
         <h2 class="mt-5 text-gray-700 text-3xl">60 mille</h2>
         <p>de patient</p>
         <h2 class="mt-5 text-gray-700 text-3xl">40 mille</h2>
         <p>personnels de santé</p>
         <h2 class="mt-5 text-gray-700 text-3xl"> 20%</h2>
         <p>d'avis positifs</p>
       @endif
        </section>
   

    <!--/*{{Config('database.connections.sqlite.driver')}}
    {{Config('project.slogan')}}*/-->
    
    <!--<footer>

<p class="text-gray-400">&copy; copyright{{date('Y')}} 

    &middot;
    @if(!Route:: is ('about','index'))
    <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About-Us</a></p>
    @endif
</footer>-->
<footer>
  <style>
    footer {margin:0;}

.icon-bar {
  border-top: 1px solid gray;
  margin-top: 30px;
  width: 115%;
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
  margin-left:60px;
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
  <a class="actives ml-4" href="{{ route('home')}}"><i class="fa fa-home " ></i><br> Accueil</a> 
  <a href="{{route('posts.create')}}"><i class="fa fa-calendar"></i><br>Rendez-vous</a> 
  <a href="{{route('inscription')}}"><i class="fa fa-user"></i><br>compte</a>
</div>

  </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

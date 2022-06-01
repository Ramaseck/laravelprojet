@extends('base')

@section('content')
<h1 style="  font-family: 'Brush Script MT', cursive;
" class="mt-5 text-5xl text-gray-200">DOCTCITY</h1>


<form action="/action_page.php">

<select class="form-select mt-5  bg-blue-600 text-gray-100"  style="margin-right:90%"aria-label="Default select example" name="select">
 
<option selected><a href="#"><i class="fa fa-globe"></i></a>
</option>
  <option value="1"><i class="fa fa-globe"></i>Saintloui</option>
  <option value="2">Dakar</option>
  <option value="3">Matam</option>
</select>

<div id="demo" class="carousel slide" data-ride="carousel">
  <h2 class="mt-20 ml-56 sm-lg text-5xl text-gray-100" style="margin-left: 25%;"> PRENEZ RENDEZ-VOUS AVEC </h2>
   <h2 class=" mt-3 ml-56 mb-5 items-center sm-2xl text-5xl text-gray-100" style="margin-left: 40%;">UN MEDCIN</h2>

    
<a href="{{route('index')}}" class="px-10  py-50   bg-gray-100 ml-56 text-gray-700" style="margin-top:100%;margin-left:40% ; border:1px solid white; text-decoration:none "  > 
Voici le créneau horeire</a>     
      <button type="submit" value><i class="fa fa-search"></i></button>
    </form>

  <!-- Indicators 
  <ul class="carousel-indicators mt-5">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>-->
  
  <!-- The slideshow -->
  <style>
  img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
}
  </style>
 <div class="cont ml-5" style="display: flex; ">
 <div class="img mt-10 mb-10 mr-5 " style="display:flex;  background:blue">
   <img src="{{ asset('/image/noir.png')}}" alt="">
   <p style="color: white; margin-left:10px"> Partager vos ordonnances en pharmacie avec Doctcity <br> pour obtenir simplement vos medicaments  <br></p>
 </div></marque>
 <div class="img mt-10 mb-10 ml-5" style="display:flex;   background:blue">
   <img src="{{ asset('/image/noir.png')}}" alt="">
   <p style="color: white; margin-left:10px">Consultation en ligne: un accés rapide <br> à votre médcin pour reservé votre rendez-vous </p>
 </div>
 </div> 
  <!-- Left and right controls 
  <div style="margin-top:20%;">
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon "></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>-->
</div>
</div>
@endsection

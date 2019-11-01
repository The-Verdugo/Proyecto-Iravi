{{------------------------Carrusel---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" href="{{ url('comprasRealizadas')}}">Compras realizadas</a>
      <a class="nav-link"  href="{{ url('perfilUsuario')}}">Mi perfil</a>
      <a class="nav-link"  href="{{ url('historia')}}">Acerca de Iravi</a>
    </div>
</div>
<div class="col-md-10">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 300px;">
    <div class="carousel-item active">
       <div class="container">
      <img class="d-block w-100" src="images/bannerDulces.png" alt="First slide">
       </div>
    </div>
    <div class="carousel-item">
       <div class="container">
      <img class="d-block w-100" src="images/banner1.png" alt="Second slide">
       </div>
    </div>
    <div class="carousel-item">
      <div class="container">
      <img class="d-block w-100" src="images/banner2.png" alt="Third slide">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
<div class="container-fluid">
  <hr>
</div>
{{------------------------Fin del carrusel---------------------------}}
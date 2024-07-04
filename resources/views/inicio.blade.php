@extends("layout")


@section('content')

<div id="carouselExampleControls" class="carousel slide carrusel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://fakeimg.pl/800x300/" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://fakeimg.pl/800x301/" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://fakeimg.pl/800x302/" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Container Nuevo y Ofertas-->
  <div class="container containerMasNuevo">
    <div class="row columnalomasnuevo">

    <h1 class="tituloNuevo col-auto">Lo Mas Nuevo</h1>
    <div class="linea col"></div>

    </div>

    <div class="contenedorcards row container">

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

    </div>




    <div class="container containerOferta">
    <div class="row columnaOferta">

    <h1 class="tituloOferta col-auto">Ofertas</h1>
    <div class="linea col"></div>

    </div>

    <div class="contenedorcards row container">

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

      <div class="card cardInicio col-auto" style="width: 18rem;">
      <img class="card-img-top" src="https://fakeimg.pl/250x250/" alt="Card image cap">
      <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="container">
      <p>5000</p>
      </div>
      </div>

    </div>

    </div>

  </div>

  <div class="bannerprom container">
    <img src="https://fakeimg.pl/800x300/">
  </div>

  <div class="metodosPago">
    <div class="container containermetodospago">
  <img width="48" height="48" src="https://img.icons8.com/color/48/mercado-pago.png" alt="mercado-pago"/>
  <img width="48" height="48" src="https://img.icons8.com/color/48/visa.png" alt="visa"/>
  <img width="48" height="48" src="https://img.icons8.com/color/48/mastercard-logo.png" alt="mastercard-logo"/>
  <img width="48" height="48" src="https://img.icons8.com/color/48/american-express-squared.png" alt="american-express-squared"/>
  <img width="48" height="48" src="https://img.icons8.com/color/48/paypal.png" alt="paypal"/>
  </div>
  </div>

@endsection

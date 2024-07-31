@extends("layouts.tienda")

@section('content')

<h1 class="nosotrostitulo text-center my-5">Sobre Nosotros</h1>

<div class="container text-center my-4">
    <img class="img-fluid rounded shadow" src="{{ URL('/img/bannerNosotros1.png') }}" alt="Pasión por el Fútbol">
</div>

<div class="container containernosotros my-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <img class="img-fluid rounded shadow" src="{{ URL('/img/bannerNosotros2.png') }}" alt="Nuestra Comunidad">
        </div>
        <div class="col-md-6">
            <p class="parrafo1nosotros">
                En <strong>One Kits</strong>, somos más que una tienda de camisetas de fútbol; somos una comunidad de apasionados que vive y respira el deporte rey. Nos especializamos en ofrecer una amplia variedad de camisetas, desde los equipos más icónicos hasta clubes emergentes y selecciones nacionales. Cada prenda es seleccionada por su calidad y autenticidad, asegurando que nuestros clientes reciban solo lo mejor. Nuestra misión es proporcionar a los aficionados una experiencia de compra única, donde la pasión por el fútbol se refleja en cada detalle.
            </p>
        </div>
    </div>
</div>

<div class="container containernosotros my-5">
    <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6 mb-4 mb-md-0">
            <img class="img-fluid rounded shadow" src="{{ URL('/img/bannerNosotros3.png') }}" alt="Servicio Excepcional">
        </div>
        <div class="col-md-6">
            <p class="parrafo1nosotros">
                Nos comprometemos a ofrecer un servicio excepcional y a construir una comunidad de amantes del fútbol. En <strong>One Kits</strong>, no solo vendemos camisetas, sino que celebramos la pasión, la emoción y el espíritu del fútbol. Ya sea que estés buscando la última camiseta de tu equipo favorito o un diseño clásico que capture la esencia del juego, estamos aquí para ayudarte. Únete a nosotros y lleva tu equipo favorito contigo dondequiera que vayas. Gracias por confiar en nosotros y ser parte de nuestra familia futbolera.
            </p>
        </div>
    </div>
</div>

<div class="container text-center my-4">
    <a href="/contacto" class="btn btn-info">
    Contactanos    
    </a>
</div>

@endsection

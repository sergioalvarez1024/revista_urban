<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Graffiti Terra</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <img src="{{ asset('images/Logo Urban Graffiti Terra .png') }}" alt="alternatetext" style="width:150px;height:160px;">
            <h1 class="col s12 m9 l9 xl9 teal accent-2">Revista Urban Graffiti Terra</h1>
        </div>

        <div class="container">
    <div class="row">
        <div class="col s12 m4 l4 xl4 blue">
            <a href="{{ route('login') }}" class="menu-item">Inicio sesión</a>
        </div>
        <div class="col s12 m4 l4 xl4 blue">
            <menu class="menu-item">Contenido</menu>
        </div>
        <div class="col s12 m4 l4 xl4 blue">
            <menu class="menu-item">Contáctanos</menu>
        </div>
    </div>
</div>
                        
        <div class="divider"></div>
<div class="row">
    <div class="section object-container">
        <embed src="{{ asset('pdf/Revista Digital Urban Graffiti Terra.pdf#toolbar=0&navpanes=0&scrollbar=0') }}" type="application/pdf" width="100%" height="100%">
        
        </embed>
    </div>
</div>
                        
        <div class="divider"></div>
        <div class="section">
            <h5 class="col s12 m12 l12 xl12 blue">Contáctanos</h5>
            <div class="footer-content">
                <p class="contact-email">Correo: info@tudominio.com</p>
            </div>
        </div>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </div>
</body>
</html>

</h2>
<div class="container">
    <div class="row">
        <img src="{{ asset('images/Logo Urban Graffiti Terra .png') }}" alt="alternatetext" style="width:150px;height:160px;">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <h1 class="col s12 m9 l9 xl9 teal accent-2">Revista Urban Graffiti Terra</h1>
        <pr><a href="{{ route('logout') }}" class="btn btn-small right">Salir</a></pr>
            @csrf
        </form>
    </div>

    <div class="container">
        <div class="row">
        <div class="col s12 m4 l4 xl4 blue">
                <a href="{{ route('profile') }}" class="menu-item">Perfil</a>
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
        <a href="{{ asset('pdf/Revista Digital Urban Graffiti Terra.pdf') }}"></a>.</p>
        </embed>
        <a href="{{ asset('pdf/Revista Digital Urban Graffiti Terra.pdf') }}" download class="btn btn-small right">Descargar PDF</a>
    </div>
</div>
<pr><a href="{{ asset('pdf/Revista Digital Urban Graffiti Terra.pdf') }}" download class="btn btn-small right">
    <i class="material-icons">Descargar PDF</i> 
</a></pr>
                    
    <div class="divider"></div>
    <div class="section">
        <h5 class="col s12 m12 l12 xl12 blue">Contáctanos</h5>
        <div class="footer-content">
            <p class="contact-email">Correo: info@tudominio.com</p>
        </div>
    </div>
</div>
   





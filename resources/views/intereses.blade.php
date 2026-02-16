<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intereses - Camilo Rojas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <nav class="navbar">
        <ul class="menu">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/perfil/intereses') }}" class="active">Intereses</a></li>
            <li><a href="{{ url('/perfil/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/perfil/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="container">
        
        <header class="main-header">
            <h1>Mis Intereses</h1>
            <p class="subtitle">Lo que me apasiona y me inspira</p>
        </header>

        <section class="interests-grid">
            
            <div class="interest-card color-tech">
                <div class="icon-wrapper">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3>Nuevas Tecnologías</h3>
                <p>Me mantengo actualizado en IA, Cloud Computing y las últimas tendencias en desarrollo de software.</p>
            </div>

            <div class="interest-card color-game">
                <div class="icon-wrapper">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h3>Videojuegos</h3>
                <p>Disfruto del gaming no solo como hobby, sino analizando mecánicas, narrativas y diseño lógico.</p>
            </div>

            <div class="interest-card color-sport">
                <div class="icon-wrapper">
                    <i class="fas fa-running"></i>
                </div>
                <h3>Deportes</h3>
                <p>El equilibrio físico es clave. Practico deporte para mantener la disciplina y la mente despejada.</p>
            </div>

            <div class="interest-card color-art">
                <div class="icon-wrapper">
                    <i class="fas fa-film"></i>
                </div>
                <h3>Arte y Cine</h3>
                <p>Aprecio la creatividad visual y la narrativa cinematográfica como fuente de inspiración.</p>
            </div>

        </section>
    </main>

</body>
</html>
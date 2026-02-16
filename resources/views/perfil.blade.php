<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Camilo Rojas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
</head>
<body>

    <nav class="navbar">
        <ul class="menu">
            <li><a href="{{ url('/perfil') }}" class="active">Perfil</a></li>
            <li><a href="{{ url('/perfil/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/perfil/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/perfil/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="container">
        <header class="main-header">
            <h1>Perfil</h1>
            <p class="subtitle">Estudiante de Ingeniería de Sistemas</p>
        </header>

        <section class="profile-grid">
            <div class="col-left">
                <h3>Acerca de mí</h3>
                <p>Soy estudiante de Ingeniería de Sistemas apasionado por la tecnología. Me enfoco en el aprendizaje continuo de nuevas herramientas.</p>
            </div>
            <div class="col-center">
                <img src="{{ asset('FotoCamiloTaller.jpeg') }}" alt="Foto de Camilo" class="profile-img">
            </div>
            <div class="col-right">
                <h3>Detalles</h3>
                <div class="detail-item"><strong>Nombre:</strong> <span>Camilo Rojas</span></div>
                <div class="detail-item"><strong>Edad:</strong> <span>24 años</span></div>
                <div class="detail-item"><strong>Ubicación:</strong> <span>Bucaramanga, Colombia</span></div>
            </div>
        </section>
    </main>
</body>
</html>
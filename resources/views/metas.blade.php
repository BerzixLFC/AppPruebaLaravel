<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metas - Camilo Rojas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <nav class="navbar">
        <ul class="menu">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/perfil/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/perfil/habilidades') }}">Habilidades</a></li>
            <li><a href="{{ url('/perfil/metas') }}" class="active">Metas</a></li>
        </ul>
    </nav>

    <main class="container">
        
        <header class="main-header">
            <h1>Mis Metas</h1>
            <p class="subtitle">Mi visión a futuro y plan de carrera</p>
        </header>

        <section class="goals-grid">
            
            <div class="goal-card border-green">
                <div class="goal-icon icon-green">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3>Corto Plazo</h3>
                <span class="time-label">1 - 2 Años</span>
                <ul class="goal-list">
                    <li>Conseguir mi primer empleo como <strong>Backend Developer</strong>.</li>
                    <li>Dominar Laravel y crear APIs RESTful seguras.</li>
                    <li>Mejorar mi nivel de inglés técnico.</li>
                </ul>
            </div>

            <div class="goal-card border-blue">
                <div class="goal-icon icon-blue">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h3>Mediano Plazo</h3>
                <span class="time-label">2 - 5 Años</span>
                <ul class="goal-list">
                    <li>Convertirme en <strong>Full Stack Developer</strong>.</li>
                    <li>Aprender a desplegar aplicaciones en la nube (AWS/Azure).</li>
                    <li>Liderar pequeños equipos de desarrollo.</li>
                </ul>
            </div>

            <div class="goal-card border-purple">
                <div class="goal-icon icon-purple">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Largo Plazo</h3>
                <span class="time-label">5+ Años</span>
                <ul class="goal-list">
                    <li>Ser <strong>Arquitecto de Software</strong>.</li>
                    <li>Contribuir a grandes proyectos Open Source.</li>
                    <li>Mentorear a nuevos programadores.</li>
                </ul>
            </div>

        </section>
    </main>

</body>
</html>
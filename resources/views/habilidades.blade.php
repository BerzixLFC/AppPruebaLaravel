<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades - Camilo Rojas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <nav class="navbar">
        <ul class="menu">
            <li><a href="{{ url('/perfil') }}">Perfil</a></li>
            <li><a href="{{ url('/perfil/intereses') }}">Intereses</a></li>
            <li><a href="{{ url('/perfil/habilidades') }}" class="active">Habilidades</a></li>
            <li><a href="{{ url('/perfil/metas') }}">Metas</a></li>
        </ul>
    </nav>

    <main class="container">
        
        <header class="main-header">
            <h1>Mis Habilidades</h1>
            <p class="subtitle">Mi nivel actual de conocimientos técnicos y profesionales</p>
        </header>

        <section class="skills-grid">
            
            <div class="skills-col">
                <h3><i class="fas fa-code"></i> Tecnologías</h3>
                
                <div class="skill-item">
                    <div class="skill-info">
                        <span>PHP / Laravel</span>
                        <span>5%</span>
                    </div>
                    <div class="progress-bg">
                        <div class="progress-fill color-blue" style="width: 5%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-info">
                        <span>HTML5 / CSS3</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-bg">
                        <div class="progress-fill color-orange" style="width: 80%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-info">
                        <span>JavaScript / React</span>
                        <span>20%</span>
                    </div>
                    <div class="progress-bg">
                        <div class="progress-fill color-yellow" style="width: 20%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-info">
                        <span>SQL / Bases de Datos</span>
                        <span>50%</span>
                    </div>
                    <div class="progress-bg">
                        <div class="progress-fill color-purple" style="width: 50%;"></div>
                    </div>
                </div>
            </div>

            <div class="skills-col">
                <h3><i class="fas fa-brain"></i> Profesionales</h3>
                
                <div class="soft-skills-list">
                    <div class="soft-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Lógica de Programación</span>
                    </div>
                    <div class="soft-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Trabajo en Equipo</span>
                    </div>
                    <div class="soft-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Aprendizaje Autodidacta</span>
                    </div>
                    <div class="soft-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Responsabilidad</span>
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>
</html>
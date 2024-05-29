<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuzzyFriends</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="Imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1> FuzzyFriends</h1>
                <p>
                En Clínica Veterinaria Fuzzy Friends, tu mascota es nuestra prioridad. 
                Nos dedicamos a ofrecer atención médica integral y de calidad para todos los miembros de tu familia peluda. 
                Con un equipo de profesionales altamente capacitados y apasionados por el bienestar animal, 
                brindamos una amplia gama de servicios para asegurar la salud y felicidad de tus mascotas.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>

            <div class="header-img">
                <img src="Imagenes/left.jpg" alt="">
            </div>        
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="Imagenes/about.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                En Clínica Veterinaria Fuzzy Friends, entendemos que tus mascotas 
                son más que animales de compañía; son miembros importantes de tu familia. 
                Nuestra misión es proporcionar atención médica de calidad, centrada en el bienestar
                y la salud de tus amigos peludos.
            </p>
            <br>
            <p>
                
                Creemos en un enfoque holístico y compasivo para el cuidado de las mascotas. 
                Entendemos que cada animal es único y merece un tratamiento individualizado. 
                Trabajamos en estrecha colaboración con los propietarios para crear planes 
                de salud personalizados que se adapten a las necesidades específicas de cada mascota.
            </p>
        </div>
    </section>
     
    <main class="servicios">
    
        <h2>Servicios</h2>
        <div class="servicios-content container">
            
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-shield-dog"></i>
                <h3>Consultas Generales</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-heart-pulse"></i>
                <h3>Cirugías</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-tooth"></i>
                <h3>Odontología Veterinaria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-scissors"></i>
                <h3>Peluquería y Estética</h3>
            </div>
        </div>
     </main>   

        <section class="formulario container">

                <form method="post" autocomplete="off">

                    <h2>Iniciar Sesion</h2>
            
                    <div class="input-group">
                        <div class="input-container">
                            <input type="text" name="usuario" placeholder="Usuario">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="password" placeholder="Password">
                            <i class="fa-solid fa-unlock"></i>
                        </div>
                       
                     <input type="submit" name="send" class="btn" onclick="myFunction()">
                    </div>

                </form>

        </section>

        <footer class="footer">

            <div class="footer-content container">

                <div class="link">
                <a href="#" class="logo">logo</a>
                </div>

                <div class="link">

                    <ul>
                        <li> <a href="#">Inicio</a></li>
                        <li> <a href="#">Nosotros</a></li>
                        <li> <a href="#">Servicios</a></li>
                        <li> <a href="#">Contacto</a></li>
                    </ul>
                </div>

            </div>
        </footer>
        
    
        <?php
            include("send.php");
        ?>

<script>
    function myFunction() {
        window.location.href="http://localhost/fuzzyfriends"
    }

</script>

</body>
</html>
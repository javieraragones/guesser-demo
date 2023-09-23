<?php include '../../Guesser-Demo/main/header.php'; ?> <!-- Incluir el contenido del header -->


<div class="game-cont">
    <div class="game-box">

        <div class="peliculas-menu">
            <div class="peliculas-menu-elem1 peliculas-menu-elementos">
                <!--a href="" id="btn-infinito" class="btn-menu-peliculas"><i class="fas fa-infinity"></i></a-->
            </div>
            <div class="peliculas-menu-elem2 peliculas-menu-elementos">
                <select id="btn-modo-pelicula" class="btn-menu-peliculas despl-modo-pelicula">
                    <?php
                    // Obtener el nombre de la página actual
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    ?>
                    <?php if ($currentPage == "fotogramaPeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php" selected>Fotograma</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php">Personaje</option>
                    <?php elseif ($currentPage == "emojiPeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php" selected>Emoji</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php">Personaje</option>
                    <?php elseif ($currentPage == "personajePeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php" selected>Personaje</option>

                    <?php elseif ($currentPage == "fotogramaPeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php" selected>Fotograma Infinito</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php">Emoji Infinito</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php">Personaje Infinito</option>
                    <?php elseif ($currentPage == "emojiPeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php">Fotograma Infinito</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php" selected>Emoji Infinito</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php">Personaje Infinito</option>
                    <?php elseif ($currentPage == "personajePeliculasInfinito.php") : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php">Fotograma Infinito</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php">Emoji Infinito</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php" selected>Personaje Infinito</option>

                    <?php else : ?>
                        <option value="/Guesser-Demo/peliculas/fotogramaPeliculasInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/peliculas/emojiPeliculasInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/peliculas/personajePeliculasInfinito.php">Personaje</option>

                    <?php endif; ?>
                </select>
                <script>
                    // Obtener el elemento select
                    var selectElement = document.getElementById('btn-modo-pelicula');
                    // Agregar un evento de cambio al select
                    selectElement.addEventListener('change', function() {
                        // Obtener la opción seleccionada
                        var selectedOption = selectElement.options[selectElement.selectedIndex];
                        // Obtener el valor de la URL de la opción seleccionada
                        var url = selectedOption.value;
                        // Redirigir a la página correspondiente
                        window.location.href = url;
                    });
                </script>
            </div>
            <div class="peliculas-menu-elem3 peliculas-menu-elementos">
                <!--a href="#" id="btn-calendario" class="btn-menu-peliculas"><i class="fas fa-calendar"></i></a-->
            </div>
        </div>
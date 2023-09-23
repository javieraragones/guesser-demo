<?php include '../../Guesser-Demo/main/header.php'; ?> <!-- Incluir el contenido del header -->


<div class="game-cont">
    <div class="game-box">

        <div class="series-menu">
            <div class="series-menu-elem1 series-menu-elementos">
                <!--a href="" id="btn-infinito" class="btn-menu-series"><i class="fas fa-infinity"></i></a-->
            </div>
            <div class="series-menu-elem2 series-menu-elementos">
                <select id="btn-modo-serie" class="btn-menu-series despl-modo-serie">
                    <?php
                    // Obtener el nombre de la página actual
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    ?>
                    <?php if ($currentPage == "fotogramaSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php" selected>Fotograma</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php">Personaje</option>
                    <?php elseif ($currentPage == "emojiSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php" selected>Emoji</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php">Personaje</option>
                    <?php elseif ($currentPage == "personajeSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php" selected>Personaje</option>

                    <?php elseif ($currentPage == "fotogramaSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php" selected>Fotograma Infinito</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php">Emoji Infinito</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php">Personaje Infinito</option>
                    <?php elseif ($currentPage == "emojiSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php">Fotograma Infinito</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php" selected>Emoji Infinito</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php">Personaje Infinito</option>
                    <?php elseif ($currentPage == "personajeSeriesInfinito.php") : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php">Fotograma Infinito</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php">Emoji Infinito</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php" selected>Personaje Infinito</option>

                    <?php else : ?>
                        <option value="/Guesser-Demo/series/fotogramaSeriesInfinito.php">Fotograma</option>
                        <option value="/Guesser-Demo/series/emojiSeriesInfinito.php">Emoji</option>
                        <option value="/Guesser-Demo/series/personajeSeriesInfinito.php">Personaje</option>

                    <?php endif; ?>
                </select>
                <script>
                    // Obtener el elemento select
                    var selectElement = document.getElementById('btn-modo-serie');
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
            <div class="series-menu-elem3 series-menu-elementos">
                <!--a href="#" id="btn-calendario" class="btn-menu-series"><i class="fas fa-calendar"></i></a-->
            </div>
        </div>
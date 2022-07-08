<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Horario";
      require("include/head.php");
    ?>
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <!-- Horario -->
      <h1 class="f-uncial-r mb-5">Horario</h1>

      <h2 class="mb-5">Sábado</h2>

      <h3 class="mb-4">Sala Olárizu</h3>

      <div class="row gy-5 mb-5">
        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Escenario</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:00-10:15</th>
                <td>Ceremonia de inauguración</td>
              </tr>
              <tr>
                <th scope="row">15:00-17:00</th>
                <td>Asian Dance Contest</td>
              </tr>
              <tr>
                <th scope="row">18:00-20:00</th>
                <td>Concurso de cosplay</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Tatami</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Random Asian Dance</td>
              </tr>
              <tr>
                <th scope="row">11:30-12:30</th>
                <td>Exhibición HEMA</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Torneos</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-13:30</th>
                <td>King of Tokyo</td>
              </tr>
              <tr>
                <th scope="row">11:00-13:30<br>15:00-19:00</th>
                <td>Super Smash Bros.</td>
              </tr>
              <tr>
                <th scope="row">10:30-13:30<br>15:30-18:30</th>
                <td>Infinity</td>
              </tr>
              <tr>
                <th scope="row">15:30-19:30</th>
                <td>Monolith Arena</td>
              </tr>
              <tr>
                <th scope="row">15:30-19:30</th>
                <td>Magic</td>
              </tr>
              <tr>
                <th scope="row">15:30-19:30</th>
                <td>Yu-Gi-Oh!</td>
              </tr>
              <tr>
                <th scope="row">17:00-20:00</th>
                <td>Ordered Witch</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Demostraciones</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-13:30</th>
                <td>Yu-Gi-Oh!</td>
              </tr>
              <tr>
                <th scope="row">10:30-13:30<br>15:00-20:30</th>
                <td>Magic</td>
              </tr>
              <tr>
                <th scope="row">11:00-13:00<br>17:00-20:00</th>
                <td>Ordered Witch</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h3 class="mb-4">Sala Estíbaliz</h3>

      <div class="row gy-5 mb-5">
        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Charlas</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>¿Qué es el rol en vivo?</td>
              </tr>
              <tr>
                <th scope="row">12:30-13:30</th>
                <td>Armas en la ficción</td>
              </tr>
              <tr>
                <th scope="row">15:00-16:00</th>
                <td>Fotografía FineArt</td>
              </tr>
              <tr>
                <th scope="row">16:30-17:30</th>
                <td>Atrezzo y vestuario para rol en vivo</td>
              </tr>
              <tr>
                <th scope="row">18:30-19:30</th>
                <td>Presentaciones de Editorial Cerbero</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Photobooth</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:00-11:30</th>
                <td>Fotografía de retrato artístico</td>
              </tr>
              <tr>
                <th scope="row">15:00-16:00</th>
                <td>Open photoshoot</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Zona de talleres</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-12:30</th>
                <td>Taller de bordado Pokémon</td>
              </tr>
              <tr>
                <th scope="row">10:30-20:30</th>
                <td>Concurso Fast Fic</td>
              </tr>
              <tr>
                <th scope="row">12:00-13:00</th>
                <td>Taller de pintado de Darumas</td>
              </tr>
              <tr>
                <th scope="row">12:00-13:00</th>
                <td>Taller de creación de personajes para rol en vivo</td>
              </tr>
              <tr>
                <th scope="row">15:00-16:00</th>
                <td>Taller de ilustración y cómic: creación de personajes</td>
              </tr>
              <tr>
                <th scope="row">15:30-16:30</th>
                <td>Taller de chapas</td>
              </tr>
              <tr>
                <th scope="row">16:00-20:30</th>
                <td>Concurso Fast Comic</td>
              </tr>
              <tr>
                <th scope="row">17:00-18:00</th>
                <td>"¿Y tú de qué te ríes?": Cómo hacer comedia en la literatura</td>
              </tr>
              <tr>
                <th scope="row">17:30-18:30</th>
                <td>Taller de pintado de jarras</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Rol de mesa</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">11:00-13:30</th>
                <td>Symbaroum</td>
              </tr>
              <tr>
                <th scope="row">11:00-13:30</th>
                <td>Cultos Innombrables</td>
              </tr>
              <tr>
                <th scope="row">11:00-13:30</th>
                <td>La llamada de Cthulhu</td>
              </tr>
              <tr>
                <th scope="row">15:00-16:30</th>
                <td>Rol de mesa infantil</td>
              </tr>
              <tr>
                <th scope="row">15:00-18:00</th>
                <td>1800: El Ocaso de la Humanidad</td>
              </tr>
              <tr>
                <th scope="row">15:30-18:30</th>
                <td>Rol Ochentero</td>
              </tr>
              <tr>
                <th scope="row">16:00-19:00</th>
                <td>The Witcher</td>
              </tr>
              <tr>
                <th scope="row">17:00-19:00</th>
                <td>Dragones y Mazmorras (Dungeons & Dragons)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Rol en vivo</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">15:00-18:00</th>
                <td>Viena 1914</td>
              </tr>
              <tr>
                <th scope="row">18:00-20:30</th>
                <td>Olimpo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h2 class="mb-5">Domingo</h2>

      <h3 class="mb-4">Sala Olárizu</h3>

      <div class="row gy-5 mb-5">
        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Escenario</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">13:30-14:00</th>
                <td>Sorteo de premios y ceremonia de clausura</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Tatami</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">11:30-12:30</th>
                <td>Academia Jedi infantil</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Torneos</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>Catán</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Demostraciones</h4>

          <table class="table table-ffcyan table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>Magic</td>
              </tr>
              <tr>
                <th scope="row">11:30-12:30</th>
                <td>Cuac!</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h3 class="mb-4">Sala Estíbaliz</h3>

      <div class="row gy-5 mb-5">
        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Charlas</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Maquillaje y caracterización de personajes para cosplay</td>
              </tr>
              <tr>
                <th scope="row">12:00-13:00</th>
                <td>Fundamentos de armadura para cosplay</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Talleres</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Taller de chapas</td>
              </tr>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Taller de varitas</td>
              </tr>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Concurso Fast Painting</td>
              </tr>
              <tr>
                <th scope="row">11:30-13:00</th>
                <td>Construye tu propia cámara oscura (fotografía)</td>
              </tr>
              <tr>
                <th scope="row">12:00-13:00</th>
                <td>Taller de dibujos chibi/kawaii</td>
              </tr>
              <tr>
                <th scope="row">12:00-13:00</th>
                <td>Taller de pintado de jarras</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Rol de mesa</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>My Little Pony</td>
              </tr>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>Dragones y Mazmorras (Dungeons & Dragons)</td>
              </tr>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>1800: El Ocaso de la Humanidad</td>
              </tr>
              <tr>
                <th scope="row">10:30-13:00</th>
                <td>Alien</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-12 col-lg-6">
          <h4 class="mb-3">Rol en vivo</h4>

          <table class="table table-ffyellow table-striped align-middle">
            <thead>
              <tr>
                <th scope="col">Hora</th>
                <th scope="col">Actividad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">10:30-11:30</th>
                <td>Crazy Rol</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- <div class="text-center pb-3">
        <h2>En construcción...</h2>
      </div> -->
    </div>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php include("include/footer.php"); ?>
    <!-- Footer End -->

    <!-- Bootstrap JS bundle w/ Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>
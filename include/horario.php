<body>
  <!-- Navbar Start -->
  <?php include("header.php"); ?>
  <!-- Navbar End -->

  <!-- Main Start -->
  <div class="container-md ff-main-gutter my-5">
    <h1 class="f-uncial-r mb-5"><?php echo $lang["lang.timetable.title"]; ?></h1>

    <!-- Horario -->
    <h2 class="mb-5"><?php echo $lang["lang.timetable.day.saturday"]; ?></h2>

    <h3 class="mb-4"><?php echo $lang["lang.timetable.room.olarizu"]; ?></h3>

    <div class="row gy-5 mb-5">
      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.stage"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:00</th>
              <th scope="row">10:15</th>
              <td><?php echo $lang["lang.timetable.activity.opening"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">17:00</th>
              <td><?php echo $lang["lang.timetable.activity.asian-dance-contest"]; ?></td>
            </tr>
            <tr>
              <th scope="row">18:00</th>
              <th scope="row">20:00</th>
              <td><?php echo $lang["lang.timetable.activity.cosplay"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.tatami"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.random-asian-dance"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:30</th>
              <th scope="row">12:30</th>
              <td><?php echo $lang["lang.timetable.activity.hema"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.tournaments"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.king-of-tokyo"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:00<br>15:00</th>
              <th scope="row">13:30<br>19:00</th>
              <td><?php echo $lang["lang.timetable.activity.smash"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30<br>15:30</th>
              <th scope="row">13:30<br>18:30</th>
              <td><?php echo $lang["lang.timetable.activity.infinity"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:30</th>
              <th scope="row">19:30</th>
              <td><?php echo $lang["lang.timetable.activity.monolith-arena"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:30</th>
              <th scope="row">19:30</th>
              <td><?php echo $lang["lang.timetable.activity.magic"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:30</th>
              <th scope="row">19:30</th>
              <td><?php echo $lang["lang.timetable.activity.yu-gi-oh"]; ?></td>
            </tr>
            <tr>
              <th scope="row">17:00</th>
              <th scope="row">20:00</th>
              <td><?php echo $lang["lang.timetable.activity.ordered-witch"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.exhibitions"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.yu-gi-oh"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30<br>15:00</th>
              <th scope="row">13:30<br>20:30</th>
              <td><?php echo $lang["lang.timetable.activity.magic"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:00<br>17:00</th>
              <th scope="row">13:00<br>20:00</th>
              <td><?php echo $lang["lang.timetable.activity.ordered-witch"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.timetable.room.estibaliz"]; ?></h3>

    <div class="row gy-5 mb-5">
      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.talks"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.rev-que-es"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:30</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.armas-ficcion"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">16:00</th>
              <td><?php echo $lang["lang.timetable.activity.fotografia-fineart"]; ?></td>
            </tr>
            <tr>
              <th scope="row">16:30</th>
              <th scope="row">17:30</th>
              <td><?php echo $lang["lang.timetable.activity.rev-atrezzo-vestuario"]; ?></td>
            </tr>
            <tr>
              <th scope="row">18:30</th>
              <th scope="row">19:30</th>
              <td><?php echo $lang["lang.timetable.activity.presentaciones-cerbero"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.photobooth"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:00</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.fotografia-retrato-artistico"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">16:00</th>
              <td><?php echo $lang["lang.timetable.activity.open-photoshoot"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.workshops"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">12:30</th>
              <td><?php echo $lang["lang.timetable.activity.bordado-pokemon"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">20:30</th>
              <td><?php echo $lang["lang.timetable.activity.fast-fic"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:00</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.darumas"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:00</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.rev-creacion-pjs"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">16:00</th>
              <td><?php echo $lang["lang.timetable.activity.ilustracion-comic-creacion-pjs"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:30</th>
              <th scope="row">16:30</th>
              <td><?php echo $lang["lang.timetable.activity.chapas"]; ?></td>
            </tr>
            <tr>
              <th scope="row">16:00</th>
              <th scope="row">20:30</th>
              <td><?php echo $lang["lang.timetable.activity.fast-comic"]; ?></td>
            </tr>
            <tr>
              <th scope="row">17:00</th>
              <th scope="row">18:00</th>
              <td><?php echo $lang["lang.timetable.activity.literatura-comedia"]; ?></td>
            </tr>
            <tr>
              <th scope="row">17:30</th>
              <th scope="row">18:30</th>
              <td><?php echo $lang["lang.timetable.activity.jarras"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.rpg-tabletop"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">11:00</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.symbaroum"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:00</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.cultos-innombrables"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:00</th>
              <th scope="row">13:30</th>
              <td><?php echo $lang["lang.timetable.activity.cthulhu"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">16:30</th>
              <td><?php echo $lang["lang.timetable.activity.rol-infantil"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">18:00</th>
              <td><?php echo $lang["lang.timetable.activity.1800"]; ?></td>
            </tr>
            <tr>
              <th scope="row">15:30</th>
              <th scope="row">18:30</th>
              <td><?php echo $lang["lang.timetable.activity.rol-ochentero"]; ?></td>
            </tr>
            <tr>
              <th scope="row">16:00</th>
              <th scope="row">19:00</th>
              <td><?php echo $lang["lang.timetable.activity.the-witcher"]; ?></td>
            </tr>
            <tr>
              <th scope="row">17:00</th>
              <th scope="row">19:00</th>
              <td><?php echo $lang["lang.timetable.activity.d&d"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.rpg-live-action"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">15:00</th>
              <th scope="row">18:00</th>
              <td><?php echo $lang["lang.timetable.activity.viena-1914"]; ?></td>
            </tr>
            <tr>
              <th scope="row">18:00</th>
              <th scope="row">20:30</th>
              <td><?php echo $lang["lang.timetable.activity.olimpo"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <h2 class="mb-5"><?php echo $lang["lang.timetable.day.sunday"]; ?></h2>

    <h3 class="mb-4"><?php echo $lang["lang.timetable.room.olarizu"]; ?></h3>

    <div class="row gy-5 mb-5">
      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.stage"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">13:30</th>
              <th scope="row">14:00</th>
              <td><?php echo $lang["lang.timetable.activity.closing"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.tatami"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">11:30</th>
              <th scope="row">12:30</th>
              <td><?php echo $lang["lang.timetable.activity.academia-jedi"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.tournaments"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.catan"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.exhibitions"]; ?></h4>

        <table class="table table-ffdiamond-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.magic"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:30</th>
              <th scope="row">12:30</th>
              <td><?php echo $lang["lang.timetable.activity.cuac"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <h3 class="mb-4"><?php echo $lang["lang.timetable.room.estibaliz"]; ?></h3>

    <div class="row gy-5 mb-5">
      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.talks"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.cosplay-maquillaje-caracterizacion"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:00</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.cosplay-armadura"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.workshops"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.chapas"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.varitas"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.fast-painting"]; ?></td>
            </tr>
            <tr>
              <th scope="row">11:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.fotografia-camara-oscura"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:00</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.dibujos-chibi-kawaii"]; ?></td>
            </tr>
            <tr>
              <th scope="row">12:00</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.jarras"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.rpg-tabletop"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.my-little-pony"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.d&d"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.1800"]; ?></td>
            </tr>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">13:00</th>
              <td><?php echo $lang["lang.timetable.activity.alien"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-12 col-lg-6">
        <h4 class="mb-3"><?php echo $lang["lang.timetable.zone.rpg-live-action"]; ?></h4>

        <table class="table table-ffsunlight-semitransparent table-striped align-middle">
          <thead>
            <tr>
              <th scope="col"><?php echo $lang["lang.timetable.start.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.end.title"]; ?></th>
              <th scope="col"><?php echo $lang["lang.timetable.activity.title"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10:30</th>
              <th scope="row">11:30</th>
              <td><?php echo $lang["lang.timetable.activity.crazy-rol"]; ?></td>
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
  <?php include("footer.php"); ?>
  <!-- Footer End -->
</body>
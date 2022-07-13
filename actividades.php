<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Actividades";
      require("/include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("/include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">Actividades</h1>

      <div class="accordion" id="accordion-activities">
        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-board-games">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-board-games" aria-expanded="false" aria-controls="collapse-board-games">
              Ludoteca de juegos de mesa
            </button>
          </h2>
          <div id="collapse-board-games" class="accordion-collapse collapse" aria-labelledby="heading-board-games" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Disfruta de una extensa ludoteca de juegos de mesa que estará a tu disposición durante todo el evento, para que puedas conocer y descubrir nuevos juegos con los que divertirte, o jugar una vez más a los clásicos de siempre.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-tournaments">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-tournaments" aria-expanded="false" aria-controls="collapse-tournaments">
              Torneos
            </button>
          </h2>
          <div id="collapse-tournaments" class="accordion-collapse collapse" aria-labelledby="heading-tournaments" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Compite contra otros adversarios en juegos de mesa, wargames, cartas, etc. y lucha por ser el ganador de los impresionantes premios que nuestros colaboradores aportarán para los campeones.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Infinity</h4>
                    <p>Trae tu mejor equipo y participa en este torneo del juego de wargaming de marca española más conocido.
                      Muchas facciones ya han alcanzado las estrellas en este universo 175 años en el futuro, ¡pero sólo puede quedar una!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases TORNEO FREAK FESTIVAL22 Infinity.pdf" role="button">Bases del torneo</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Juegos de mesa y de cartas</h4>
                    <p>¿Quieres probar a jugar a tus juegos de mesa y de cartas favoritos contra jugadores competitivos para demostrar quién es el mejor?
                      La primera regla es pasárselo bien, ¡pero el podio pide espectáculo!</p>

                    <p>Estos son los juegos en los que se podrá competir: Catán, King of Tokyo, Monolith Arena, Ordered Witch, Magic y Yu-Gi-Oh!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases juegos de mesa y cartas.pdf" role="button">Bases de los torneos</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Super Smash Bros.</h4>
                    <p>¡Desafía a tus oponentes en el videojuego de lucha más loco!
                      ¿Serás capaz de derrotar a todos los oponentes y hacerte con el primer puesto?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases smash bros FF22.pdf" role="button">Bases del torneo</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-rpg">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-rpg" aria-expanded="false" aria-controls="collapse-rpg">
              Partidas de rol
            </button>
          </h2>
          <div id="collapse-rpg" class="accordion-collapse collapse" aria-labelledby="heading-rpg" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Vive las aventuras más emocionantes con un grupo de héroes que viajan por mundos de fantasía, ciencia ficción, terror, etc. guiados por un director de partida, que se asegurará de que vuestra historia sea digna de relato.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de Alien</h4>
                    <p>La Estación Titán, metrópolis corporativa de Weyland-Yutani, ha dejado de transmitir.
                      Tras una confusa señal de socorro, el Cuerpo de Defensa de los Marines Coloniales se prepara para investigar el incidente sin saber… que se acercan peligrosamente a la más horrible de las pesadillas.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de The Witcher</h4>
                    <p>Tras el paso del implacable ejército, los pueblos de Redania han quedado desprotegidos, a merced de bandidos, bestias y monstruos.
                      En estos tiempos difíciles no prosperarán, pues son desconocedores de lo que mora en sus bosques…</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de Dragones y Mazmorras (Dungeons & Dragons) - Sábado</h4>
                    <p>Las tormentas inusualmente violentas en estas partes a menudo conducen a heterogéneas colecciones de seres inteligentes a refugiarse juntos durante un tiempo.
                      La tradición de la «paz de tormenta» garantiza que todos los rencores se suspendan mientras dura la tormenta.
                      Pero algunos refugios son más seguros que otros, y no todos los seres honran la paz de la tormenta.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de Dragones y Mazmorras (Dungeons & Dragons) - Domingo</h4>
                    <p>Volvéis de una poco fructífera misión cuya recompensa con suerte os dará para comer.
                      De repente, a un costado del camino, encontráis una armadura, pero no una armadura cualquiera: una armadura de una forja exquisita luciendo el símbolo de Lathander, el dios del amanecer y el renacimiento, tanto en el yelmo como en la coraza.
                      Cuando levantáis la mirada veis un rastro de objetos de increíble valor que conducen al reconfortante sonido de una cascada.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de 1800: El Ocaso de la Humanidad</h4>
                    <p>Año 1800 Evropa, han pasado 100 años desde que las huestes infernales consiguieron abrir una brecha al este de Hispania.
                      Desde entonces se han manifestado poderes tanto benditos como profanos, el folclore cobra vida y la tecnología está fuera de control.
                      Todo se sume en un caos político y social. ¿Seréis capaces de sobrevivir a todas estas amenazas?
                      Descubridlo en 1800: El Ocaso de la Humanidad.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de Cultos Innombrables</h4>
                    <p>En el mundo hay cosas más allá de lo que parecen. Los "mitos" se construyen en realidades que afectan al destino de la realidad.
                      Eso lo descubriste al unirte a tu culto. Ahora, después de varios meses de regateos, os habéis hecho con el famoso sillón del diablo.
                      Ya sólo queda ir a recogerlo. Esa es la parte sencilla, ¿verdad?</p>

                    <p><span class="fst-italic">Cultos innombrables</span> es un juego de rol en mesa que aprovecha el Sistema de Hitos para ponerte en la piel de un cultista.
                      ¿Conseguirás tus objetivos, aunque por el camino arriesgues todo, incluso tu humanidad?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa de La llamada de Cthulhu</h4>
                    <p>Rupert Merriweather ha sido ingresado en el Hospital de Santa María situado en la ciudad de Arkham.
                      Os ha hecho llamar porque parece querer contaros algo muy importante, dice que "es cuestión de vida o muerte".</p>

                    <p>Vuestra amistad os lleva a reuniros allí junto a otros amigos del enfermo.
                      Juntos tendréis que resolver un extraño misterio relacionado con unos símbolos egipcios, un extraño insecto incrustado en una pieza de ámbar y lo que hasta ahora había sido un secreto inconfesable.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol Ochentero</h4>
                    <p><span class="fst-italic">Rol ochentero</span> es una partida recorriendo el rol español publicado de 1980 a 1989, en la que se cambia el universo y el sistema de juego, pero no los personajes.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa Symbaroum</h4>
                    <p>Symbaroum, juego de origen sueco, nos sumerge en un mundo fantástico medieval inspirado en la mitología báltica.
                      En esta aventura acompañaremos a un grupo de refugiados en su periplo a través de las montañas para llegar a la tierra prometida, Ambria.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa My Little Pony</h4>
                    <p>Las Mane Six tienen que atender una importante misión en las islas baldías. Tan de sopetón lo han sabido, que no han podido enviar a sus mascotas a la guardería.
                      Con menudos ponis se han topado, su única opción se ha revelado. A sus mascotas tendréis que cuidar, hasta que de las islas puedan retornar.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol de mesa infantil</h4>
                    <p>En un mundo en el que el mal ha triunfado y el Señor Oscuro reina sobre todos, un grupo de secuaces goblins hará un viaje hasta una lejana torre para encontrar al malvado hechicero que le hace la competencia al Señor y enseñarle quién manda.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol en vivo Crazy Rol</h4>
                    <p>Sé parte de las historias más locas en partidas improvisativas cortas de 10-15 minutos, en las que interpretarás a un personaje proporcionado por el director de juego.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol en vivo Olimpo</h4>
                    <p>Estimados dioses, semidioses y humanos: yo, Dionisios, en representación del supremo Zeus, me complazco en invitaros a la fiesta de bienvenida y degustación de la nueva cosecha de Ambrosía, en los jardines del monte Olimpo.
                      Por supuesto, habrá más refrigerios y, mientras llega la nueva remesa, terminaremos de beber la del año anterior, y habrá música, juegos, danzas y divertimentos varios.
                      Por supuesto, las armas están prohibidas.</p>

                    <p>Por favor, confirmar vuestra asistencia y sed todos bienvenidos.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol en vivo Viena 1914</h4>
                    <p>La acción se sitúa en Viena en 1914, poco antes del inicio de la Gran Guerra.
                      Se celebra una fiesta en la corte de Viena por la onomástica de la duquesa von Hammerschich a la que están invitados personajes muy importantes del Imperio austrohúngaro y sus aliados, incluyendo al emperador Francisco José y el archiduque Francisco Fernando, su sobrino y sucesor al trono.
                      La copiosa cena termina en una reunión privada, que se alargará hasta el filo de la medianoche.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-contests">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-contests" aria-expanded="false" aria-controls="collapse-contests">
              Concursos
            </button>
          </h2>
          <div id="collapse-contests" class="accordion-collapse collapse" aria-labelledby="heading-contests" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Participa en nuestros concursos de cosplay, relato corto, fast manga, etc. y opta a increíbles premios aportados por nuestros colaboradores.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Asian Dance Contest</h4>
                    <p>No te pierdas la oportunidad de participar en el concurso de baile de K-pop organizado por el maravilloso grupo Kuàizi.
                      Ya sea en equipo o en solitario, ¡ya puedes bailar al ritmo del estilo coreano más moderno!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases KADC FreakFestival 2022.pdf" role="button">Bases del concurso</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://forms.gle/P1szQdB9QZfDz1LeA" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cosplay</h4>
                    <p>Luce tus mejores galas y da vida a tu personaje favorito en el concurso de Cosplay.
                      Nuestro jurado de expertas valorará la confección, fabricación y detalles de los trajes, así como la puesta en escena.
                      ¡Prepárate para deslumbrarlos a todos!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases cosplay 22.pdf" role="button">Bases del concurso</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Painting</h4>
                    <p>¿Te crees capaz de pintar una miniatura a contrarreloj digna del primer puesto? Demuéstranos tu maestría con el pincel en este concurso.
                      Recuerda, ¡el temporizador no se detiene mientras se seca la pintura!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/FREAK FESTIVAL CONCURSO FAST PAINTING.pdf" role="button">Bases del concurso</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Fic</h4>
                    <p>Si quieres probar tu imaginación y habilidad literaria a contrarreloj, aquí tienes el reto que buscabas.
                      Crea tu mejor relato durante el evento y conmueve al jurado con tus palabras.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases fast fic.pdf" role="button">Bases del concurso</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Comic</h4>
                    <p>¿Te crees capaz de crear una buena historia en formato cómic en tiempo record?
                      ¡Agarra tu material de dibujo y enséñanos de lo que eres capaz!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases fast comic.pdf" role="button">Bases del concurso</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Pintado de miniaturas</h4>
                    <p>¿Cuánta habilidad tienes con colores acrílicos sobre plástico? ¿O quizás resina? ¿O metal?
                      Da igual el material de la miniatura, lo que nos interesa es lo bien que le hayas dejado la capa de pintura que lleve encima, ¡así que enséñanos tu arte con el pincel y arrasa en este concurso!</p>

                      <div class="row gy-3 mb-3">
                        <div class="col-auto">
                          <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button">Bases del concurso</a>
                        </div>

                        <div class="col-auto">
                          <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                        </div>
                      </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Dioramas</h4>
                    <p>Si no sientes que una miniatura sea un reto suficiente, ¿por qué no subir el listón?
                      ¡Tráenos tu obra maestra en forma de diorama y deja que tu habilidad de pintura mezclada con el arte de crear escenas te deje en el primer puesto!</p>

                      <div class="row gy-3 mb-3">
                        <div class="col-auto">
                          <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button">Bases del concurso</a>
                        </div>

                        <div class="col-auto">
                          <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                        </div>
                      </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-stands">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-stands" aria-expanded="false" aria-controls="collapse-stands">
              Tiendas, artistas y artesanos
            </button>
          </h2>
          <div id="collapse-stands" class="accordion-collapse collapse" aria-labelledby="heading-stands" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Descubre a creadores y negocios locales que hacen posible la expansión de nuestros hobbies y quieren dar a conocer al mundo sus productos.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-talks">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-talks" aria-expanded="false" aria-controls="collapse-talks">
              Charlas y exhibiciones
            </button>
          </h2>
          <div id="collapse-talks" class="accordion-collapse collapse" aria-labelledby="heading-talks" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Aprende sobre tus hobbies favoritos con las charlas y exhibiciones impartidas por expertos en una gran variedad de disciplinas como artes marciales, literatura, arte, cosplay, etc.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fotografía FineArt</h4>
                    <p>La fotografía FineArt se aleja de lo que puede ser una fotografía realista o simplemente de retrato para acercarse más a una pintura o a algo más irreal.
                      En este caso, en la charla, veremos cómo pensar la idea, qué cosas tendremos que tener en cuenta al hacer la fotografía para que, posteriormente en la edición, todo quede bien integrado y resulte realista.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">¿Qué es el Rol en Vivo?</h4>
                    <p>El rol en vivo es una actividad inmersiva que consiste en la representación improvisada de un personaje, que vive una aventura dirigida por uno o varios directores de juego.
                      Si quieres descubrir más sobre ser el protagonista de tu propia historia en primera persona, esta charla es para ti.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Atrezzo y vestuario para rol en vivo</h4>
                    <p>En esta charla aprenderás a elevar tu personaje de rol en vivo al siguiente nivel mediante el diseño de vestuario y atrezzo.
                      Se hablará del sistema de capas, haciendo hincapié en los detalles.
                      La charla girará en torno a la creatividad, ofreciendo maneras alternativas de dar personalidad al personaje sin necesariamente gastar dinero, sino por ejemplo utilizando cosas que se pueden encontrar por casa.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Maquillaje y caracterización de personajes para cosplay</h4>
                    <p>Hablaremos de los elementos clave para conseguir la mejor caracterización de tus personajes favoritos.
                      Desde los aspectos básicos a tener en cuenta de las lentillas, tipos de maquillaje, pelucas… hasta hablar de prótesis y maquillaje FX.
                      Al final de la charla, habrá una parte práctica/interactiva en la que podréis “trastear” y probar varios de los materiales de los que hablaremos en la charla.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fundamentos de armadura para Cosplay</h4>
                    <p>Uno de los aspectos más espectaculares del cosplay es el de la armadura de los distintos personajes que se representan.
                      En esta charla se impartirán las nociones fundamentales de selección de materiales, técnicas de conformado, pintura y envejecido para distintas piezas de armadura.
                      La sesión será impartida por la cosplayer Burning Flare.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Armas en la ficción</h4>
                    <p>¿Te intriga la veracidad histórica del armamento en la ficción? Entonces esta es tu charla.
                      Desde el Club de Esgrima CSE nos traen una conferencia muy interesante al Freak Festival sobre armas en la ficción; ya sea poderoso armamento de fuego ultra tecnológico o anacrónicas y extravagantes armas blancas.
                      Nuestros ponentes son todos unos expertos, y además de realizar un recorrido por las principales armas que podemos encontrar en obras de ficción, realizarán una valoración de los usos y posibilidades que ofrecen estas armas ficticias desde una perspectiva real, guiados por los principios básicos del manejo de armas blancas o de fuego reales.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Presentaciones de Editorial Cerbero</h4>
                    <p>Presentación de dos novelas cortas de autoras vitorianas.
                      <a href="https://www.editorialcerbero.com/producto/intrigancles"><span class="fst-italic">Intrigancles contra el sistema demostrático</span></a> de Virginia Orive de la Rosa y <a href="https://www.editorialcerbero.com/producto/cartas-tras-el-velo"><span class="fst-italic">Cartas tras el velo</span></a> de Leticia S. Murga.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Exhibición HEMA</h4>
                    <p>HEMA son las siglas en inglés para las artes marciales históricas europeas. Espadas, escudos,  lanzas…
                      Si te interesa aprender cómo se usaban estas armas no dudes en acercarte.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-workshops">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-workshops" aria-expanded="false" aria-controls="collapse-workshops">
              Talleres
            </button>
          </h2>
          <div id="collapse-workshops" class="accordion-collapse collapse" aria-labelledby="heading-workshops" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Crea con tus propias manos recuerdos únicos como tazas personalizadas, lámparas japonesas y otras manualidades que te permitirán dar rienda suelta a tu creatividad y llevarte un bonito recuerdo del evento.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Pintado de jarras</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Creación de personajes para rol en vivo</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Chapas</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Dibujos chibi/kawaii</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Bordado Pokémon</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Varitas</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Pintado de Darumas</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fotografía de retrato artístico</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Taller de Retrato Artístico.pdf" role="button">Dossier</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Ilustración y cómic: creación de personajes</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">"¿Y tú de qué te ríes?": Cómo hacer comedia en la literatura</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Construye tu propia cámara oscura (fotografía)</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Academia Jedi infantil</h4>
                    <p>En la Academia Jedi, un lugar donde aprenderás la senda Jedi, conocerás los conceptos básicos de la fuerza y aprenderás las nociones básicas del manejo del sable.
                      ¿Serás capaz de superar con éxito las pruebas y conseguir tu diploma?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">¡Inscríbete!</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php include("/include/footer.php"); ?>
    <!-- Footer End -->

    <!-- Bootstrap JS bundle w/ Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- jQuery JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  </body>
</html>
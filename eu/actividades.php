<!DOCTYPE html>
<html lang="eu">
  <head>
    <!-- Header tags and common CSS -->
    <?php
      $title = "Jarduerak";
      require("include/head.php");
    ?>

    <!-- Page CSS -->
    <link href="/styles/actividades.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Start -->
    <?php include("include/header.php"); ?>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container-md ff-main-gutter my-5">
      <h1 class="f-uncial-r mb-5">Jarduerak</h1>

      <div class="accordion" id="accordion-activities">
        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-board-games">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-board-games" aria-expanded="false" aria-controls="collapse-board-games">
              Mahai-jokoen ludoteka
            </button>
          </h2>
          <div id="collapse-board-games" class="accordion-collapse collapse" aria-labelledby="heading-board-games" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Goza ezazu joko aukera anitzeko ludotekaz, ekitaldi osoan zure aukerara egongo dena, joko eta esperientzia berriak ezagutu ditzazun, edo betiko klasikoetara bueltatzeko.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-tournaments">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-tournaments" aria-expanded="false" aria-controls="collapse-tournaments">
              Txapelketak
            </button>
          </h2>
          <div id="collapse-tournaments" class="accordion-collapse collapse" aria-labelledby="heading-tournaments" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Lehia zaitez beste erronkarien aurka mahai jokoetan, wargame desberdinetan, kartetan etab. eta gure kolaboratzaileek eskeinitako sari bikainen irabazle izateko borroka zaitez.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Infinity</h4>
                    <p>Ekarri zure talderik onena eta parte hartu espainiar markako wargaming jokorik ospetsuenaren txapelketa honetan.
                      Fakzio askok lortu dute jada izarretara iristea, unibertso honetan 175 urte etorkizunean, baina fakzio guztietatik bakar bat soilik geratu daiteke!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases TORNEO FREAK FESTIVAL22 Infinity.pdf" role="button">Txapelketaren oinarriak</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Mahai- eta karta-jokoen txapelketak</h4>
                    <p>Jokalari lehiakorren aurka zure mahai- eta karta-joko gogokoenetan jokatzen saiatu nahi duzu, jokalari onena nor den erakusteko?
                      Lehen araua ondo pasatzea da, baina podiumak ikuskizuna eskatzen du!</p>

                    <p>Joko hauetan parte hartu ahal izango da: Catan, King of Tokyo, Monolith Arena, Ordered Witch, Magic eta Yu-Gi-Oh!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases juegos de mesa y cartas.pdf" role="button">Txapelketen oinarriak</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Super Smash Bros.</h4>
                    <p>Beste jokalariei aurka egin borroka bideo-joko zoroenean!
                      Gai izango al zara aurkari guztiak garaitu eta lehen postua lortzeko?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases smash bros FF22.pdf" role="button">Txapelketaren oinarriak</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
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
              Rol-partidak
            </button>
          </h2>
          <div id="collapse-rpg" class="accordion-collapse collapse" aria-labelledby="heading-rpg" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Abentura zirraragarrienak bizi itzazu fantasiazko, zientzia fikziozko, terrore etab. munduetan bidaiatzen diren heroi taldeen parte izanez. Partida zuzendari batek gidatuta, zuen istorioa kontakizunen merezidun izango dela bermatuko du.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Alien mahai-rola</h4>
                    <p>Titan Estazioak, Weyland-Yutaniren metropoli korporatiboak, transmititzeari utzi dio.
                      Laguntza seinale nahasgarri baten ostean, Marine Kolonialen Defentsa Taldea jazoera ikertzeko prestatzen ari da… amesgaizto beldurgarrienera era arriskutsuan hurbiltzen ari direla jakin gabe.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">The Witcher mahai-rola</h4>
                    <p>Armadaren igarotze gupidagabearen ostean, Redaniako herriak babesgabe gelditu dira, bidelapur, pizti eta munstroen esku.
                      Garai zail hauetan ez dute aurrera egingo, bere basoan bizi denaren berri ez baitira…</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Ziegak eta Herensugeak (Dungeons & Dragons) mahai-rola - Larunbata</h4>
                    <p>Mota guztietako izakiek denbora luzeetan zehar ekaitz bortitzetatik babestea bilatzen dute.
                      «Ekaitzaren bakeak» deitutakoa, tradizio honek biztanleen arteko desberdintasunak alde batera uzten laguntzen du.
                      Baina gordeleku batzuk besteak baino hobeak dira, eta izaki guztiek ez dute ekaitzaren bakea errespetatzen.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Ziegak eta Herensugeak (Dungeons & Dragons) mahai-rola - Igandea</h4>
                    <p>Misio batetik porrot egin ostean bueltan zaudete, eta iriabazi duzuen miseriarekin, zerbait eskas jateko baino ez duzue izango.
                      Bat-batean, bidearen alde batean, armadura bat aurkitzen duzue, baina ez edozein armadura. Kalitate ezinhobeko piezak dira, Lathanderren, egunsentiaren eta bersormenaren jainkoa beraren, sinboloa dutenak.
                      Begirada altxatzean, hainbat baliozko objetu ikusten dituzue lurrean, bide antzerako bat markatzen, urjauzi baten soinurantz daramanak.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">1800: El Ocaso de la Humanidad mahai-rola</h4>
                    <p>1800. urtea Evropa, 100 urte igaro dira infernuko deabruek Hispaniaren ekialdetik irekitzea lortu zutenetik.
                      Momentu horretatik aurrera botere bedeinkatuak eta gaiztoak agertu dira, folklorea bizia hartzen ari da eta teknologia kontroletik kanpo dago.
                      Dena kaos politiko eta sozialean murgiltzen da. Gai izango al zara mehatxu guzti horiei aurre egiteko?
                      Ezagutu 1800: El Ocaso de la Humanidad.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Gurtza izendaezinak mahai-rola</h4>
                    <p>Munduan badira diruditenak baino harago doazen gauzak. "Mitoak" errealitatearen patuari eragiten dioten errealitateetan eraikitzen dira.
                      Hori aurkitu zenuen zure kultuarekin bat egin zenuenean. Orain, hilabete batzuetako estropaden ondoren, deabruaren besaulki ospetsua eskuratu duzue.
                      Jasotzera joatea besterik ez da geratzen.</p>

                    <p><span class="fst-italic">Gurtza izendaezinak</span> mahai gaineko rol joko bat da, Hitos Sistemaz baliatzen dena kultista baten larruan jartzeko.
                      Zure helburuak lortuko dituzu, nahiz eta bidean dena arriskatu behar, baita zure gizatasuna ere?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cthulhu-ren deia mahai-rola</h4>
                    <p>Rupert Merriweather Arkham hiriko Santa Maria Ospitalean ingresatu dute.
                      Zerbait oso garrantzitsua kontatu nahi dizuelako deitu dizue, "hil ala biziko kontua da", dio.</p>

                    <p>Zure adiskidetasunak gaixoaren beste lagun batzuekin elkartzera eramaten zaituzte.
                      Elkarrekin misterio bitxi bat argitu beharko duzue, egiptoar sinbolo batzuekin, anbarezko pieza batean txertatutako intsektu bitxi batekin eta orain arte sekretu aitorrezina izan zenarekin lotua.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Laurogeiko hamarkadako rola</h4>
                    <p><span class="fst-italic">Laurogeiko hamarkadako rola</span> 1980tik 1989ra argitaratutako rol espainiarrari buruzko partida bat da, non unibertsoa eta joko-sistema aldatzen diren, baina ez pertsonaiak.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Symbaroum mahai-rola</h4>
                    <p>Symbaroum, jatorri suediarreko jokoa, Baltikoko mitologian inspiratutako Erdi Aroko fantasiazko mundu batean murgiltzen gaitu.
                      Abentura honetan, errefuxiatu talde batekin joango gara mendietan zehar, agindutako lurraldera, Ambriara, iristeko.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">My Little Pony mahai-rola</h4>
                    <p>Mane Six-ek misio garrantzitsu bat bete behar dute irla baldarretan. Hain bat-batean jakin dutenez, ezin izan dituzte maskotak haurtzaindegira bidali.
                      A ze poniekin egin dute topo, beren aukera bakarra agerian geratu baita. Haien maskotak zaindu beharko dituzue, irletatik itzul daitezkeen arte.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Umeentzako mahai-rola</h4>
                    <p>Hondamenak irabazi duen mundu batean, Jaun Ilunak guztien gainetik agintzen du, eta bere goblin laguntzaile taldetxo batek bidaia bat egingo du urrutiko dorre batera, bertan dagoen aztia aurkitzeko eta beraien jaunari konpetentzia egiten geldiarazteko.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Crazy Rol rol bizia</h4>
                    <p>Izan zaitez istorio inprobisatu eroen parte, 10-15 minutuko txandatan. Hauetan, joko zuzendariak emandako pertsonaia interpretatuko duzu, beste partaideekin istorioa eraikiz.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Olinpo rol bizia</h4>
                    <p>Jainko, erdi-jainko eta gizaki estimatuok: ni, Dionisios, Zeus gorenaren ordezkari, pozik gonbidatzen zaituztet Anbrosiako uzta berriko ongietorri eta dastatze festara, Olinpo mendiko lorategietan.
                      Noski, edari gehiago egongo dira, eta, sorta berria iristen den bitartean, aurreko urtekoa edateaz amaituko dugu, eta musika, jolasak, dantzak eta hainbat dibertimendu izango dira.
                      Noski, armak debekatuta daude.</p>

                    <p>Mesedez, konfirmatu zuen asistentzia eta izan denok ongi etorriak.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Viena 1914 rol bizia</h4>
                    <p>Ekintza Vienan kokatzen da 1914an, Gerra Handia hasi baino lehentxeago.
                      Vienako gortean festa bat ospatzen da von Hammerschich dukesaren onomastikaren alde, eta Austria-Hungariako Inperioko eta haren aliatuetako pertsonaia oso garrantzitsuak daude gonbidatuta, Francisco Jose enperadorea eta Francisco Fernando artxidukea barne, haren iloba eta tronuaren ondorengoa.
                      Afari oparoa bilera pribatu batean amaitzen da, gauerdi aldera arte luzatuko dena.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
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
              Lehiaketak
            </button>
          </h2>
          <div id="collapse-contests" class="accordion-collapse collapse" aria-labelledby="heading-contests" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Parte hartu ezazu gure cosplay, istorio labur, fast manga etab. lehiaketetan eta gure kolaboratzaileek eskeinitako sari bikainen irabazle izateko aukera izan ezazu.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Asian Dance Contest</h4>
                    <p>Ez galdu Kuàizi elkarte zoragarriak antolatutako K-pop dantza lehiaketan parte hartzeko aukera.
                      Taldeka edo banaka, orain korear estilo berrienaren erritmora dantza dezakezu!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases KADC FreakFestival 2022.pdf" role="button">Lehiaketaren oinarriak</a>
                      </div>
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://forms.gle/P1szQdB9QZfDz1LeA" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cosplay</h4>
                    <p>Jantzi zure trajerik onena eta emaiozu bizitza zure pertsonai gogokoenari.
                      Gure epaimahaiko adituek jantzien joskintza, fabrikazioa eta xehetasunak baloratuko dituzte, hala nola eszenatokian emandako ikuskizuna.
                      Prestatu zaitez publikoa liluratzeko!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases cosplay 22.pdf" role="button">Lehiaketaren oinarriak</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Painting</h4>
                    <p>Erlojupean, lehen postua merezi duen miniatura margotzeko gai zarela uste duzu? Erakutsi zure maisutasuna pintzelarekin lehiaketa honetan.
                      Gogoratu, tenporizadorea ez da gelditzen pintura lehortzen den bitartean!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/FREAK FESTIVAL CONCURSO FAST PAINTING.pdf" role="button">Lehiaketaren oinarriak (espainieraz)</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Fic</h4>
                    <p>Zure irudimena eta trebetasun literarioa erlojuaren kontra probatu nahi badituzu, hemen duzu bilatzen zenuen erronka.
                      Sortu zure kontakizunik onena ekitaldian zehar eta hunkitu epaimahaia zure hitzekin.</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases fast fic.pdf" role="button">Lehiaketaren oinarriak</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Fast Comic</h4>
                    <p>Denbora errekorrean komic formatuan istorio on bat sortzeko gai zarela uste duzu?
                      Hartu zure marrazki-materiala eta erakuts iezaguzu zer egiteko gai zaren!</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Bases fast comic.pdf" role="button">Lehiaketaren oinarriak</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Miniaturen margoketa</h4>
                    <p>Zenbat trebetasun daukazu plastikoaren gainean kolore akrilikoekin? Edo erretxina agian? Edo metala?
                      Berdin dio miniaturaren materiala, interesatzen zaiguna da zein ondo utzi diozun gainean daraman pintura-geruza, beraz, erakuts iezaguzu zure artea pintzelarekin eta aurkariak birrindu lehiaketa honetan!</p>

                      <div class="row gy-3 mb-3">
                        <div class="col-auto">
                          <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button">Lehiaketaren oinarriak</a>
                        </div>

                        <div class="col-auto">
                          <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                        </div>
                      </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Dioramak</h4>
                    <p>Miniatura bat erronka nahikoa ez dela sentitzen baduzu, zergatik ez listoia igo?
                      Ekarri zure maisulana diorama formatuan eta utzi zure pintura-trebetasunari eta eszenak sortzeko ahalmenari lehen postua eskuratzen lehiaketa honetan!</p>

                      <div class="row gy-3 mb-3">
                        <div class="col-auto">
                          <a class="btn btn-ffcyan" href="/docs/Miniaturas, Dioramas (Bases).pdf" role="button">Lehiaketaren oinarriak</a>
                        </div>

                        <div class="col-auto">
                          <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
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
              Dendak, artistak eta artisauak
            </button>
          </h2>
          <div id="collapse-stands" class="accordion-collapse collapse" aria-labelledby="heading-stands" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Deskubritu itzazu gure hobbien hedapena bermatzen dituzten egile eta negozio lokalak, haien produktuak munduari ezagutarazi nahi dutenak.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-talks">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-talks" aria-expanded="false" aria-controls="collapse-talks">
              Hitzaldi eta erakustaldiak
            </button>
          </h2>
          <div id="collapse-talks" class="accordion-collapse collapse" aria-labelledby="heading-talks" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Zure hobby gogokoetaz ikasi ezazu aditu desberdinek eskeinitako hitzaldi eta erakuskizunetan. Arloak mota anitzetakoak izango dira: arte, cosplay, literatura, arte martzialak etab.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">FineArt argazkilaritza</h4>
                    <p>FineArt argazkilaritza argazkilari errealista edo erretratua izan daitekeenetik urruntzen da, margolan batera edo zerbait irrealagora gehiago hurbiltzeko.
                      Kasu honetan, hitzaldian, ideia nola argitu dezakegun ikusiko dugu, zer gauza hartu beharko ditugun kontuan argazkia egiterakoan, edizioan dena ondo integratuta gera dadin eta errealista izan dadin.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Zer da rol bizia?</h4>
                    <p>Rol bizia pertsonaia baten behin-behineko errepresentazioan oinarritutako jolas inmersibo bat da. Jolas zuzendari batek edo hainbatek gidatutako abentura bizitzeko aukera izango duzu.
                      Zure historia pertsonalaren protagonista izateaz gehiago jakin nahi baduzu, hitzaldi hau zuretzat egina dago.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol bizirako jantziak eta atrezzoa</h4>
                    <p>Saio honetan rol biziko zure pertsonaia jantzi eta atrezzoaren bitartez hurrengo mailara nola jaso ikasiko duzu.
                      Geruza sistemari buruz hitz egingo da, xehetasunen garrantzia jorratuz.
                      Hitzaldiak sormenaren inguruan biratuko du, derrigorrez dirua erabili beharrean etxetik topa daitezkeen gauzak erabiliz zure pertsonaiari nortasuna emateko bide alternatiboak eskainiz.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cosplay pertsonaientzako makillaje eta karakterizazioa</h4>
                    <p>Hitzaldi honetan zure pertsonaia gogokoenen karakterizazioa hobetzeko gakoei buruz arituko gara.
                      Alderdi funtsezkoenetatik, hala nola lentillen aukeraketa, makillaje mota, ileordeak… protesi eta FX makillajeari buruz hitz egitera.
                      Saioaren amaieran, ariketa praktiko/interaktibo bat egongo da, non aipaturiko materialak probatzeko aukera edukiko duzuen.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cosplay armaduraren oinarriak</h4>
                    <p>Cosplayaren alderdi ikusgarrienetariko bat pertsonaia desberdinen armadurak dira.
                      Hitzaldi honetan funtsezko alderdiak jorratuko dira: Material hautaketa, konformatze teknikak, margotua eta zahartzea pieza desberdinentzat.
                      Saioa Burning Flare cosplayerrak emango du.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Armak fikzioan</h4>
                    <p>Fikzioan armamentuaren egiazkotasun historikoak intrigatzen zaitu? Orduan hau zure hitzaldia da.
                      CSE Esgrima Klubetik oso hitzaldi interesgarria ekartzera datoz Freak Festivalera, fikziozko armei buruzkoa; bai su-armamentu ultra teknologiko ahaltsua, bai eta arma zuri bitxi eta anakronikoak.
                      Gure hizlariak adituak dira eta, fikziozko lanetan aurki ditzakegun arma nagusiak aztertzeaz gain, fikziozko arma horiek eskaintzen dituzten erabilera eta aukeren balorazioa egingo dute benetako ikuspegitik, arma zuriak edo benetako su-armak erabiltzeko oinarrizko printzipioek gidatuta.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Cerbero Argitaletxearen aurkezpenak</h4>
                    <p>Gasteizko idazleen bi eleberri laburren aurkezpena.
                      Virginia Orive de la Rosaren <a href="https://www.editorialcerbero.com/producto/intrigancles"><span class="fst-italic">Intrigancles contra el sistema demostrático</span></a> eta Leticia S. Murgaren <a href="https://www.editorialcerbero.com/producto/cartas-tras-el-velo"><span class="fst-italic">Cartas tras el velo</span></a>.</p>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">HEMA erakustaldiak</h4>
                    <p>HEMA ingelesezko siglak dira europako arte martzial historikoetarako. Ezpatak, ezkutuak, lantzak…
                      Arma horiek nola erabiltzen ziren ikasi nahi baduzu, hurbildu zaitez.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0 my-3">
          <h2 class="accordion-header" id="heading-workshops">
            <button class="accordion-button rounded-pill collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-workshops" aria-expanded="false" aria-controls="collapse-workshops">
              Tailerrak
            </button>
          </h2>
          <div id="collapse-workshops" class="accordion-collapse collapse" aria-labelledby="heading-workshops" data-bs-parent="#accordion-activities">
            <div class="accordion-body">
              <p>Sor itzazu zure eskuekin oroigarri berdingabeak, hala nola, katilu pertsonalizatuak, lanpara japoniarrak eta bestelako eskulanak. Zure sormenaren ateak irekitzeko aukera paregabea benetan.</p>

              <ul class="list-group list-group-flush">
                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Pitxerren margoketa</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Rol bizirako pertsonaien diseinua</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Txapak</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Chibi/kawaii marrazkiak</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Pokémon bordatuak</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Hagaxkak</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Daruma margoketa</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Erretratu artistikoaren argazkilaritza</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffcyan" href="/docs/Taller de Retrato Artístico.pdf" role="button">Txostena (espainieraz)</a>
                      </div>

                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Ilustrazioa eta komikia: pertsonaien diseinua</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">"Eta zuk zertaz egiten duzu barre?": Komedia literaturan nola egin</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Eraiki zure kamera iluna (argazkilaritza)</h4>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="list-group-item mb-3">
                  <div>
                    <h4 class="mb-3">Umeentzako Jedi Akademia</h4>
                    <p>Jedi Akademian, Jediaren bidea jarraitzen ikasiko duzun toki bat, indarraren oinarriak eta sablearen erabileraren fundamentuak ikasiko dituzu.
                      Prest al zaude probak gainditzeko eta zure diploma irabazteko?</p>

                    <div class="row gy-3 mb-3">
                      <div class="col-auto">
                        <a class="btn btn-ffyellow" href="https://docs.google.com/forms/d/e/1FAIpQLSegCGpGsfshRXC8Bog50AkWzQ2N0oWHiBFrfvwkngYI0Q0dkA/viewform" role="button">Izena eman!</a>
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
    <?php include("include/footer.php"); ?>
    <!-- Footer End -->

    <!-- Bootstrap JS bundle w/ Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- jQuery JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  </body>
</html>
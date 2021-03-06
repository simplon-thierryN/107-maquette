<?php
session_start();
?>
<!DOCTYPE html>
<html lang"fr_FR">
<head>
  <meta charset="utf-8">
  <title></title>

  <link rel="stylesheet" media="screen" href="css/css.css" type="text/css">
  <link rel="stylesheet" href="css/contact.css" media="screen" title="no title" charset="utf-8">
  <script src="js/jquery-1.11.3.js"></script>
  <script  type="text/javascript" src="js/base.js"></script>
</head>
<body>
  <div class="container">
    <div class="btn_menu">
      <img src="img/menu.png" alt="icon menu" />
      <h3>Menu</h3>
    </div>

    <div class="menu">
      <nav>
        <h3>MENU</h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#ecosysteme">Ecosystème</a></li>
          <li><a href="#missions">Nos missions</a></li>
          <li><a href="#engagements">Nos engagements</a></li>
          <li><a href="#connaitre">Qui sommes-nous?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <a id="home"></a>
    <section class="header">
      <div class="containerBis">
        <h1><img src="img/107-Q.png" alt="logo 107" /></h1>
        <article class="infos">
          <p >
            Lecentsept est une association qui regroupe Lyon Métropole et des Grands Comptes autour de 5 acteurs de l'innovation sociale : <a href="#">Ashoka</a>, <a href="#">le Mouves</a>, <a href="#">In Homine</a>, <a href="#">Etic</a> et <a href="#">Ronalpia</a>.
            Tous ensemble, nous souhaitons accompagner les entrepreneurs sociaux porteurs de solutions, pour le territoire métropolitain.

            Tout jeune projet né en Janvier 2016, nous avons pour objectif de devenir le pôle d'excellence français en innovation sociale.
          </p>
        </article>
      </div>
    </section>

    <section class="ecosysteme">
      <a id="ecosysteme"></a>
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Ecosystème</h2> <span><p>super span</p></span>
        </div>

        <img src="img/schema-107.png" alt="schema107" />
      </div>
    </section>

    <section class="missions">
      <a id="missions"></a>
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Nos Missions</h2> <span><p>super span</p></span>
        </div>
        <div class="bloc" id="barometre">
          <img src="img/lyon-panorama-NB.jpg" alt=lyon"" />
          <article>
            <h4>Baromètre des besoins</h4>
            <p>
              Détection des besoins sociaux du territoire dans tous les domaines.
            </p>

            <ul class="emploi">
              <h5>Emploi</h5>
              <li>Emploi et insertion.</li>
              <li>Education et jeunesse</li>
            </ul>

            <ul class="cadre">
              <h5>Cadre de vie</h5>
              <li>Consomation</li>
              <li>Environnement</li>
            </ul>

            <ul class="solidarite">
              <h5>Solidarité</h5>
              <li>logement</li>
              <li>Vivre ensemble</li>
              <li>Santé</li>
            </ul>
          </article>
        </div>

        <div class="bloc" id="detection" >
          <img src="img/Ashoka travail.jpg" alt="ashoka" />
          <article>

            <h4>Détection et sélection</h4>
            <p>
              Sélection des pépites entrepreneuriales pour résoudre les besoins du territoire.
            </p>
          </article>
        </div>

        <div class="bloc" id="accompagnement">
          <img src="img/lamp-nb.png" alt=lyon"" />
          <article>
            <h4>Accompagnement</h4>
            <p>
              Incubation, booster, transfert d'expertise pour maximiser l'impact social des entrepreneurs.
              Parainage de nos entrepreneurs sociaux et mécénat.
            </p>
          </article>
        </div>

        <div class="bloc" id="selection">
          <img src="img/EC50CC8658.jpg" alt=lyon"" />
          <article >
            <h4>Détection et sélection</h4>
            <p>
              Essaimage, duplication, co-création sur le territoire grâce à nos expert.
            </p>
          </article >
        </div>

        <div class="bloc" id="promotion">
          <img src="img/lyon-NB.jpg" alt=lyon"" />
          <article>
            <h4>Promotion de l'entrepreunariat</h4>
            <p>
              Evénement, mise en réseau, animation de la communauté pour faire vivre notre écosystème.
            </p>
          </article >
        </div>

      </div>
    </section>

    <section class="engagements">
      <a id="engagements"></a>
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Nos Engagements</h2> <span><p>super span</p></span>
        </div>
        <div class="pour_le_territoire">
          <div class="back-territoire">  </div>
        </div>
        <ul class="ul_territoire">
          <h4>Pour le territoire</h4>
          <li>- Répondre aux besoins ou aux défis du territoire en apportant des solutions à travers les projets.</li>
        </ul>

        <div class="porteurs_de_projet">
          <div class="back-projet">  </div>
        </div>

        <ul class="ul_projet">
          <h4>Pour les porteurs de projet</h4>
          <li>- Accueillir tous les acteurs dès lors qu'ils sont porteurs d'une initiative à impact social, sociétal ou environnemental.</li>
          <li>- Leur permettre de démultiplier leur impact.</li>
          <li>- Cultiver l'échange entre individus de différents horizons dans un espace partagé.</li>
        </ul>

        <div class="le_centsept">
          <div class="back-centsept">  </div>
        </div>

        <ul class="ul_centsept">
          <h4>Pour le centsept</h4>
          <li>- Structurer un modèle économique hybride basé sur une gouvernance équilibrée.</li>
        </ul>

      </div>
    </section>

    <section class="connaitre">
      <a id="connaitre"></a>
      <div class="containerBis">
        <div class="title">
          <span><p>super span</p></span>
          <h2>Qui sommes nous?</h2> <span><p>super span</p></span>
        </div>

        <div class="acteurs"></div>
        <div class="partenaires">
          <h3>Nos Principaux Partenaires</h3>
          <div class="prives"></div>
          <div class="institutionnels"></div>
        </div>

        <div class="territoire">
          <h3>Ils œuvrent déjà sur le territoire </h3>
        </div>
      </div>
    </section>

    <section class="contact">
      <a id="contact"></a>
        <h2>Contacts</h2>



      <div id="contact_form">


        <?php  if(array_key_exists('errors', $_SESSION)) :?>
        <div class="error_contact">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
      <?php endif; ?>
        <?php  if(array_key_exists('success', $_SESSION)) :?>
        <div class="success_contact">
          Votre mail a bien été envoyé
        </div>
      <?php endif; ?>

        <form action="post_contact.php" method="post">

          <label for="inputname" >Votre Nom : <em>(*)</em></label>
          <input type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">

          <label for="inputmail">Votre Mail : <em>(*)</em></label>
          <input type="email" name="email" id="inputmail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">

          <label for="inputsociete" >Votre Société :</label>
          <input type="text" name="societe" id="inputsociete" value="<?= isset($_SESSION['inputs']['societe']) ? $_SESSION['inputs']['societe'] : ''; ?>">

          <label for="inputobjet" >Objet : <em>(*)</em></label>
          <input type="text" name="objet" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">

          <label for="inputmessage">Votre Message : <em>(*)</em></label>
          <textarea name="message" rows="8" cols="40" id="inputmessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>

          <button type="submit" name="button">Envoyer</button>

        </form>

      </div>
      </body>
      </html>

      <?php

      unset($_SESSION['inputs']);
      unset($_SESSION['errors']);
      unset($_SESSION['success']);

       ?>

    </section>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/js.js"></script>
</html>

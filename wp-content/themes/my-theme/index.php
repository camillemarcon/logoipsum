<?php get_header(); ?>

<div class="container">

    <?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    /*the_content();*/
	  
	  $banner_img = get_field('banner_background_image');
	  $banner_lien = get_field('banner_register_link');
      $conference_img = get_field('conference_img');
      $program_img = get_field('program_image');
	  $program_lien = get_field('program_register_link');
?>
    <!-- CODE HTML-->
    <section class="section-1" style="background-image:url(<?php echo $banner_img['url']; ?>)">
        <div>
            <p class="section-title"><?php the_field('banner_baseline'); ?></p>
            <h2 class="section-txt1"><?php the_field('banner_title_brown'); ?></h2>
            <h2 class="section-txt2"><?php the_field('banner_title_green'); ?></h2>
            <a href="<?php echo $banner_lien['url']; ?>" class="inscription-button"><?php echo $banner_lien['title']; ?></a>
        </div>
    </section>

    <section class="section-2">
        <div>
            <h2 class="section-txt1" id="letter-spacing"><?php the_field('conference_title'); ?></h2>
            <p class="section-title" id="section2txt"> <?php the_field('conference_content'); ?></p>
        </div>
    </section>

    <section class="section-3" style="background-image:url(<?php echo $conference_img['url']; ?>)">
    </section>

    <section class="section-4">
        <h2 class="section-txt1" id="letter-spacing"><?php the_field('programme_title'); ?></h2>
        <div class="section-4-programme">
            <div class="section-4-leftpart">
                <h4 class="green-title"><?php the_field('programme_subtitle1'); ?></h4>
                <?php 
                    $programs = get_field('program_repeater');
                    if ($programs) {
                        echo"<ul>";
                        foreach($programs as $program) {
                            echo '<li> <b>' . $program['hour'] . '</b>' . $program['description'] . '</li>' ;
                        }
                        echo "</ul>";
                    }         
                    ?>
            </div>

            <div class="section-4-rightpart">
                <h4 class="green-title"><?php the_field('programme_subtitle2'); ?></h4><br>
                <?php 
                    $programs_2 = get_field('program_repeater_2');
                    if ($programs_2) {
                        echo"<ul>";
                        foreach($programs_2 as $program) {
                            echo '<li> <b>' . $program['hour_2'] . '</b>' . $program['description_2'] . '</li>' ;
                        }
                        echo "</ul>";
                    }         
                    ?>
            </div>
        </div>
        <div class="plus">
            <a href="<?php echo $program_lien['url']; ?>" class="inscription-button"><?php echo $program_lien['title']; ?></a>
            <img id="img-programme" src="<?php echo $program_img['url']; ?>" alt="image programme">
        </div>

    </section>

    <section class="section-5">
        <div>
            <p class="section-txt1" id="letter-spacing">Les orateurs</p>
            <h2 id="section2txt">Lorem ipsum calidae por portittor et sit amet dolor callis</h2>
            <ul>
                <li>
                    <div class="orateur-img"></div>
                    <p id="nom">Win de Vries</p>
                    <p id="info">Loremp ipsum calidae (1)</p>
                    <div class="bouton_orateur"><img alt="image_lecture" src="assets/img/picto-time.svg"><a href="#">Lire la vidéo</a></div>
                </li>
                <li>
                    <div class="orateur-img"></div>
                    <p id="nom">Win de Vries</p>
                    <p id="info">Loremp ipsum calidae (1)</p>
                    <div class="bouton_orateur"><img alt="image_lecture" src="assets/img/picto-time.svg"><a href="#">Lire la vidéo</a></div>
                </li>
            </ul>

        </div>
    </section>

    <section class="section-6">
        <div>
            <p class="section-txt1" id="letter-spacing">informations pratiques</p>
            <div class="lieu">
                <div class='green-rectangle'>
                    <div class="info_lieu">
                        <img src="assets/img/462-200.png">
                        <p>Square Brussels Mont des Arts 1000 Bruxelles Belgique</p>
                    </div>

                    <div class="info_time">
                        <img src="assets/img/462-200.png">
                        <p>Le 03.12.2019 de 8h30 à 12h30</p>
                    </div>
                    <div class="info_dinner">
                        <img src="assets/img/462-200.png">
                        <p>Healthy <br> Walking Dinner</p>
                    </div>
                </div>
                <div class="bouton_carte"><img alt="picto-carte" src="assets/img/picto-map.svg"><a href="#">voir sur la carte</a></div>
            </div>
        </div>
    </section>

    <section class="section-7">
        <div>
            <p class="section-txt1" id="letter-spacing">Vidéos</p>
            <div class="video-flex">
                <div class="video1">
                    <h3> Le potager du roi </h3>
                    <div class="auteur">Antoine jaconhson </div>
                    <div class="video-container1">
                        <video controls width="10020" height="840" playsinline class="video1">
                            <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                            <source src="video/video-cosmo.webm" type="video/webm">
                            <source src="video/video-cosmo.ogv" type="video/ogg">
                        </video>
                    </div>
                </div>
               <div class="video2">
                    <h3> Eco-citoyenneté </h3>
                    <div class="auteur" id="auteur2">Flora Joubier</div>
                    <div class="video-container2">
                        <video controls width="10020" height="840" playsinline class="video1">
                            <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                            <source src="video/video-cosmo.webm" type="video/webm">
                            <source src="video/video-cosmo.ogv" type="video/ogg">
                        </video>
                    </div>
                </div>
                <div class="video3">
                    <div class="video-container3">
                        <video controls width="10020" height="840" playsinline class="video1">
                            <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                            <source src="video/video-cosmo.webm" type="video/webm">
                            <source src="video/video-cosmo.ogv" type="video/ogg">
                        </video>
                    </div>
                    <div class=information></div>
                </div>
    

            </div>

        </div>
    </section>

    <section class="section-8">
        <?php $news = new WP_Query( array('post_type' => 'post') );
		while($news->have_posts()){
			$news->the_post();
			echo get_the_title();
            echo get_the_content();
		}
	  ?>
    </section>


    <?php
  }
}
?>

</div>

<?php get_footer(); ?>

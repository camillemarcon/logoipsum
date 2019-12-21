<?php get_header(); ?>

<div class="container">

    <?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /*
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
      $orateur_img = get_field('orateur_image');
      $orateur_lien = get_field('orateur_link');
      $actu_lien = get_field('actus_link');

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
            <p class="section-txt1" id="letter-spacing"><?php the_field('orateur_title'); ?></p>
            <h2 id="section2txt"><?php the_field('orateur_sub_title'); ?></h2>
            <?php
            $ora = get_field('orateur_repeater');
      if ($ora) {
      echo"<ul>";
                foreach($ora as $oras) { ?>

            <div class="margin">
                <div class="orateur-img"></div>
                <p id='nom'><?php $oras['orateur_name']?></p>
                <p id='info'><?php $oras['orateur_function']?></p>
                <div class='bouton_orateur'><img alt='image_lecture' src='assets/img/picto-time.svg'><a href="<?php echo $orateur_lien['url']; ?>"> <?php echo $orateur_lien['title']; ?></a></div>
            </div>
            <?php } }?>
            <?php echo"</ul>";?>

        </div>
    </section>

    <section class="section-6">
        <div>
            <p class="section-txt1" id="letter-spacing"><?php the_field('infos_title');?></p>

            <?php $info_img = get_field('infos_background_image');?>

            <div class="lieu" style="background-image:url(<?php echo $info_img['url']; ?>)">
                <div class='green-rectangle'>
                    <div class="info_lieu">
                        <img src="assets/img/462-200.png">
                        <p><?php the_field('info_adresse_localisation'); ?></p>
                    </div>

                    <div class="info_time">
                        <img src="assets/img/462-200.png">
                        <p><?php the_field('info_texte_horaire');?>
                        </p>
                    </div>
                    <div class="info_dinner">
                        <img src="assets/img/462-200.png">
                        <p><?php the_field('info_texte_repas');?>
                        </p>
                    </div>
                </div>
                <div class="bouton_carte"><img alt="picto-carte" src="assets/img/picto-map.svg"><a href="#">voir sur la carte</a></div>
            </div>
        </div>
    </section>

    <section class="section-7">
        <div>
            <p class="section-txt1" id="letter-spacing"><?php the_field('video_title'); ?></p>
            <div class="video-flex">
                <div class="video1">
                    <?php $video1 =  get_field('video_video1'); 
                    $video_poster1  = get_field('video_image_1'); 
                $attr =  array(
                    'mp4'      => $video1,
                    'poster'   => $video_poster1,
                    'preload'  => 'auto');
                echo wp_video_shortcode(  $attr );
                    ?>
                    <h3><?php the_field('video_video1_titre');?></h3>
                    <div class="auteur"><?php the_field('video_vdieo1_auteur');?></div>
                    <div class="video-container1">
                        <video controls width="10020" height="840" playsinline class="video1">
                            <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                            <source src="video/video-cosmo.webm" type="video/webm">
                            <source src="video/video-cosmo.ogv" type="video/ogg">
                        </video>
                    </div>
                </div>
                <div class="video2">
                    <h3><?php the_field('video_video2_titre');?></h3>
                    <div class="auteur" id="auteur2"><?php the_field('video_vdieo2_auteur');?></div>
                    <div class="video-container2">
                        <video controls width="10020" height="840" playsinline class="video1">
                            <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                            <source src="video/video-cosmo.webm" type="video/webm">
                            <source src="video/video-cosmo.ogv" type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>
            <div class="video3-4">
                <div class="video-container3">
                    <video controls width="10020" height="840" playsinline class="video1">
                        <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                        <source src="video/video-cosmo.webm" type="video/webm">
                        <source src="video/video-cosmo.ogv" type="video/ogg">
                    </video>
                </div>
                <div class=information3>
                    <h6> <?php the_field('video_video3_titre');?></h6>
                    <p><?php the_field(' video_vdieo3_auteur');?></p>
                </div>
                <div class="video-container4">
                    <video controls width="10020" height="840" playsinline class="video1">
                        <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                        <source src="video/video-cosmo.webm" type="video/webm">
                        <source src="video/video-cosmo.ogv" type="video/ogg">
                    </video>
                </div>
                <div class=information4>
                    <h6> <?php the_field('video_video4_titre');?></h6>
                    <p><?php the_field('video_vdieo4_auteur');?></p>
                </div>
            </div>

            <div class="video5-6">
                <div class="video-container5">
                    <video controls width="10020" height="840" playsinline class="video1">
                        <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                        <source src="video/video-cosmo.webm" type="video/webm">
                        <source src="video/video-cosmo.ogv" type="video/ogg">
                    </video>
                </div>
                <div class=information5>
                    <h6> <?php the_field('video_video5_titre');?></h6>
                    <p><?php the_field(' video_vdieo5_auteur');?></p>
                </div>
                <div class="video-container6">
                    <video controls width="10020" height="840" playsinline class="video1">
                        <source src="https://cours-mmi.ovh/html-s3/cosmo/video-cosmo.mp4" type="video/mp4">
                        <source src="video/video-cosmo.webm" type="video/webm">
                        <source src="video/video-cosmo.ogv" type="video/ogg">
                    </video>
                </div>
                <div class=information6>
                    <h6> <?php the_field('video_video6_titre');?></h6>
                    <p><?php the_field('video_vdieo6_auteur');?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-8">
        <p class="section-txt1" id="letter-spacing"><?php the_field('actus_title');?></p>



        <div class="article_flex">
            <?php $news = new WP_Query( array(
          
          'post_type' => 'post',
      'posts_per_page' => '4',
          'order' => 'DESC',
      ));
	while($news->have_posts()){
		$news->the_post();
?>
            <div class="article">
                <img src="/screenshots/quick-edit.png" alt='image actualité'>
                <h3><?php echo get_the_title();?></h3>
                <p><?php echo the_excerpt();?></p>
                <a class="button-lire" href="<?php the_permalink(); ?>"><?php echo  $actu_lien ['title']; ?></a>
                <p id="date"><?php echo the_time( get_option( 'date_format' ) );?></p>
            </div>
            <?php } ?>
        </div>
    </section>

    <?php $upload_img1 = get_field('upload_background1');
        $upload_img2 = get_field('upload_background2');
      $upload_icon_img = get_field('upload_icon');
    ?>
    <section class="section-9">
        <div class="img">
            <div class="upload_file1" style="background-image:url(<?php echo $upload_img1['url']; ?>)">
                <h3><?php the_field('upload_titre1'); ?></h3>
                <img src="<?php echo $upload_icon_img['url']; ?>" alt="image téléchargement">
            </div>
            <div class="upload_file2" style="background-image:url(<?php echo $upload_img2['url']; ?>)">
                <h3><?php the_field('upload_titre2'); ?></h3> <img src="<?php echo $upload_icon_img['url']; ?>" alt="image téléchargement">
            </div>
        </div>
    </section>


    <?php } } ?>

</div>

<?php get_footer(); ?>

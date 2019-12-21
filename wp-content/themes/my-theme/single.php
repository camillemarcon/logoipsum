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
?>

    <section class="section-8">
        <?php $news = new WP_Query( array('post_type' => 'post') );
		while($news->have_posts()){
			$news->the_post();
			echo get_the_title();
        echo get_the_content();
		} ?>
    </section>


    <?php } } ?>

</div>

<?php get_footer(); ?>

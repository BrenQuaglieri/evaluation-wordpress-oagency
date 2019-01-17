<?php get_header();

if ( have_posts() ) :
	// Pas besoin de while, je suis certain de n'avoir qu'un seul article
	the_post();

	get_template_part(
		'template-parts/posts/carousel'
	);

endif;

$news_article_number = get_theme_mod( 'oagency_homepage_news_articles_number' );

if ( empty( $news_article_number ) ) {
	$news_article_number = OAGENCY_HOMEPAGE_DEFAULT_NEWS_ARTICLE_NUMBER;
}

$news_query_args = [
	// On veut récupérer des articles (posts) (par défaut post_type est défini à 'post')
	'post_type'      => 'post',
	// Trié par date
	'orderby'        => 'date',
	// Les derniers en premiers
	'order'          => 'DESC',
	// On veut récupérer au max 6 posts
	'posts_per_page' => $news_article_number,
];

$news_query = new WP_Query( $news_query_args );

if ( $news_query->have_posts() ) :
?>
      <div class="actuality col-9">
        <h4>Nos actualité</h4>
        <p>Découvrez nos dernières actualités lorem ipsum dolor sit amet</p>
        <a href="#">Actualités</a>
        <hr>
        <div class="actuality__list row">
          <?php
      	while ( $news_query->have_posts() ) :
      		// On charge les informations du post courant dans les variables globales utilisées par WP (template tags, conditionnal tags)
      		$news_query->the_post();

      		get_template_part(
      			'template-parts/posts/post',
      			'excerpt'
      		);
      	endwhile;

      	// Permet à WP de reprendre sa boucle principale
      	wp_reset_postdata();
      	?>
        </div>
      </div>
      <?php
  endif;?>
      <div class="hello text-center">
        <p class="hello__title">Hello</p>
        <p class="hello__p">Call to action - Lorem ipsum dolor sit amet, consectasseur detemor</p>
        <input type="button" name="button1" value="button click">
        <input type="button" name="button2" value="Another button">
      </div>

<?php get_footer(); ?>

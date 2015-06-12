<?php get_header(); ?>

  <div id="content">

	<?php is_tag(); ?>
  <?php if (have_posts()) : ?>

	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

	  <?php /* If this is a category archive */ if (is_category()) { ?>
	    <h2 class="pagetitle">Archivo de la categoría &#8216;<?php single_cat_title(); ?>&#8217;</h1></br>
	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	    <h2 class="pagetitle">Entradas etiquetadas como &#8216;<?php single_tag_title(); ?>&#8217;</h1></br>
	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	    <h2 class="pagetitle">Archivo del d&iacute;a <?php the_time('F jS, Y'); ?></h1></br>
	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	    <h2 class="pagetitle">Archivo del mes <?php the_time('F, Y'); ?></h1></br>
	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	    <h2 class="pagetitle">Archivo del a&ntilde;o <?php the_time('Y'); ?></h1></br>
	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	    <h2 class="pagetitle">Archivos</h1></br>
	  <?php } ?>


	  <?php while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-content">
        <?php the_content('Lee el resto de esta entrada &raquo;'); ?>
      </div>
      <p class="post-subtitle">Publicado el <?php the_time('l j \d\e F \d\e Y') ?> por <?php the_author() ?>&nbsp;|
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>">#</a>&nbsp;|
        <?php edit_post_link('Editar', '', '&nbsp;|'); ?>  
        <?php comments_popup_link('Sin comentarios (a&uacute;n) &#187;', 'Un comentario &#187;', '% comentarios &#187;'); ?>
      </p>
    </div>

	  <?php endwhile; ?>

  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Entradas anteriores') ?></div>
    <div class="alignright"><?php previous_posts_link('Entradas m&aacute;s nuevas &raquo;') ?></div>
  </div>

  <?php else : ?>

    <h2 class="center">No encontrado</h2>
    <p class="center">Parece que est&aacute;s buscando algo que no est&aacute; aqu&iacute;.</p>
    
  <?php endif; ?>

  </div>

<?php get_footer(); ?>

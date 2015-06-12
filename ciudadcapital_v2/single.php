<?php get_header(); ?>

  <div id="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-content">
        <?php the_content('Lee el resto de esta entrada &raquo;'); ?>
      </div>

      <p class="post-subtitle">
        Categor&iacute;as: <?php the_category(', ') ?>
      </p>
      
      <?php the_tags( '<p class="post-subtitle"><strong>Etiquetas</strong>: ', ', ', '</p>'); ?>
      
      <p class="post-subtitle">Publicado el <?php the_time('l j \d\e F \d\e Y') ?> por <?php the_author() ?>&nbsp;|
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>">#</a>&nbsp;|
        <?php edit_post_link('Editar', '', '&nbsp;|'); ?>  
        <?php comments_popup_link('Sin comentarios (a&uacute;n) &#187;', 'Un comentario &#187;', '% comentarios &#187;'); ?>
      </p>
    </div>

  <?php comments_template(); ?>

  <?php endwhile; else: ?>

    <p>No hay entradas.</p>

<?php endif; ?>

  </div>

<?php get_footer(); ?>

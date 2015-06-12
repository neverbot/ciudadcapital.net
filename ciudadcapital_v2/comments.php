<?php // Do not delete these lines
  if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
      ?>

      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>

      <?php
      return;
    }
  }

  /* This variable is for alternating comment background */
  $oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<div id="comments" class="post">

<?php if ($comments) : ?>
  <h2 class="post-title">
    <?php comments_number('Sin comentarios', 'Un comentario', '% comentarios' );?>
  </h2>

  <div class="post-content">
    <ol class="comment-list">

    <?php foreach ($comments as $comment) : ?>

      <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
        <div class="comment-metadata"><cite><?php comment_author_link() ?></cite> escribi&oacute; el 
          <a href="#comment-<?php comment_ID() ?>" title=""><?php the_time('l j \d\e F \d\e Y') ?> [<?php comment_time() ?>]</a> 
          <?php edit_comment_link('edit','&nbsp;[',']'); ?>:</div>

        <?php if ($comment->comment_approved == '0') : ?>
        <p><em>Tu comentario est&aacute; a la espera de moderaci&oacute;n.</em></p>
        <?php endif; ?>

        <?php comment_text() ?>

      </li>

    <?php
      /* Changes every other comment to a different class */
      $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
    ?>

    <?php endforeach; /* end for each comment */ ?>

    </ol>
  </div>

<?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Los comentarios est&aacute;n cerrados.</p>

  <?php endif; ?>
<?php endif; ?>
</div>

<div id="respond" class="post">
  <?php if ('open' == $post->comment_status) : ?>

  <h2 class="post-title">Deja un comentario</h2>
  <div class="post-content">

    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
    
      <p>Debes hacer <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">log in</a> para escribir comentarios.</p>
    
    <?php else : ?>
    
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ( $user_ID ) : ?>

        <p>Conectado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
          <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Desconectar &raquo;</a></p>

      <?php else : ?>

        <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
        <label for="author"><small>Nombre <?php if ($req) echo "(necesario)"; ?></small></label></p>

        <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
        <label for="email"><small>E-Mail (no se publicar&aacute;) <?php if ($req) echo "(necesario)"; ?></small></label></p>

        <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url"><small>Web</small></label></p>

      <?php endif; ?>

      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

      <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

      <p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentario" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      </p>
      
      <?php do_action('comment_form', $post->ID); ?>

      </form>

    <?php endif; // If registration required and not logged in ?>
  
  </div>

  <?php endif; // if you delete this the sky will fall on your head ?>
</div>



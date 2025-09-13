<?php
/**
 * The template for displaying comments
 *
 * @package Webjfix Starter Theme
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( $comment_count === 1 ) {
                printf( __( 'One Comment', 'webjfix' ) );
            } else {
                printf(
                    __( '%s Comments', 'webjfix' ),
                    number_format_i18n( $comment_count )
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                 'short_ping' => true,
                 'avatar_size'=> 50,
            ) );
            ?>
        </ol>

        <?php the_comments_pagination(); ?>

    <?php endif; ?>

    <?php
    // If comments are closed but there are comments, leave a note
    if ( ! comments_open() && get_comments_number() ) :
    ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'webjfix' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>


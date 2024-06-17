<?php
/*
YARPP Template: Blog Template
Description: Blog post
Author: accesight
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>
          <div class="relation-posts">
            <p class="relation-title">関連記事</p>
            <div class="relation-post-container">
							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) :
									the_post();
									$thumb = get_the_post_thumbnail_url($post->ID, 'full');
									?>
									<div class="relation-post-box">
										<a href="<?php the_permalink(); ?>"></a>
										<div class="image"><img class="js-ofi -contain" src="<?php echo $thumb; ?>" alt=""></div>
										<div class="title"><?php the_title(); ?></div>
									</div>
								<?php endwhile; ?>
							<?php else: ?>
								<p>関連記事は登録されていません。</p>
							<?php endif; ?>
            </div>
          </div><!-- /.relation-posts -->

<?php 

if ( have_comments() ) : 

	echo comments_number( '<h3 class="comments">'.__( "No comments","suevafree").'</h3>', '<h3 class="comments">1 '.__( "comment","suevafree").'</h3>', '<h3 class="comments">% '.__( "comments","suevafree").'</h3>' ); 
	
?>

<section id="comments">
	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=suevafree_comment'); ?>
	</ul>
</section>

<?php endif; ?>

<?php 
function suevafree_comment ($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
 
 <article id="comment-<?php comment_ID(); ?>" class="comment-container">
	 
     <div class="comment-avatar">
       	<?php echo get_avatar( $comment->comment_author_email, 80 ); ?>
	 </div>
     
 	<div class="comment-text">
	   <header class="comment-author">
       		
        	<span class="author"><?php printf(__('<cite>%s</cite>','suevafree'), get_comment_author_link()) ?></span>
            <time datetime="<?php echo get_comment_date("c")?>" class="comment-date">  
      		<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s','suevafree'), get_comment_date(),  get_comment_time()) ?></a> - 
	  		<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      		<?php edit_comment_link(__('(Edit)','suevafree')) ?>
    		</time>
            
      </header>

      <?php if ($comment->comment_approved == '0') : ?>
         <br /><em><?php _e('Your comment is awaiting approval.','suevafree') ?></em>
      <?php endif; ?>
	  
	  <?php comment_text() ?>
      
	</div>
    
 	<div class="clear"></div>
    
</article>

<?php } ?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

<div class="wp-pagenavi">
     <div class="alignleft"><?php previous_comments_link(__('&laquo;','suevafree')) ?></div>
     <div class="alignright"><?php next_comments_link(__('&raquo;','suevafree')) ?></div>
</div> 
<?php endif; // check for comment navigation ?>

<div class="clear"></div>

<section class="contact-form">

	<?php comment_form(array('label_submit' =>  __('Comment','suevafree')) ); ?>
    
    <div class="clear"></div>

</section>
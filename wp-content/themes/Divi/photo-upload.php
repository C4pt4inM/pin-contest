<?php
/**
 *Template Name: Photo Upload
 */

get_header(); 

if(isset($_SESSION['user_pin'])) {
    // echo $value = $_SESSION['user_pin'];
} else {
    ?>
	<script>
		window.location = "<?php echo site_url(); ?>";
	</script>
	<?php
}



$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">

<?php if ( ! $is_page_builder_used ) : ?>

	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">

<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( ! $is_page_builder_used ) : ?>

					<h1 class="entry-title main_title"><?php the_title(); ?></h1>
				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_featured_image';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
					$thumb = $thumbnail["thumb"];

					if ( 'on' === et_get_option( 'divi_page_thumbnails', 'false' ) && '' !== $thumb )
						print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height );
				?>

				<?php endif; ?>

					<div class="entry-content">
					<?php
						the_content();

						if ( ! $is_page_builder_used )
							wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

				<?php
					if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );
				?>

				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>

<?php if ( ! $is_page_builder_used ) : ?>

			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->

<?php endif; ?>

</div> <!-- #main-content -->

<script>
	jQuery(document).ready(function(){
		jQuery('.ipt-eform-hidden-field-user_pincode').val('<?php echo $_SESSION["user_pin"]?>');
	});
</script>
<script>
	jQuery('.fileupload-meta').html('');
	jQuery('thead .delete_button').html('');
	jQuery('thead .delete_toggle').html('');
	jQuery('.fileupload-buttons .cancel').hide();
	
	jQuery('.delete_toggle').html('');
	jQuery('.template-download .size').html('');
	
    jQuery('#image_container').prepend('<img id="theImg" src="/ctfs/wp-content/themes/Divi/images/1f1a6ed1a70b42828509186911a7dd53.png" />');

	function createGrid(){
		jQuery('.delete_toggle').html('');
		jQuery('.template-download .size').html('');
		
		image_link = jQuery('.preview_td .preview a').attr("href");
		jQuery('#image_container').html('');
		jQuery('#image_container').prepend('<img id="theImg" src="'+image_link+'" />');
		jQuery('.template-download').hide();
	}

	jQuery(document).ready(function() {
	  checkContainer();
	});
	
function checkContainer () {
  if(jQuery('.template-download .preview_td .preview').is(':visible')){ //if the container is visible on the page
	createGrid();  //Adds a grid to the html
  } else {
    setTimeout(checkContainer, 1000); //wait 50 ms, then try again
  }
}

//Delete Previous Image on click Image Option
jQuery('.ipt_uif_uploader_handle').click(function(){
	jQuery('.template-upload button.cancel').click();
	console.log('Deleting Image');
	jQuery('#image_container').html('');
	console.log('Emptying image container');
	setTimeout(function(){
		jQuery('.delete_button button').click();
	},0);
	
	checkContainer();
});

</script>
<?php get_footer(); ?>
<?php
/**
 *Template Name: Pin Codes
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		
		<div>
			<form name="frm_pincode" class="form_pincodes" method="post">
				<input type="text" name="pincode_1" id="pincode_1" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_2" id="pincode_2" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_3" id="pincode_3" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_4" id="pincode_4" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_5" id="pincode_5" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_6" id="pincode_6" class="pincode" size="1" maxlength="1" required />
				
				<div><input type="submit" value="Submit" /></div>
			</form>
		</div>
		
		<script>
			jQuery(".pincode").keyup(function () {
				if (this.value.length == this.maxLength) {
				  jQuery(this).next('.pincode').focus();
				}
			});
		</script>
		<style>
			.form_pincodes input[type="text"]{
				width:50px;
			}
		</style>


<!---------------------------------->
			<?php
			if(isset($_POST['pincode_1']) && $_POST['pincode_1']!=''
			   && isset($_POST['pincode_2']) && $_POST['pincode_2']!=''
			   && isset($_POST['pincode_3']) && $_POST['pincode_3']!=''
			   && isset($_POST['pincode_4']) && $_POST['pincode_4']!=''
			   && isset($_POST['pincode_5']) && $_POST['pincode_5']!=''
			   && isset($_POST['pincode_6']) && $_POST['pincode_6']!=''
			   ){
				$user_pin = $_POST['pincode_1'].$_POST['pincode_2'].$_POST['pincode_3'].$_POST['pincode_4'].$_POST['pincode_5'].$_POST['pincode_6'];
				
				$querystr = "
				     SELECT * 
				     FROM cftscodes
				     WHERE ctfsb1='$user_pin'
					   AND is_used='FALSE'";
				
					$pageposts = $wpdb->get_results($querystr, OBJECT);
					 
					//$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
					//echo "<p>User count is {$user_count}</p>";
		
					if(sizeof($pageposts) < 1 ){
						?>
						<div align="center" class="empty_center">INVALID PIN ENTERED</div>
					<?php
					} else {
						$_SESSION['user_pin'] = $user_pin;
						?>
						<script>
							window.location = "<?php echo site_url('photo-upload')?>";
						</script>
						<?php
					}
			}?>
<!---------------------------------->

		<?php
		// Start the loop.
		/*while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;*/
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
 function checkpincode() { ?>
        <?php 
        global $current_user;
        get_currentuserinfo();

        if ( $current_user->ID ) { ?>
        <div class="welcome_user">
        <div class="logged_user"><h1 class="logged_user_wc">Welcome, <?php echo $current_user->user_login; ?></h1></div>
        <div class="welcome_msg"><h3 class="logged_user_wc">thank you for visiting a canadian tire gas event</h3></div>
        </div>
        <?php } ?>

		<div class="pin_form">
            <div class="formhead"><h2>ENTER YOUR PIN</h2>
            <p class="subhead">Received at your last Canadian Tire Gas+ Event</p>
            </div>
			<form name="frm_pincode" class="form_pincodes" method="post">
				<input type="text" name="pincode_1" id="pincode_1" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_2" id="pincode_2" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_3" id="pincode_3" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_4" id="pincode_4" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_5" id="pincode_5" class="pincode" size="1" maxlength="1" required />
				<input type="text" name="pincode_6" id="pincode_6" class="pincode" size="1" maxlength="1" required />
				
				<div class="sbmt_pin"><input type="submit" value="Submit" /></div>
			</form>
		</div>
		
		<script>
			jQuery(".pincode").keyup(function () {
				if (this.value.length == this.maxLength) {
				  jQuery(this).next('.pincode').focus();
				  jQuery(this).val(jQuery(this).val().toUpperCase());
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
            global $wpdb;
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
			}

 }
 ?>

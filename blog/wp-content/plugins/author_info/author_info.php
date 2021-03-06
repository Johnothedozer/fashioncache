<?php
/*
Plugin Name: Author Information
Description: Adds author country information 
License: GPL2
 
 */



function easy_author_info_init() {
	global $pagenow;

}	

// Initialize the options
add_action('admin_init', 'easy_author_info_init'); 


// Second, we'll have to manually push the new new profile field onto the profile page (as of 16-June-2013, user-edit.php (Core WP page) manually places the profile fields, and doesn't use do_settings_section(
function a_add_custom_profile_fields( $user ) {
	
	// Display image uploader button
	$author_city = get_the_author_meta( 'author_city', $user->ID );
	$author_state = get_the_author_meta( 'author_state', $user->ID );
	$show_author_at_home = get_the_author_meta( 'show_author_at_home', $user->ID);
	?>
		<h3>Address Information</h3>
		<table class="form-table">
			<tr>
				<th><label for="author_city"><span class="description"><?php _e('Author City', 'q' ); ?></span></label></th>
				<td>
					<input id="author_city"  name="author_city" type="text" class="regular-text" value="<?php echo $author_city;?>"/>
					
				</td>
			</tr>
			<tr>
				<th><label for="author_state"><span class="description"><?php _e('Author State', 'q' ); ?></span></label></th>
				<td>
					<input id="author_state" name="author_state" type="text" class="regular-text" value="<?php echo $author_state;?> "/>
					
				</td>
			</tr>
			<tr>
				<th><label for="author_show_at_home"><span class="description"><?php _e('Show Author At Home Page ', 'q' ); ?></span></label></th>
				<td>
					<input id="show_author_at_home" name="show_author_at_home" type="checkbox" value="1" <?php if($show_author_at_home==1){echo 'checked';}elseif($show_author_at_home==0){echo "";} if($show_author_at_home==""){ echo "checked";}?>/>
				</td>
			</tr>
			
		</table>
		
	<?php
	
}

// Third, we'll create this callback function to be called when the profile field is saved. 
function a_save_custom_profile_fields( $user_id ) {
   
    if ( !current_user_can( 'edit_user', $user_id ) )
        return FALSE;
          
    update_user_meta( $user_id, 'author_city', $_POST['author_city'] );
    update_user_meta( $user_id, 'author_state', $_POST['author_state'] );
    update_user_meta( $user_id, 'show_author_at_home', $_POST['show_author_at_home'] );
}

// Add our functions to profile display and update hooks
add_action( 'show_user_profile', 'a_add_custom_profile_fields' );
add_action( 'edit_user_profile', 'a_add_custom_profile_fields' );

add_action('user_new_form','a_add_custom_profile_fields');
add_action('user_register','a_save_custom_profile_fields');

add_action( 'personal_options_update', 'a_save_custom_profile_fields' );
add_action( 'edit_user_profile_update', 'a_save_custom_profile_fields' );

/*
function content_ellipse($text) {
   	return str_replace('(more&hellip;)', '<span class="read_more"><div class="blogReadMore"><a href="'.get_permalink().'"><i>Read More</i></a></div>', $text); 
}
add_filter('the_content', 'content_ellipse');
*/


?>
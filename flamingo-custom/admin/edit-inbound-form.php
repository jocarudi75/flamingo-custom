<?php
/********************************************************************
 * Modficiado por jrd@uma.es para que los campos  del mensaje
 * sean Text Boxes que permitan editar los valores del post.
 * 
 */
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( ! empty( $post->id() ) ) {
	$nonce_action = 'flamingo-update-inbound_' . $post->id();
} else {
	$nonce_action = 'flamingo-add-inbound';
}

?>
<div class="wrap">

<h1><?php echo esc_html( __( 'Inbound Message', 'flamingo' ) ); ?></h1>

<?php do_action( 'flamingo_admin_updated_message', $post ); ?>

<form name="editinbound" id="editinbound" method="post" action="<?php echo esc_url( add_query_arg( array( 'post' => $post->id() ), menu_page_url( 'flamingo_inbound', false ) ) ); ?>">
<?php
wp_nonce_field( $nonce_action );
wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false );
wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false );
?>

<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">

<div id="post-body-content">
	<table class="message-main-fields">
	<tbody>

	<tr class="message-subject">
		<th><?php echo esc_html( __( 'Subject', 'flamingo' ) ); // __ es el ALIAS de la función que hace la traducción de una cadena en WordPress?>:</th>
		<td><input type="text" name="subject" value="<?php echo esc_html( $post->subject ); // jrd@uma.es he incluido un campo texto para poder edita el Subjet?>" size="45"></td>
	</tr>

	<tr class="message-from">
		<th><?php echo esc_html( __( 'From', 'flamingo' ) ); ?>:</th>
		<td><input type="text" name="from" value="<?php echo esc_html( $post->from );  // jrd@uma.es he incluido un campo texto para poder edita el campo FROM?>"></td>
	</tr>

	</tbody>
	</table>
</div><!-- #post-body-content -->

<div id="postbox-container-1" class="postbox-container">
<?php
	do_meta_boxes( null, 'side', $post );
?>
</div><!-- #postbox-container-1 -->

<div id="postbox-container-2" class="postbox-container">
<?php
	// do_meta_boxes( $screen, $context, $data_object ) 
	do_meta_boxes( null, 'normal', $post );
	do_meta_boxes( null, 'advanced', $post );
?>
</div><!-- #postbox-container-2 -->

</div><!-- #post-body -->
<br class="clear" />

</div><!-- #poststuff -->

<?php if ( $post->id() ) : ?>
<input type="hidden" name="action" value="save" />
<input type="hidden" name="post" value="<?php echo (int) $post->id(); ?>" />
<?php else: ?>
<input type="hidden" name="action" value="add" />
<?php endif; ?>
</form>

</div><!-- .wrap -->

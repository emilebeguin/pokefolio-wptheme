<?php
// Creating the widget 
class cw_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of the widget
'pokefolio_contact_widget', 

// Widget name, will appear in UI
__('Contact', 'pokefolio_contact_widget_domain'), 

// Widget description
array( 'description' => __( 'Ce widget vous permet d\'entrer vos informations de contact', 'pokefolio_contact_widget_domain' ), ) 
);
}

// Contact widget front-end
public function widget( $args, $instance ) {

    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    $mail = $instance[ 'mail' ];
    $phone = $instance[ 'phone' ];
    $address = $instance[ 'address' ];
  
    echo $args['before_widget'] ?>
  
    <div class="info"><i class="fa-solid fa-location-dot"></i> <a href="https://www.google.be/maps/search/<?php echo urlencode($address) ?>"><?php echo $address ?></a></div>
    <div class="info"><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></div>
    <div class="info"><i class="fa-solid fa-phone"></i> <a href="<?php echo $phone ?>"><?php echo $phone ?></a></div>
  
    <?php echo $args['after_widget'];
  }
  
// Contact widget back-office 
public function form( $instance ) {
    if ( isset( $instance[ 'address' ] ) ) {
        $address = $instance[ 'address' ];
    }
    else {
        $address = __( 'New address', 'pokefolio_contact_widget_domain' );
    }
    if ( isset( $instance[ 'phone' ] ) ) {
        $phone = $instance[ 'phone' ];
    }
    else {
        $phone = __( 'New phone', 'pokefolio_contact_widget_domain' );
    }
    if ( isset( $instance[ 'mail' ] ) ) {
        $mail = $instance[ 'mail' ];
    }
    else {
        $mail = __( 'New mail', 'pokefolio_contact_widget_domain' );
    }
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
<label for="<?php echo $this->get_field_id( 'mail' ); ?>"><?php _e( 'Mail:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'mail' ); ?>" name="<?php echo $this->get_field_name( 'mail' ); ?>" type="text" value="<?php echo esc_attr( $mail ); ?>" />
<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />

</p>

<?php 
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
$instance['mail'] = ( ! empty( $new_instance['mail'] ) ) ? strip_tags( $new_instance['mail'] ) : '';
return $instance;
}
} // Class cw_widget ends here

// Register and load the widget
function cw_load_widget() {
 register_widget( 'cw_widget' );
}
add_action( 'widgets_init', 'cw_load_widget' );



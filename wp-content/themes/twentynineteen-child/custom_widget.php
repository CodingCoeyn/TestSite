<?php

function mhssn_register_widget() {

    register_widget( 'mhssn_widget' );
    
}
    
add_action( 'widgets_init', 'mhssn_register_widget' );

//widgets are objects that are instances of PHP classes, like in java
class mhssn_widget extends WP_Widget
{
    //constructor method determies the widgets ID, name & description
    function _construct(){
        parent::_construct(
            'mhssn_widget', //widget ID
            _('Mahassins Widget', 'mhssn_widget_domain'), // widget name
            array('description'=>_('MahassinWidget Tutorial', 'mhssn_widget_domain'), ) //widget description
        );
    }//end of construct

    //describes look of widget on front-end
    public function widget( $args, $instance){
        $title = apply_filters('widget_title', $instance['title'] );
        echo $args['before widget'];
        //if title is present
        if( !empty($title) )
        {
            echo $args['before_title'] .$title. $args['after_title'];
        }
        //output
        echo _('Yerrrrrrr!', 'mhssn_widget_domain');
        echo $args['after_widget'];
    }//end of widget

    //programs the back end of the widget
    public function form($instance){
        if( isset($instance['title']) )
        {
            $title = $instance['title'];
        }
        else
        {
            $title = _('Myfault Title', 'mhssn_widget_domain');
        }?>

        <p>
            <label for='<?php echo $this->get_field_id('title'); ?>' >
            <?php _e('Title'); ?> </label>
            
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                    name="<?php echo $this->get_field_name('title'); ?>" type="text" 
                    value="<?php echo esc_attr($title); ?>" />
        </p>

    <?php
    }//end of form

    //updats widget when settings change
    public function update( $new_instance, $old_instance ) {

        $instance = array();
        
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        return $instance;
        
    }
}

?>
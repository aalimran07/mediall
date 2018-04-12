<?php
/**
 * Widget API: extends wp_widget class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Adds Foo_Widget widget.
 */

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class about_Widget extends WP_Widget
{

    /**
     * Constructor
     *
     * @return void
     */
    function __construct()
    {
        $widget_ops = array(
            'about_widget' => 'about-widget',
            'description' => esc_html__('Display Footer Information with uploading your logo.', 'mediall'),
            );
        parent::__construct('about-widget', esc_html__('About Widgets', 'mediall'), $widget_ops);
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     */
    function widget($args, $instance)
    {
        $about_img = ! empty($instance['about_image']) ? $instance['about_image'] : '';
        $about_description = !empty($instance['about_description']) ? $instance['about_description'] : '';
        $facebook = ! empty($instance['facebook']) ? $instance['facebook'] : '';
        $twitter = ! empty($instance['twitter']) ? $instance['twitter'] : '';
        $linkedin = ! empty($instance['linkedin']) ? $instance['linkedin'] : '';
        $google = ! empty($instance['google']) ? $instance['google'] : '';
        $behance = ! empty($instance['behance']) ? $instance['behance'] : '';

        echo $args['before_widget'];
        echo '<div class="about-widget">';
        ;
        ?>
        <img class="about-widget-title" src="<?php echo esc_url($about_img); ?>" alt="">
        <?php
        ?>
            <div class="footer-content">
                <p><?php echo esc_attr($about_description); ?></p>
            </div>
            <div class="footer-social-link">
                <a href="<?php echo esc_url($facebook); ?>" class="fa fa-facebook"></a>
                <a href="<?php echo esc_url($twitter); ?>" class="fa fa-twitter"></a>
                <a href="<?php echo esc_url($linkedin); ?>" class="fa fa-linkedin"></a>
                <a href="<?php echo esc_url($google); ?>" class="fa fa-google-plus"></a>
                <a href="<?php echo esc_url($behance); ?>" class="fa fa-behance"></a>
            </div>

        <?php
        echo '</div>';
        echo $args['after_widget'];
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     */
    function form($instance)
    {
        $about_img = ! empty($instance['about_image']) ? $instance['about_image'] : '';
        $about_description = !empty($instance['about_description']) ? $instance['about_description'] : '';
        $facebook = ! empty($instance['facebook']) ? $instance['facebook'] : '';
        $twitter = ! empty($instance['twitter']) ? $instance['twitter'] : '';
        $linkedin = ! empty($instance['linkedin']) ? $instance['linkedin'] : '';
        $google = ! empty($instance['google']) ? $instance['google'] : '';
        $behance = ! empty($instance['behance']) ? $instance['behance'] : '';
    ?>

        <p>
            <label for="<?php echo $this->get_field_id('about_image'); ?>"><?php esc_html_e('Image Url:', 'mediall') ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('about_image'); ?>" name="<?php echo $this->get_field_name('about_image'); ?>" type="text" value="<?php echo esc_url($about_img); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('about_description'); ?>">
            <?php esc_html_e('Description', 'mediall'); ?>
            </label>
            <textarea class="widefat" rows="4" name="<?php echo $this->get_field_name('about_description'); ?>" id="<?php echo $this->get_field_id('about_description'); ?>"><?php echo esc_attr($about_description); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>">
            <?php esc_html_e('Facebook Link', 'mediall'); ?>
            </label>
           <input type="text" id="<?php echo $this->get_field_id('facebook'); ?>" class="widefat" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo esc_url($facebook); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>">
            <?php esc_html_e('Twitter Link', 'mediall'); ?>
            </label>
           <input type="text" id="<?php echo $this->get_field_id('twitter'); ?>" class="widefat" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo esc_url($twitter); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>">
            <?php esc_html_e('linkedin Link', 'mediall'); ?>
            </label>
           <input type="text" id="<?php echo $this->get_field_id('linkedin'); ?>" class="widefat" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo esc_url($linkedin); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>">
            <?php esc_html_e('Google Plus Link', 'mediall'); ?>
            </label>
           <input type="text" id="<?php echo $this->get_field_id('google'); ?>" class="widefat" name="<?php echo $this->get_field_name('google'); ?>" value="<?php echo esc_url($google); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('behance'); ?>">
            <?php esc_html_e('Behance Plus Link', 'mediall'); ?>
            </label>
           <input type="text" id="<?php echo $this->get_field_id('behance'); ?>" class="widefat" name="<?php echo $this->get_field_name('behance'); ?>" value="<?php echo esc_url($behance); ?>">
        </p>
    <?php

        // display field names here using:
        // $this->get_field_id( 'option_name' ) - the CSS ID
        // $this->get_field_name( 'option_name' ) - the HTML name
        // $instance['option_name'] - the option value
    }
      /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     */
    function update($new_instance, $old_instance)
    {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }
}

function about_widget_register()
{
    register_widget('about_Widget');
}
add_action('widgets_init', 'about_widget_register');

<?php
if (!defined('ABSPATH')) die('-1');

/**
 * Class sweipe_recent_posts_widget
 */
class sweipe_recent_posts_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
				'sweipe_recent_posts_widget',
				esc_html__('(Mobius) Recent Posts', 'sweipe'),
				array( 'description' => esc_html__( 'Custom recent posts with featured image, title and categories.', 'sweipe' ), )
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$post_count = apply_filters( 'widget_post_count', $instance['post_count'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];

		$recent_args = array(
				"posts_per_page" => $post_count,
				"orderby"        => "date",
				"order"          => "DESC"
		);

		$recent_posts = new WP_Query( $recent_args );

		if ( $recent_posts -> have_posts() ) :
			while ( $recent_posts -> have_posts() ) : $recent_posts -> the_post(); ?>
				<div class="tc-recent-post clearfix">
					<?php if (has_post_thumbnail() ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' ); ?>
						<a href="<?php the_permalink() ?>" class="preview"><img src="<?php echo esc_url( aq_resize($image[0],40, 40, true) ) ?>" alt="<?php the_title() ?>"></a>
					<?php endif; ?>

					<div class="details">
						<a href="<?php the_permalink() ?>" class="title"><h3><?php the_title() ?></h3></a>
						<small class="categories">
							<?php esc_html_e('Posted ', 'sweipe'); sweipe::getPostCategories() ?>
						</small>
						<a href="<?php the_permalink() ?>" class="link uiicon-move13"></a>
					</div>
				</div>
			<?php endwhile;
		endif;

		wp_reset_postdata();

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = esc_html__( 'New title', 'sweipe' );
		}

		if ( isset( $instance[ 'post_count' ] ) ) {
			$post_count = $instance[ 'post_count' ];
		} else {
			$post_count = 3;
		} ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'sweipe' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_count' ) ); ?>"><?php esc_html_e( 'Post Count:', 'sweipe' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_count' ) ); ?>" type="number" value="<?php echo esc_attr( $post_count ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['post_count'] = ( ! empty( $new_instance['post_count'] ) ) ? (int) $new_instance['post_count'] : 8;
		return $instance;
	}
}

/**
 * Class sweipe_flickr_feed_widget
 */
class sweipe_flickr_feed_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
				'sweipe_flickr_feed_widget',
				esc_html__('(Mobius) Flickr Feed', 'sweipe'),
				array( 'description' => esc_html__( 'You are able to list photos by given collection ID.', 'sweipe' ), )
		);
	}

	public function widget( $args, $instance ) {
		wp_enqueue_script('jflickrfeed');
		wp_enqueue_script('swipebox');

		$title          = apply_filters( 'widget_title', $instance['title'] );
		$post_count     = apply_filters( 'widget_post_count', $instance['post_count'] );
		$collection_id  = apply_filters( 'widget_collection_id', $instance['collection_id'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];

		if( ! empty( $collection_id ) && ! empty( $post_count )  ): ?>
			<ul class="flickr-feed clearfix" data-post-count="<?php echo (int) $post_count ?>" data-collection-key="<?php echo esc_attr( $collection_id ) ?>"></ul> <?php
		endif;

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title          = isset( $instance[ 'title' ] )          ? $instance[ 'title' ] : esc_html__( 'New title', 'sweipe' );
		$post_count     = isset( $instance[ 'post_count' ] )     ? $instance[ 'post_count' ] : 6;
		$collection_id  = isset( $instance[ 'collection_id' ] )  ? $instance[ 'collection_id' ] : ''; ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'sweipe' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_count' ) ); ?>"><?php esc_html_e( 'Post Count:', 'sweipe' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_count' ) ); ?>" type="number" value="<?php echo esc_attr( $post_count ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'collection_id' ) ); ?>"><?php esc_html_e( 'Collection ID:', 'sweipe' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'collection_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'collection_id' ) ); ?>" type="text" value="<?php echo esc_attr( $collection_id ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title']          = ( ! empty( $new_instance['title'] ) )         ? strip_tags( $new_instance['title'] ) : '';
		$instance['post_count']     = ( ! empty( $new_instance['post_count'] ) )    ? (int) $new_instance['post_count'] : 8;
		$instance['collection_id']  = ( ! empty( $new_instance['collection_id'] ) ) ? strip_tags( $new_instance['collection_id'] ) : '';
		return $instance;
	}
}

function sweipe_load_widget() {
	register_widget( 'sweipe_recent_posts_widget' );
	register_widget( 'sweipe_flickr_feed_widget' );
} add_action( 'widgets_init', 'sweipe_load_widget' );
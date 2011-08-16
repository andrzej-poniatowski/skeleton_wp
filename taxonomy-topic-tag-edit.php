<?php

/**
 * Topic Tag Edit
 *
 * @package bbPress
 * @subpackage Theme
 */
get_header();
do_action('st_before_content');
do_action( 'bbp_template_notices' );
?>
<div id="topic-tag" class="bbp-topic-tag">
	<h1 class="entry-title"><?php printf( __( 'Topic Tag: %s', 'bbpress' ), '<span>' . bbp_get_topic_tag_name() . '</span>' ); ?></h1>

	<div class="entry-content">

		<?php bbp_breadcrumb(); ?>

		<?php bbp_topic_tag_description(); ?>

		<?php do_action( 'bbp_template_before_topic_tag_edit' ); ?>

		<?php bbp_get_template_part( 'bbpress/form', 'topic-tag' ); ?>

		<?php do_action( 'bbp_template_after_topic_tag_edit' ); ?>

	</div>
</div><!-- #topic-tag -->
<?php
st_after_content();

// get_sidebar('bbpress');
get_footer();
?>
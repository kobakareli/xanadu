<?php

/**
 * This file contains general helper functions
 */

/**
 * This function returns image source from image field
 * @param [array|integer] $field_data - ACF field name and post ID | Image ID
 * @param [array] $image_sizes - image width and height
 * @return [string] - empty string or image source
 */
function ka_get_image_src( $field_data, $image_sizes = array() ) {
	$image_src = '';
	// If POST ID is not defined set to `false` to target the current post
	$post_id = ! empty( $field_data[1] ) ? $field_data[1] : false;
	$width = ! empty( $image_sizes[0] ) ? $image_sizes[0] : '9999';
	$height = ! empty( $image_sizes[1] ) ? $image_sizes[1] : '9999';

	if ( is_array( $field_data ) ) {
		$field_name = ! empty( $field_data[0] ) ? $field_data[0] : '';

		if ( ! empty( $field_name ) ) {
			$image = get_field( $field_name, $post_id );

			if ( $image ) {
				$image_id = $image['ID'];
			}
		}
	}
	else {
		$image_id = $field_data;
	}

	if ( isset( $image_id ) && $image_id > 0 ) {
		$dimensions = 'wh' . $width . 'x' . $height;
		$attachment = wp_get_attachment_image_src( $image_id, $dimensions );

		if ( $attachment ) {
			$image_src = esc_url( $attachment[0] );
		}
	}
	return $image_src;
}

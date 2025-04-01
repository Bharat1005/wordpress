<?php
if ( ! function_exists( 'crt_manage_layout' ) ) :
    /**
     * Return List Array Layout.
     */
    function crt_manage_layout() {
        return array(
            'standard' => __( 'List', 'crt-manage' ),
            'list-large-image' => __( 'List - Image Large', 'crt-manage' ),
            'grid-2-columns' => __( 'Grid 2 columns', 'crt-manage' ),
            'grid-3-columns' => __( 'Grid 3 columns', 'crt-manage' ),
            'grid-4-columns' => __( 'Grid 4 columns', 'crt-manage' ),
            'masonry-2-columns' => __( 'Masonry 2 columns', 'crt-manage' ),
            'masonry-3-columns' => __( 'Masonry 3 columns', 'crt-manage' ),
            'masonry-4-columns' => __( 'Masonry 4 columns', 'crt-manage' ),
        );
    }
endif;

if ( ! function_exists( 'crt_manage_sidebar' ) ) :
    /**
     * Return Sidebar In Theme.
     */
    function crt_manage_sidebar() {
        $sidebars = array();
        foreach ($GLOBALS['wp_registered_sidebars'] as $sidebar) {
            $sidebars[$sidebar['id']] = $sidebar['name'];
        }
        return $sidebars;
    }
endif;

if ( ! function_exists( 'crt_manage_heading_sizes' ) ) :
    /**
     * Return Heading Sizes.
     */
    function crt_manage_heading_sizes() {
        $sizes = array();
        for($i = 1; $i < 3; $i += 0.25) {
            $sizes[$i.'rem'] = $i.' Rem';
        }
        return $sizes;
    }
endif;

if ( ! function_exists( 'crt_manage_heading_px_sizes' ) ) :
    /**
     * Return Heading Sizes.
     */
    function crt_manage_heading_px_sizes() {
        $sizes = array();
        for($i = 10; $i < 80; $i += 2) {
            $sizes[$i.'px'] = $i.' Px';
        }
        return $sizes;
    }
endif;

function crt_manage_control_block_element($settings = array('thumb_size' => true, 'thumb_border' => true, 'heading_size' => true), $prefix = 'crt_manage_hero_col_1', $active_callback = '') {
    $controls = array(
        $prefix . '_thumbnail_size' => array(
            'label'           => esc_html__( 'Thumbnail Background', 'crt-manage' ),
            'def' => 'bg-content',
            'type' => 'select',
            'choices' => array(
                'ratio32' => esc_html__( 'Ratio 3x2', 'crt-manage' ),
                'ratio43' => esc_html__( 'Ratio 4x3', 'crt-manage' ),
                'ratio169' => esc_html__( 'Ratio 16x9', 'crt-manage' ),
                'ratio219' => esc_html__( 'Ratio 21x9', 'crt-manage' ),
                'ratio_auto' => esc_html__( 'Height auto', 'crt-manage' ),
            ),
            'sanitize_callback' => 'crt_manage_sanitize_select',
//            'active_callback' => 'crt_manage_hero_style3',
        ),
        $prefix . '_thumbnail_border' => array(
            'label'           => esc_html__( 'Thumbnail Border Radius', 'crt-manage' ),
            'def' => 'bg-content',
            'type' => 'select',
            'choices' => array(
                '3px' => esc_html__( 'Mini Border Radius', 'crt-manage' ),
                '5px' => esc_html__( 'Large Border Radius', 'crt-manage' ),
                'circle' => esc_html__( 'Circle Border Radius', 'crt-manage' ),
            ),
            'sanitize_callback' => 'crt_manage_sanitize_select',
//            'active_callback' => 'crt_manage_hero_style3',
        ),
        $prefix . '_heading_size' => array(
            'label'           => esc_html__( 'Heading Size', 'crt-manage' ),
            'def' => 'bg-content',
            'type' => 'select',
            'choices' => crt_manage_heading_px_sizes(),
            'sanitize_callback' => 'crt_manage_sanitize_select',
//            'active_callback' => 'crt_manage_hero_style3',
        ),
    );
    return $controls;
}
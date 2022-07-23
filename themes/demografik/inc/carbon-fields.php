<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );


function crb_attach_theme_options() {
    $assistants_labels = array(
        'plural_name'   => __('informations'),
        'singular_name' => __('information'),
    );
    

    $default_text = [
        array( 
            'title' => 'Phone',
        ),
        array(
            'title' => 'Facebook',
        ),
        array(
            'title' => 'Telegram'
        ),
        array(
            'title' => 'E-mail'
        )

    ];

    Container::make( 'post_meta', __('Information') )
        ->where( 'post_type', '=', 'd_team' )
        ->add_fields( array(
            Field::make('text', 'experience',  __( 'Experience' ))->set_width(30),
            Field::make( 'complex', 'social_links', 'Ijtimoiy aloqalar' )
                ->set_width(70)
                ->help_text( 'Ma\'lumotlarni kiritish' )
                ->add_fields( array(
                    Field::make( 'text', 'title', __( 'Title' ) )
                    ->set_width(50),
                    Field::make( 'text', 'social_url', __( 'Link' ) )
                    ->set_width(50),
                ) )
                ->set_default_value( $default_text ),
        
    ) );
}


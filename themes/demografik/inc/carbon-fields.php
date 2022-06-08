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
    
    $path = get_template_directory_uri() . '/assets/images/alldems.png';

    $default_text = [
        array( 
            'title' => '100 ta nikohga ajrim',
        ),
        array(
            'title' => '1 Yoshgacha o\'lim koeffitsiyenti',
        ),
        array(
            'title' => 'Oila'
        ),
        array(
            'title' => '2009-2022 Aholi soni'
        ),
        array(
            'title' => '2011-2022 yil Аxoli mehnatga loyiq tuman'
        ),
        array(
            'title' => 'Аjrim koeffitsienti'
        ),
        array(
            'title' => 'Аjrim'
        ),
        array(
            'title' => 'Аholining tabiiy xarakati'
        ),
        array(
            'title' => 'Yosh guruhlari boʼyicha doimiy aholi soni'
        ),
        array(
            'title' => 'Zichlik'
        ),
        array(
            'title' => 'Koʼchib kelganlar'
        ),
        array(
            'title' => 'Koʼchib ketganlar soni'
        ),
        array(
            'title' => 'Migrasion xarakat'
        ),
        array(
            'title' => 'Nikoh koeffisienti'
        ),
        array(
            'title' => 'Nikoh'
        ),
        array(
            'title' => 'Reproduktiv yoshdagi (15-49) ayollar soni'
        ),
        array(
            'title' => 'Tugʼilish'
        ),
        array(
            'title' => 'Tugʼilishning umumiy koeffisienti'
        ),
        array(
            'title' => 'Oʼlganlar soni'
        ),
        array(
            'title' => 'Oʼlim koeffisienti'
        ),
        array(
            'title' => 'Oʼlim sabablari'
        ),
        array(
            'title' => 'Oʼrtacha aholi'
        ),
        array(
            'title' => 'Hudud maydoni'
        ),
        array(
            'title' => 'Ma\'muriy hududiy birliklar'
        ),
        array(
            'title' => 'Kam ta\'minlangan oilalar soni'
        ),
        array(
            'title' => '18 yoshdan kichik bolali oilalar soni'
        ),
        array(
            'title' => 'Koʼp bolali oilalar soni (5 bola va undan koʼp)'
        ),
        array(
            'title' => 'Toʼliq boʼlmagan oilalar soni (otasi yoki onasi yoʼq oilalar)'
        ),
        array(
            'title' => 'Nogironligi boʼlgan shaxslar bor oilalar soni'
        ),

    ];

    Container::make( 'term_meta', __('Information') )
        ->where( 'term_taxonomy', '=', 'demografik-category' )
        ->add_fields( array(
         Field::make( 'complex', 'demographics_rating', 'Demografik ko\'rsatkichlar' )
            ->help_text( 'Ma\'lumotlarni kiritish' )
            ->add_fields( array(
                Field::make( 'text', 'title', 'Sarlavha' ),
                Field::make( 'rich_text', 'rating_table', 'Jadval' ),
                Field::make( 'text', 'diagramm_one', 'Diagramma 1'),
                Field::make( 'text', 'diagramm_two', 'Diagramma 2'),
                Field::make( 'text', 'diagramm_third', 'Diagramma 3'),
                Field::make( 'text', 'diagramm_four', 'Diagramma 4'),
            ) )
            ->set_default_value( $default_text ),
    ) );
}


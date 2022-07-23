/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
}( jQuery ) );

const blocks = document.querySelectorAll(".block")
const contents = document.querySelectorAll(".content_block")
for(let i = 0; i < blocks.length; i++){
    blocks[i].addEventListener('click', (e) => {
        if(e.target.className || !e.target.className){
            if(contents[e.target.dataset.uuid - 1].classList.contains('unvisible')){
                for(let j = 0; j < contents.length; j++){
                    if(!contents[j].classList.contains('unvisible')){
                        contents[j].classList.add('unvisible')
                    }
                }
                contents[e.target.dataset.uuid - 1].classList.remove('unvisible')
            }
        }
    })
}
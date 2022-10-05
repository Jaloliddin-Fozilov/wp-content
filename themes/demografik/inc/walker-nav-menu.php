<?php
class Hope_Walker_Nav_Menu extends Walker_Nav_Menu {

  public function start_lvl( &$output, $depth = 0, $args = null ) {
  
    $output .= '<ul class="menu__sub-list">';
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $indent  = str_repeat( $t, $depth );
    $output .= "$indent</ul>{$n}";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		/*
		 * Генерируем строку с CSS-классами элемента меню
		 */
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		// функция join превращает массив в строку
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		/*
		 * Генерируем ID элемента
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		/*
		 * Генерируем элемент меню
		 */
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
 
		// атрибуты элемента, title="", rel="", target="" и href=""
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		// ссылка и околоссылочный текст

    $item_output = $args->before;
    if ( $args->walker->has_children && 0 === $depth ) {
        $item_output .= '<a class="menu__link"' . $attributes . '>';
    } else { 
        $item_output .= '<a class="menu__link"' . $attributes . '>';
    }

    $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
    $item_output .= ( $args->walker->has_children && 0 === $depth ) ? ' </a><span class="menu__arrow"></span>' : '</a>';
    $item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $block = isset( $args->bem_block ) ? $args->bem_block : explode( ' ', $args->menu_class );
    $block = is_array( $block ) ? $block[0] : $block;
    if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $output .= "</li>{$n}";
  }

} // BEM_Walker_Nav_Menu
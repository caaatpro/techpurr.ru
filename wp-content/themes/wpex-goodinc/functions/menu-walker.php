<?php
/**
 * Modify WP menu for dropdown styles
 *
 * @package WordPress
 * @subpackage GoodInc
 * @since 1.0
*/

class WPEX_Dropdown_Walker_Nav_Menu extends Walker_Nav_Menu {
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
		
        $id_field = $this->db_fields['id'];
		
        if( !empty( $children_elements[$element->$id_field] ) && ( $depth == 0 ) ) {
            $element->classes[] = 'dropdown-li';
            //$element->title .= ' <span class="dropdown-icon"></span>';
        }
		
		if( !empty( $children_elements[$element->$id_field] ) && ( $depth > 0 ) ) {
            $element->classes[] = 'dropdown-li';
            //$element->title .= ' <i class="icon-angle-right"></i>';
        }
				
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
 
    }
}
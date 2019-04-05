<?php

namespace Antal\GenesisPractice;

add_filter('genesis_attr_entry', __NAMESPACE__ .  '\add_grid_classes_to_entry');

function add_grid_classes_to_entry(array $attributes) {
    $attributes['class'] .= ' one-half';
    $attributes['class'] .= get_first_column_class(); 

    return $attributes;
}

function get_first_column_class($number_of_columns = 2) {
    static $column_count = 0;

    $remainder = $column_count % $number_of_columns;
    $column_count++;
    if( $remainder == 0) {
        return ' first';
    }
}

genesis(); 
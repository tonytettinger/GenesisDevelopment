<?php

namespace Antal\GenesisPractice;

add_filter('genesis_attr_entry', __NAMESPACE__ .  '\add_grid_classes_to_entry');

function add_grid_classes_to_entry(array $attributes) {
    $attributes['class'] .= ' one-half';

    return $attributes;
}

genesis();
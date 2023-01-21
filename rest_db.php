<?php

function get_product_attribute($id, $attr) {
    $products = get_products();
    $result = $products[$id][$attr] ?? null;
    return $result;
}
function get_product_Room_number($id) {
    return get_product_attribute($id, 'name');
}

function get_img_url($id) {
    return get_product_attribute($id, 'img_url');
}
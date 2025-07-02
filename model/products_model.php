<?php

function get_all_products() {
    $query = "SELECT * FROM products";
    $result = mysqli_query(connectDB(), $query);
    $products = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    
    return $products;
}

function get_product_by_id($id) {
    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query(connectDB(), $query);
    $product = mysqli_fetch_assoc($result);
    return $product;
} 
<?php

function about() {
    
    $title = 'About';
    include 'view/templates/about_content.php';
}
function home() {
    
    $title = 'Home';
    include 'view/templates/home_content.php';
}
function contact() {
    
    $title = 'Contact';
    include 'view/templates/contact_content.php';
}


function products() {
    
    $products = get_all_products();
    $title = 'Products';
    include 'view/templates/products_content.php';
    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";

}

function product_detail() {
    
    $id = $_GET['id'];
    if (!$id) {
        header('Location: '.base_url().'2/neww/3/1/index.php/kages/products');
        exit;
    }
    
    $product = get_product_by_id($id);
    if (!$product) {
        header('Location: '.base_url().'2/neww/3/1/index.php/kages/products');
        exit;
    }
    
    $title = $product['title'];
    include 'view/product_detail.php';
}


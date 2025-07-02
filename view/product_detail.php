<h1><?php echo $product['title']; ?></h1>

<div class="product-detail">
    <img src="<?php echo $product['image_url']; ?>" >
    <p><?php echo $product['description']; ?></p>
</div>

<a href="<?=base_url()?>2/neww/3/1/index.php/kages/products">Back</a>

<style>
.product-detail img {
    max-width: 100%;
    height: 300px;
    margin: 20px 0;
}

.product-detail p {
    margin: 20px 0;
    font-size: 20px;
    font-weight: bold;
}

h1{
    font-size: 25px;
    font-weight: bold;
}
a{
    font-size: 20px;
    text-decoration: none;
}
a:hover{
    text-decoration: underline;
}

</style> 
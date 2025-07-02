<div class="head_title">Products</div>

<div class="links">
    <ul>
        <li>
           <a href="http://ders.loc/2/neww/3/1/index.php/kages/home">Home link</a>
            <a href="http://ders.loc/2/neww/3/1/index.php/kages/about">About link</a>
            <a href="http://ders.loc/2/neww/3/1/index.php/kages/contact">Contact link</a>
        </li>
    </ul>
</div>

 <div class="products-grid">
    <?php foreach ($products as $product): ?>

        <div class="product-card">
            <img src="<?php echo $product['image_url']; ?>">
            <h2><?php echo $product['title']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <a href="<?=base_url()?>2/neww/3/1/index.php/kages/product_detail?id=<?php echo $product['id']; ?>">Details</a>
        </div>
    <?php endforeach; ?>
 </div>

<style>
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    padding: 15px;
}


.product-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1rem;
    text-align: center;
    transition: transform 0.3s ease;
}
    

.product-card img {
    max-width: 100%;
    height: 200px;
    border-radius: 4px;
    margin-bottom: 1rem;
}

.product-card h2 {
    color: #333;
    margin-bottom: 0.5rem;
}
.product-card p{
    margin-bottom: 10px;
}
.product-card a{
    text-decoration: none;
}
.product-card a:hover{
    text-decoration: underline;
}


</style>
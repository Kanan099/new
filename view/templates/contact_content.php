<div class="head_title">Contact</div>

<div class="links">
    <ul>
        <li>
           <a href="http://ders.loc/2/neww/3/1/index.php/kages/home">Home link</a>
            <a href="http://ders.loc/2/neww/3/1/index.php/kages/about">About link</a>
            <a href="http://ders.loc/2/neww/3/1/index.php/kages/products">Products link</a>
        </li>
    </ul>
</div>

<?php if (isset($_SESSION['error_mes'])):?>
<p><?=$_SESSION['error_mes']?></p>
<?php unset($_SESSION['error_mes']); endif;?>

<?php if (isset($_SESSION['success_message'])):?>
<p><?=$_SESSION['success_message']?></p>
<?php unset($_SESSION['success_message']); endif;?>

<form class="contact_form" action="<?=base_url();?>index.php/kages/contact" method="POST">
    <div>
        <p>Email:</p>
        <input class="main_text" type="text" name="email">
    </div>
    <div>
        <p>Message: <br>
        <input class="main_text" class="box_message" type="text" name="message" placeholder="Hello">
    </div>
    <div class="submit">
        <input type="submit" name="send" value="Send">
    </div>
</form>

<style>
    .box_message{
        height: 100px;
    }
    .contact_form div input{
        /*width: 200px;*/
        margin-bottom: 15px;
    }
    .contact_form div p{
        margin-bottom: 5px;
     }
     .main_text{
        width: 150px;
     }


</style>
<?php include 'header.php'; ?>
<section class="products products-page">
        <div class="container">
            <div class="row">
                <h3 class="widget-title">محصولات پرفروش</h3>
                <ul class="products-list">
                    <?php foreach ($data['products'] as $key => $value) {?>
                        <li class="product col-3 text-center ">
                            <div class="card">
                                <div class="product-image">
                                    <a href="<?=BASE_URL.'/product.php?id='.$key;?>">
                                        <img class="" src="./img/products/<?=$value['image'];?>">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <a href="<?=BASE_URL.'/product.php?id='.$key;?>" class="product-title">
                                        <?=$value['title'];?>
                                    </a>
                                    <div class="product-price"><?=$value['price'];?> تومان</div>
                                    <a href="<?=BASE_URL.'/product.php?id='.$key;?>" class="add-to-cart">
                                        نمایش محصول
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
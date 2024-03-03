<?php include 'header.php'; ?>
    <section class="banners">
        <div class="container">
            <div class="col-6">
                <div class="banner">
                    <div class="banner-image">
                        <img src="./img/coffee_beans_on_hand-min-600x600.webp">
                    </div>
                    <div class="banner-content">
                        <h2>
                            فروش آنلاین قهوه رُست شده
                        </h2>
                        <p>
                            انواع قهوه اسپرسو، دمی ،ترک، تک خاستگاه، تک کشور، ترکیبی و …
                        </p>
                        <a href="" class="button">قیمت و خرید آنلاین قهوه</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="banner">
                    <div class="banner-image">
                        <img src="./img/green_coffee_beans-min-1-600x600.webp">
                    </div>
                    <div class="banner-content">
                        <h2>
                            فروش آنلاین قهوه سبز یا خام
                        </h2>
                        <p>
                            از ربوستای ارزان تا دانه های تخصصی، با اطلاعات کامل خرید کنید!
                        </p>
                        <a href="" class="button">قیمت و خرید آنلاین قهوه سبز</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
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
    <section class="services">
        <div class="row">
            <div class="container">
                <div class="col-3 text-center">
                    <div class="icon">
                        <img src="./svg/return.svg" width="50px">
                    </div>
                    <div class="p-1">
                        <div class="service-title">
                            بازگشت کالا
                        </div>
                        <div class="service-text">
                            در صورت عدم تطابق با کالای معرفی شده
                        </div>
                    </div>
                </div>
                <div class="col-3 text-center">
                    <div class="icon">
                        <img src="./svg/online-support.svg" width="50px">
                    </div>
                    <div class="p-1">
                        <div class="service-title">
                            خدمات پس از فروش
                        </div>
                        <div class="service-text">
                            تعمیر و نگهداری
                        </div>
                    </div>
                </div>
                <div class="col-3 text-center">
                    <div class="icon">
                        <img src="./svg/truck.svg" width="50px">
                    </div>
                    <div class="p-1">
                        <div class="service-title">
                            ارسال به سراسر کشور
                        </div>
                        <div class="service-text">
                            ارسال همراه با بیمه حمل
                        </div>
                    </div>
                </div>
                <div class="col-3 text-center">
                    <div class="icon">
                        <img src="./svg/title.svg" width="50px">
                    </div>
                    <div class="p-1">
                        <div class="service-title">
                            ضمانت اصل بودن کالا
                        </div>
                        <div class="service-text">
                            همراه با برگه ضمانت
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>

<?php include 'header.php';
$product = $data['products'][$_GET['id']];
?>
<div class="container">
    <div class="row">
        <ul class="breadcrumb">
            <li>
                <a href="<?=BASE_URL;?>">
                    صفحه اصلی
                </a>
                /
            </li>
            <li>
                <a href="<?=BASE_URL.'/shop.php';?>">
                    محصولات
                </a>
                /
            </li>
            <li>
                <span>
                    <?=$product['title'];?>
                </span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="<?=BASE_URL.'/img/products/'.$product['image'];?>" class="product-thumb">
        </div>
        <div class="col-5">
            <div class="product-details">
                <h1 class="page-title" style="margin: 0;">
                    <?=$product['title'];?>
                </h1>
                <div class="product-description">
                    <span class="span-label">
                        توضیحات 
                    </span>
                    <?=$product['description'];?>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="product-actions">
                <div class="product-attributes">
                    <span class="span-label">
                        قیمت 
                    </span>
                    <span class="price-tag">
                        <?=$product['price'];?> تومان
                    </span>
                    <div class="quantity">
                        <div class="btn-plus">+</div>
                        <div class="counter">
                            <input type="text" value="1">
                        </div>
                        <div class="btn-minus">-</div>
                    </div>
                    <button class="add-to-cart">
                        افزودن به سبد خرید
                    </button>
                    <ul class="attributes">
                        <li>
                            مشاوره خرید رایگان 09203611715
                        </li>
                        <li>
                            ضمانت اصل بودن کالا همراه با برگه ضمانت
                        </li>
                        <li>
                            ارسال با بیمه حمل به سراسر کشور
                        </li>
                        <li>
                            خدمات پس از فروش، تعمیر و نگهداری
                        </li>
                        <li>
                            بازگشت کالا در صورت عدم تطابق با کالای معرفی شده
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
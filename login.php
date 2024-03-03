<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="auth-form">
                <div class="form-logo">
                    <a href="<?= BASE_URL; ?>" class="logo">
                        <img src="./img/logo.svg">
                    </a>
                </div>
                <div class="form-title text-center">
                    ورود به سایت
                </div>
                <div class="form-group">
                    <label>ایمیل: </label>
                    <input class="input-group" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>رمزعبور: </label>
                    <input class="input-group" type="password" name="password">
                </div>
                <div class="from-group">
                    <button class="signin">
                        ورود
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
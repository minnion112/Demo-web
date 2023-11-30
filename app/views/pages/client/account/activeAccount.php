<section class="active-account-area">
    <div class="container text-center ">
        <div class="active-account-main">
            <span class="icon <?= $dataRegister['icon'] == 'times' ? 'danger' : '' ?>"><i class="fas fa-<?= $dataRegister['icon'] ?>"></i></span>
            <h1><?= $dataRegister['h1'] ?></h1>
            <h5><?= $dataRegister['h5'] ?></h5>
            <a href="login" target="_blank" class="btn btn-custom">Trở lại đăng nhập </a>
        </div>
    </div>
</section>
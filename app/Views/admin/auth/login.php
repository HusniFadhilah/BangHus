<?= $this->extend('templates/auth/template') ?>

<?= $this->section('contentauthadmin') ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg col-sm col-md">
                            <div class="p-lg-5 p-4 p-md-5">
                                <div class="text-center">
                                    <a href="/">
                                        <img src="/assets/img/logo/logo.jpg" class="img-circle" width="40%" alt="Login">
                                    </a>
                                </div>
                                <br />
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>

                                <form class="user" method="post" action="/auth/login">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" placeholder="Email" name="email" value="">
                                        <span class="invalid-feedback ml-2"><?= $validation->getError('email') ?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" id="password" placeholder="Password" name="password">
                                        <span class="invalid-feedback ml-2"><?= $validation->getError('password') ?></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection() ?>
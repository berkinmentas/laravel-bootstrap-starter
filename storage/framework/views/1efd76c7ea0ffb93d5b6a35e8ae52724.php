<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> | <?php echo e(env('APP_NAME')); ?>

        <?php else: ?>
            <?php echo e(env('APP_NAME')); ?>

        <?php endif; ?>
    </title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>
<body>

<header class="header sticky-top header" id="header">
    <div class="container-fluid header-wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flext align-items-center justify-content-between ">
                <a class="nav-item-logo-image mx-5 " href="/"><img
                        src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')); ?>" alt=""></a>
                <div class="d-flex align-items-center justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Homepage')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Homepage')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Homepage')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Homepage')); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-right-menu mx-3"><i class="fa-solid fa-bars-staggered"></i></button>
                </div>
            </div>
        </nav>
    </div>

</header>

<?php $__env->startPush('js-stack'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rightMenuButtons = document.querySelectorAll('.btn-right-menu');
            const smallMenu = document.querySelector('.small-menu');
            const closeButton = document.querySelector('.close-btn');

            rightMenuButtons.forEach(button => {
                button.addEventListener('click', () => {
                    smallMenu.classList.add('open');
                });
            });

            closeButton.addEventListener('click', () => {
                smallMenu.classList.remove('open');
            });

            document.addEventListener('click', (event) => {
                const isClickedOutside = !smallMenu.contains(event.target);
                const isClickedOnButton = Array.from(rightMenuButtons).some(button => button.contains(event.target));

                if (isClickedOutside && !isClickedOnButton) {
                    smallMenu.classList.remove('open');
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<div class="page-loader">
    <div class="page-loader-img ">
        <img class="img-fluid mb-3" src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')); ?>"
             alt="Logo"/>
        <div class="page-loader-icon-text"></div>
        <div class="loader"></div>
    </div>
</div>
<div class="small-menu d-flex flex-column align-items-center justify-content-between">
    <div class="w-100">
        <div class="d-flex justify-content-between">
            <div class="menu-logo">
                Berkin Mentas
            </div>
            <button class="btn close-btn text-white">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="menu-list d-flex flex-column justify-content-between mt-5">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/"><?php echo e(__('Homepage')); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <div class="" id="projectsAccordion">
                        <h2 class="accordion-header d-flex align-items-center">
                            <button class="accordion-button collapsed nav-link py-3" type="button" data-bs-toggle="collapse" data-bs-target="#projectsCollapse">
                                <span><?php echo e(__('Homepage')); ?></span>
                                <span class="ps-2"><i class="fa-solid fa-angle-down fs-6"></i></span>
                            </button>
                        </h2>
                        <div id="projectsCollapse" class="accordion-collapse collapse" data-bs-parent="#projectsAccordion">
                            <div class="accordion-body p-0 ps-2">
                                <a href="/" class="menu-item submenu-item nav-link">
                                    <span><?php echo e(__('Homepage')); ?></span>
                                </a>
                                <a href="/" class="menu-item submenu-item nav-link">
                                    <span><?php echo e(__('Homepage')); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php echo $__env->yieldContent('body'); ?>
<?php echo $__env->yieldPushContent('js-stack'); ?>
<footer>
    <div class="footer-body py-5">
        <div class="container align-items-center justify-content-center">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="logo pb-3">
                        <img src="<?php echo e(\Illuminate\Support\Facades\Vite::asset('resources/images/logo.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-3">
                    <div class="title">
                        <?php echo e(__('Footer')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container py-5">
            © 2024 Berkin Mentas
        </div>
    </div>
</footer>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel-starter/resources/views/layouts/base.blade.php ENDPATH**/ ?>
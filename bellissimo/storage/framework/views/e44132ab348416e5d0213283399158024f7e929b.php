<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <script>
    
        <?php if(Session::has('success')): ?>
            toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
            toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>
            
    </script>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Products
                </a>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    New Products
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">
                   
                  <?php if(Auth::check()): ?>
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="<?php echo e(route('home')); ?>">Home</a>
                            </li>

                            <li class="list-group-item">
                                <a href="<?php echo e(route('categories')); ?>">Categories</a>
                            </li>
                           
                            <li class="list-group-item">
                                <a href="<?php echo e(route('products')); ?>">Products</a>
                            </li>

                             <li class="list-group-item">
                                <a href="<?php echo e(route('products.trashed')); ?>">Trash</a>
                            </li>

                            <li class="list-group-item">
                                <a href="<?php echo e(route('product.create')); ?>">Add new product</a>
                            </li>

                             <li class="list-group-item">
                                <a href="<?php echo e(route('category.create')); ?>">Add new category</a>
                            </li>
                        </ul>
                    </div>

                  <?php endif; ?>

                    <div class="col-lg-8">
                    <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
           
        </main>
    </div>
</body>
</html>

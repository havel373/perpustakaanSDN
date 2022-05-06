<head>
    <title><?php echo e(config('app.name') . ': ' .$title ?? config('app.name')); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo e(config('app.name') . ': ' .$title ?? config('app.name')); ?>" />
    <meta property="og:url" content="https://peprustakaanSDN.dev" />
    <meta property="og:site_name" content="<?php echo e(config('app.name')); ?>" />
    <link rel="canonical" href="https://peprustakaanSDN.dev" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo e(asset('keenthemes/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('keenthemes/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/theme/auth/head.blade.php ENDPATH**/ ?>
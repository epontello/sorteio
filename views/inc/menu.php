<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UNISORTEIO</title>
        <link rel="icon" type="image/x-icon" href="<?=BASE_URL?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="<?=BASE_URL?>/assets/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=BASE_URL?>/assets/css/styles.css" rel="stylesheet" />
        
        <style>
            .preload{
            position: fixed;
            z-index:99999;
            top:0; left:0;
            width:100%; height:100%;
            opacity:1;
            background-color:#000;
            background-image:url('<?=BASE_URL?>/assets/img/imagens-e-gifs-de-loading-21.gif');
            background-position:50% 50%;
            background-repeat:no-repeat;
        }
        </style>
        <script>
            window.onload = function(){
                var div = document.getElementById('preload');
                preload(div, 10);
            };
            function preload(el, interval){
                var op = 1;
                var timer = setInterval(function () {
                    if (op <= 0.1){
                        clearInterval(timer);
                        el.style.display = 'none';
                        el.className = '';
                    }
                    el.style.opacity = op;
                    op -= op * 0.1;
                }, interval);
            }
        </script>
    </head>
    <body id="page-top">

        <script src="<?=BASE_URL?>/assets/js/jquery-1.9.0.js"></script>
        <!-- Bootstrap core JS-->
        <script src="<?=BASE_URL?>/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=BASE_URL?>/assets/js/scripts.js"></script>
    </body>
</html>

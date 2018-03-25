<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum 24 | Halaman Web tanpa Reload</title>
        <script type="text/javascript"src="asset/js/jquery-3.3.1.min.js"></script>
        <link rel="Stylesheet"type="text/css"href="asset/css/style3.css">
    </head>
    <body>
    <div class="content">
        <header>
            <h1 class="judul">Praktikum 24</h1>
            <h3 class="deskripsi">Membuat Halaman Website Tanpa Reload dengan JQuery</h3>
        </header>
        <div class="menu">
            <ul>
                <li>a class="klik_menu" id="home">HOME</a></li>
                <li>a class="klik_menu" id="tentang">TENTANG</a></li>
                <li>a class="klik_menu" id="tutorial">TUTORIAL</a></li>
                <li>a class="klik_menu" id="sosmed">SOSIAL MEDIA</a></li>
            </ul>
        </div>
        <div class="badan">
        </div>
    </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.klik_menu').click(function(){
                var menu=$(this).attr('id');
                if (menu=="home"){
                    $('.badan').load('home.php');}
                else if(menu=="tentang"){
                    $('.badan').load("tentang.php");}
                else if (menu=="tutorial"){
                    $('.badan').load("tutorial.php");}
                else if (menu=="sosmed"){
                    $('.badan').load("sosmed.php");}         
                });
            });
            //halaman yang diload default pertama kali
            $('.badan').load('home.php');
        });
    </script>
</html>
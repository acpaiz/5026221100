<html>
<head>
<title>Latihan CSS</title>
<style>
    body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: beige;
        font-size: 18;
    }
    a:link{
        text-decoration: none;
        color: blue;
    }
    a:visited{
        text-decoration: none;
        color: blue;
    }
    a:hover{
        font-size: large;
        text-decoration: underline;
        color: yellow;
    }
    .headingmerah{
        color: red;
    }
    .pratakanan{
        text-align: right;
    }
    .pratatengah{
        text-align: center;
    }
</style>
</head>
<body>
<h1 style="color: rgb(163, 46, 46);">Selamat Datang</h1>
<h1 class="headingmerah">Selamat Datang</h1>
<p style="font-size: medium; color: aqua;">Jurusan Sistem Informasi</p>
<p class="pratakanan">Jurusan Sistem Informasi</p>
<p class="pratatengah">Jurusan Sistem Informasi</p>

<!-- "target" settings untuk membuka link bisa new tab or same tab -->
<a href="https://www.google.com" target="_blank"> Google </a> <br>
<a href="https://www.its.ac.id" target="_self"> ITS </a> <br>
<a href="intro.html"> File Pertemuan 1 </a>
</body>
</html>

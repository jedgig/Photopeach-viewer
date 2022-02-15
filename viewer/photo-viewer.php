<?php 
    $quitar = '(https://photopeach.com/album/)';
    $cadena = $_POST["url_link"];
    $albumid = preg_replace($quitar, '', $cadena);

    if ($cadena == ''){
        header('Location: ./index.html');
    };


    $album = simplexml_load_file("https://photopeach.com/api/getphotos?album_id=". $albumid);
    $total_album = count($album->photos->photo);
    $authorname = $album->author;   
    echo "<div class='fdjhbv'>";

    echo "</div>";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icon/favicon-2.png">
    <title><?php echo $authorname; ?> - PhotoPeach photo viewer</title>
</head>
<body>
<div class="header">
    <table>
        <td>
        <a class="main_title">Photopeach photo viewer</a>
        </td>
        <tr>
            <p class="main_title creator"><?php echo $authorname; ?></p>
        </tr>
    </table>
    </div>
    <div class="lewg">
    <?php
    for ($x=0; $x<$total_album; $x++) {
        $id = $album->photos->photo[$x]['id'];
        $jdtitle = $album->title;
        $jdid = $album->photos->photo[$x]['lurl']; 
        if ($jdid == 'about:blank'){
            $fdpig = $jdid;
        } else {
            $rtyw = $jdid;
        }
        ?>
        <a href="./fullscreen.html?imgurl=<?php echo $rtyw; ?>"><img id="def8r5" oncontextmenu="return false;" draggable="false" onmousedown="return false" style="user-drag: none" class='imagesk' src='<?php echo $rtyw; ?>'></a>
        
        
   <?php }?>
    </div>
    <div class="watermark"><p>Created by: <a href="https://www.instagram.com/jedg_ig" target="_blank"><b>@jedg_ig</b></a></p></div>


    <script>
document.addEventListener('contextmenu', event => event.preventDefault());
        function enable(){
            document.getElementById("def8r5").setAttribute("oncontextmenu", "return true"); 
        }
</script>
</body>
<style>
    :root {
        --main-color: #049EC5;
        --blue-white: #3bb2d0;
        --blue-middle: #71c5db;
        --blue-white-more: #a8d9e6;
        --white-blue: #deecf0;
        --ultra-white-blue: #ecf5f8;
    }

    * {
        padding: 0;
        margin: 0;
        -webkit-touch-callout: none; 
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none; 
        user-select: none;
        -webkit-user-drag: none;
        -khtml-user-drag: none;
        -moz-user-drag: none;
         -o-user-drag: none;
    }

    @font-face {
        font-family: BauhauSTD;
        src: url("assets/fonts/BauhausStd-Medium.otf");
    }

    .header {
        position: fixed;
        background-color: var(--main-color);
        width: 100%;
        height: 40px;
        border-radius: 0 0 1.2rem 1.2rem;
    }

    .main_title {
        margin-left: 1rem;
        color: var(--ultra-white-blue);
        font-family: BauhauSTD;
        font-size: 1.8rem;
    }
    .creator {
        position: relative;
        float: right !important;
        margin-right: 20px;
        font-size: 1.3rem;
        margin-top: 9px;
    }
    .fdjhbv {
        display: inline-block;
    }
    .imagesk {
        border-radius: 20px;
        margin: 30px;
        width: 20rem;
        display: inline-block;
        transition: all linear 0.1s;
    }

    .imagesk:hover {
        width: 20rem;
        border-radius: 30px;
        margin: 30px;
        cursor: pointer;
        overflow: hidden;
        transition: all linear 0.2s;
    }
    .lewg{
        display: block;
        margin: auto;
        margin-top: 60px;
        text-align: center;
    }
    .watermark{
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-family: 'Quattrocento Sans', sans-serif;
        font-size: 12px;
        color: #7a7a7a;
        margin-bottom: 10px;
        -moz-user-select: none;
   -khtml-user-select: none;
   -webkit-user-select: none;

   -ms-user-select: none;
   user-select: none;
    }
    .watermark a{
        text-decoration: none !important;
        color: #7a7a7a;
    }
    @media only screen and (hover: none) and (pointer: coarse){
        *{
            overflow-y: auto;
        }
    .header {
        position: fixed;
        background-color: var(--main-color);
        width: 100%;
        height: 70px;
        border-radius: 0 0 1.2rem 1.2rem;
    }

}
</style>
</html>
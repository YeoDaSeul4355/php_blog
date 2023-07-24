<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="pink">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture>
            <p class="intro__text">
                안녕하세요, 저는 열정과 도전 정신을 가진 개발자 여다슬입니다.
                끊임없이 새로운 지식과 기술을 습득하는 것을 좋아하고 이를 토대로 최고의 결과물을 만들어내기 위해 항상 노력하고 있습니다.
            </p>
        </div>
        <div class="blog__inner">
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner">
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>
                <?php foreach($result as $blog){ ?>
                    <div class="card">
                        <figure class="card__img">
                            <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>">
                                <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                            </a>
                        </figure>
                        <div class="card__title">
                            <h3><?=$blog['blogTitle']?></h3>
                            <p><?=$blog['blogContents']?></p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="blog__inner">
            <div class="blog__wrap bmStyle">
                <h2>인기글</h2>
                <div class="cards__inner col3 line2">
<?php

    // 인기글 가져오기
    $popularSql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogView DESC LIMIT 3";
    $popularResult = $connect-> query($popularSql);
?>
                <?php foreach($popularResult as $blog){ ?>
                    <div class="card">
                        <figure class="card__img">
                            <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>">
                                <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                            </a>
                        </figure>
                        <div class="card__title">
                            <h3><?=$blog['blogTitle']?></h3>
                            <p><?=$blog['blogContents']?></p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </main>            
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->
</body>
</html>                       
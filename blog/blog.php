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
    <title>블로그</title>
    <?php include "../include/head.php" ?>
</head>
<body class="pink">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="container">
        <div class="blog__search bmStyle">
            <h2>JJUL BLOG</h2>
            <p>개발자 관련된 글을 검색해보세요.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" name="searchKeyword" class="inputStyle2" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle5 ml20">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){   ?>
                        <div class="mt20"><a href="blogWrite.php" class="btnStyle5 white">글쓰기</a></div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <div class="cards__inner col3 line2">
                        <!-- <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기술에 대한 자습서 및 가이드</h3>
                                <p>이것은 블로그를 위한 고전적인 선택이며 다른 코딩 블로그와 차별화하는 좋은 방법입니다. 코딩에 대한 기본부터 고급 주제에 이르기까지 무엇이든 가르칠 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div> -->
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>
    <?php foreach($result as $blog){ ?>
        <div class="card">
            <figure class="card__img">
                <a href="blogView.php?blogID=<?=$blog['blogID']?>">
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
            <div class="right">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>
                    <?php include "../include/blogCate.php" ?>
                    <?php include "../include/blogNew.php" ?>
                    <?php include "../include/blogPopular.php" ?>
                    <?php include "../include/blogComment.php" ?>
                </div>
            </div>
        </div>
        <!-- //blog__inner -->
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>
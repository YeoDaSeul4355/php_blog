<div class="cards__inner line0">
    <?php
    $category = $blogInfo['blogCategory']; // 블로그의 카테고리 가져오기

    // 카테고리에 관련된 글 가져오기
    $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY blogID DESC LIMIT 4";
    $categoryResult = $connect->query($categorySql);

    foreach ($categoryResult as $categoryBlog) {
        $imagePath = '../assets/blog/' . $categoryBlog['blogImgFile']; // 이미지 파일 경로
        $imageSrcset = $imagePath . ', ' . $imagePath . '-min@2x.jpg 2x, ' . $imagePath . '-min@3x.jpg 3x'; // srcset 설정
        $relatedBlogID = $categoryBlog['blogID']; // 관련된 블로그의 ID

        ?>
        <div class="card">
            <figure class="card__img">
                <source srcset="<?= $imageSrcset ?>" />
                <a href="blogView.php?blogID=<?= $relatedBlogID ?>" class="more"><img src="<?= $imagePath ?>" alt="사진"></a>
            </figure>
            <div class="card__title">
                <h3><?= $categoryBlog['blogTitle'] ?></h3>
                <p><?= $categoryBlog['blogContents'] ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>
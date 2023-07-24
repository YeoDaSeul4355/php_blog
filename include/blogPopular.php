<?php

    // 인기글 가져오기
    $popularSql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogView DESC LIMIT 4";
    $popularResult = $connect-> query($popularSql);
?>

<div class="cate list2">
    <h4>인기글</h4>
    <ul>
        <?php foreach ($popularResult as $blog) { ?>
            <li><a href="blogView.php?blogID=<?= $blog['blogID'] ?>">
            <img src="../assets/blog/<?= $blog['blogImgFile'] ?>" alt="<?= $blog['blogTitle'] ?>">
            <span><?= $blog['blogTitle'] ?></span></a></li>
        <?php } ?>
    </ul>
</div>
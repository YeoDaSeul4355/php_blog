<?php
    // 최신 댓글 가져오기
    $commentNew = "SELECT * FROM blogComment WHERE commentDelete = 0 ORDER BY commentID DESC LIMIT 4";
    $commentNewResult = $connect-> query($commentNew);
    $commentInfo = $commentNewResult -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($commentInfo);
    // echo "</pre>";
?>
<div class="cate">
    <h4>최신 댓글</h4>
    <ul>
        <?php foreach ($commentNewResult as $comment) { ?>
            <li><?= $comment['commentMsg']?></li>
        <?php } ?>
    </ul>
</div>
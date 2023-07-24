<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardPass = $_POST['boardPass'];

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardPass = $connect -> real_escape_string($boardPass);
    $memberID = $_SESSION['memberID'];

    $sql = "SELECT * FROM members WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        if($info['memberID'] == $memberID && $info['youPass'] == $boardPass){
            $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
            $connect -> query($sql);
        } else {
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한 번 확인해주세요!')</script>";
        }
    } else {
        echo "<script>alert('관리자 에러!!')</script>";
    }
    
?>

<script>
    location.href = "board.php";
</script>




<?php
    // include "../connect/connect.php";
    // include "../connect/session.php";

    // $boardID = $_POST['boardID'];
    // $boardTitle = $_POST['boardTitle'];
    // $boardContents = $_POST['boardContents'];
    // $memberID = $_SESSION['memberID'];

    // $boardTitle = $connect -> real_escape_string($boardTitle);
    // $boardContents = $connect -> real_escape_string($boardContents);

    // // 게시물의 작성자 boardID와 로그인한 사용자의 memberID를 비교
    // $sql = "SELECT boardID FROM board WHERE boardID = '{$boardID}' AND memberID = '{$memberID}'";
    // $result = $connect -> query($sql);
    // $row = $result -> fetch_array(MYSQLI_ASSOC);
    // $boardID = $row['boardID'];

    // if(!$boardID) {
    //     echo "<script>alert('작성자만 게시물을 수정할 수 있습니다.')</script>";
    //     echo "<script>location.href='board.php'</script>";
    //     exit;
    // }

    // $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
    // $connect -> query($sql);

    // echo "<script>alert('게시물이 수정되었습니다.')</script>";
    // echo "<script>location.href='board.php'</script>";
?>

<!-- <script>
    location.href = "board.php";
</script> -->
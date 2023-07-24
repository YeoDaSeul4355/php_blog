<?php
    include "../connect/connect.php";

    $adminName = $_POST['youName'];
    $adminEmail = $_POST['youEmail'];
    $adminNick = $_POST['youNick'];
    $adminPass = sha1($_POST['youPass']);
    $adminBirth = $_POST['youBirth'];
    $adminPhone = $_POST['youPhone'];
    $regTime = time();

    $sql = "INSERT INTO adminMembers(adminEmail, adminName, adminNick, adminPass, adminBirth, adminPhone, adminDelete, adminRegtime, adminModtime) VALUES('$adminEmail', '$adminName', '$adminNick', '$adminPass', '$adminBirth', '$adminPhone', '1', '$regTime', '$regTime')";
    $connect -> query($sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="pink">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center">
            <picture class="intro__images">
                <img src="../assets/img/adminAgree.png" alt="회원가입이미지">
            </picture>
            <p class="intro__text">
                회원 가입을 축하드립니다!<br>
                로그인을 해주세요.
            </p>
            <a class="link anim-explode-container mt50" href="#">
                <p>로그인 하러가기</p>
                <svg class="anim-explode" role="presentational" viewBox="0 0 500 500"></svg>
            </a>
        </div>

        <!-- //intro__inner -->
        <div class="join__inner">
            <h2>회원가입 완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
        <div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script>
        let container = document.querySelector(".anim-explode-container");
        let svg = container.querySelector(".anim-explode");
        let numberOfShapes = 20;

        let shapes = [
            "M254 286.11a50 50 0 0050-50H204a50 50 0 0050 50z",
            "M255.5 271a20 20 0 10-20-20 20 20 0 0020 20zm0 30a50 50 0 10-50-50 50 50 0 0050 50z",
            "M248.8 202.17a8 8 0 019.4 0l40.6 29.5a8 8 0 012.9 8.94l-15.5 47.73a8 8 0 01-7.61 5.52h-50.18a8 8 0 01-7.61-5.52l-15.5-47.73a8 8 0 012.9-8.94z",
            "M307.5 250a50 50 0 11-50-50 50 50 0 0150 50",
            "M248.08 204.07a11.91 11.91 0 0116.84 0l30.59 30.59a11.91 11.91 0 11-16.85 16.85l-10.25-10.25v47.41a11.91 11.91 0 11-23.82 0v-47.41l-10.25 10.25a11.91 11.91 0 01-16.85-16.85z",
            "M234 237a22.5 22.5 0 0045 0h27.5a50 50 0 01-100 0z",
            "M258 202.5a12 12 0 00-12 12v26h-26a12 12 0 000 24h26v26a12 12 0 0024 0v-26h26a12 12 0 000-24h-26v-26a12 12 0 00-12-12z"
        ];

        container.addEventListener("mouseenter", (e) => {
            let animatedShapes = [];

            for (var i = 0; i < numberOfShapes; i++) {
                let newElement = document.createElementNS(
                    "http://www.w3.org/2000/svg",
                    "path"
                );
                newElement.setAttribute("d", gsap.utils.random(shapes));
                newElement.style.fill = gsap.utils.random([
                    "#FF99BE",
                    "#9CDBFF",
                    "#FFDE8A",
                    "#FFB26A"
                ]);
                svg.appendChild(newElement);
                animatedShapes.push(newElement);
            }

            function killShapes() {
                animatedShapes.forEach((shape) => {
                    svg.removeChild(shape);
                });
            }

            gsap.set(animatedShapes, {
                transformOrigin: "center",
                scale: "random(0.4, 0.8)"
            });

            gsap.to(animatedShapes, {
                onComplete: killShapes,
                keyframes: [
                    {
                        rotate: "random(180, -180)",
                        x: "random([-150, -100, -200, 200, 100, 150])",
                        y: "random([-150, -100, -200, 200, 100, 150])",
                        ease: "expo.out",
                        duration: 4,
                        stagger: {
                            amount: 0.1
                        }
                    },
                    { opacity: 0, delay: -3 }
                ]
            });
        });

    </script>
</body>
</html>
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
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <img src="../assets/img/adminAgree.png" alt="회원가입이미지">
            </picture>
            <p class="intro__text">
                회원가입을 통해 다양한<br>정보들을 자유롭게 얻어가세요!
            </p>
        </div>

        <!-- //intro__inner -->
        <div class="join__inner">
            <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <h3 class="blind">쭐 블로그 이용약관</h3>
                <div class="join__agree1">
                    <p class="mb20">
                        제 1장 총칙<br><br>
                        제1조 (목적)
                        이 약관은 하루 한 지문(이하 “회사”라 합니다)이 모바일 기기를 통해 제공하는 서비스 및 이에 부수하는 네트워크, 웹사이트, 기타 서비스<br>
                        (이하 “서비스”라 합니다)의 이용에 대한 회사와 서비스 이용자의 권리ㆍ의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.<br><br>
                        제2조 (용어의 정의) <br><br>
                        ① 이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br><br>
                        “회사”라 함은 모바일 기기를 통하여 서비스를 제공하는 사업자를 의미합니다.<br>
                        “회원”이란 이 약관에 따라 이용계약을 체결하고, 회사가 제공하는 서비스를 이용하는 자를 의미합니다.<br>
                        “임시회원”이란 일부 정보만 제공하고 회사가 제공하는 서비스의 일부만 이용하는 자를 의미합니다.<br>
                        “모바일 기기”란 콘텐츠를 다운로드 받거나 설치하여 사용할 수 있는 기기로서, 휴대폰, 스마트폰, 휴대정보단말기(PDA), 태블릿 등을 의미합니다.<br>
                        “계정정보”란 회원의 회원번호와 외부계정정보, 기기정보, 별명, 프로필 사진, 친구목록 등 회원이 회사에 제공한 정보와 서비스 이용정보,<br>
                        이용요금 결제 정보 등을 통칭합니다.<br>
                        “콘텐츠”란 모바일 기기로 이용할 수 있도록 회사가 서비스 제공과 관련하여 디지털 방식으로 제작한 유료 또는 무료의 내용물<br>
                        일체(애플리케이션, 네트워크 서비스 등)를 의미합니다.<br>
                        “오픈마켓”이란 모바일 기기에서 콘텐츠를 설치하고 결제할 수 있도록 구축된 전자상거래 환경을 의미합니다.<br>
                        “애플리케이션”이란 회사가 제공하는 서비스를 이용하기 위하여 모바일 기기를 통해 다운로드 받거나 설치하여 사용하는 프로그램 일체를 의미합니다.<br>
                        ② 이 약관에서 사용하는 용어의 정의는 본 조 제1항에서 정하는 것을 제외하고는 관계법령 및 서비스별 정책에서 정하는 바에 의하며, 이에 정하지 아니한 것은<br>
                        일반적인 상 관례에 따릅니다.<br><br>
                        제3조 (회사정보 등의 제공)<br><br>
                        회사는 다음 각 호의 사항을 회원이 알아보기 쉽도록 서비스 내에 표시합니다. 다만, 개인정보처리방침과 약관은 회원이 연결화면을 통하<br>
                        볼 수 있도록 할 수 있습니다.<br><br>
                        상호 및 대표자의 성명<br>
                        영업소 소재지 주소(회원의 불만을 처리할 수 있는 곳의 주소를 포함한다)<br>
                        전화번호, 전자우편주소<br>
                        사업자 등록번호<br>
                        통신판매업 신고번호<br>
                        개인정보처리방침<br>
                        서비스 이용약관<br>
                    </p>
                    <div class="check">
                        <input type="checkbox" id="agreeCheck" class="agreeCheck">
                        <label for="agreeCheck">쭐 블로그 이용약관</label>
                    </div>
                </div>
                <div class="join__agree2">
                    <p class="mb20">
                        1. 개인정보처리목적<br><br><br>
                        제1조 (목적)<br>
                        회사는 이용자의 개인정보를 다음 목적 이외 용도로 사용하지 않습니다.<br><br><br>
                        이용자에게 서비스를 제공하기 위한 목적<br><br>
                        이용자 문의에 응답하고 이용자의 요청을 이행하기 위한 목적<br><br>
                        서비스에 관한 정보, 이용약관 및 정책 변경 사항과 같은 정보를 이용자에게 고지하기 위한 목적<br><br>
                        법적 절차에 따라 이용자의 권리를 보호하기 위한 목적으로 필요하다고 판단되는 조치(정부 기관의 요청 등)를 시행하기 위한 목적<br><br>
                        이용자의 개인정보 보호 환경을 구축하거나 서비스를 개선하기 위한 목적<br><br><br>
                        2. 타사 광고 금지<br><br>
                        아이들이 어떠한 방해 없이 학습에 집중할 수 있도록 회사가 개발한 앱 서비스에는 타사 광고를 싣지 않습니다. 회사가 개발한 앱 서비스는 교사,<br>
                        언어치료전문가, 아동교육전문가가 기획하고 검토한 콘텐츠들로 구성되어있습니다.<br><br><br>
                        3. 데이터 판매 금지<br><br>
                        회사는 다음 각 호의 사항을 회원이 알아보기 쉽도록 서비스 내에 표시합니다. 다만, 개인정보처리방침과 약관은 회원이 연결화면을 통하여<br>
                        볼 수 있도록 할 수 있습니다.<br><br>
                        상호 및 대표자의 성명<br>
                        영업소 소재지 주소(회원의 불만을 처리할 수 있는 곳의 주소를 포함한다)<br>
                        전화번호, 전자우편주소<br>
                        사업자 등록번호<br>
                        통신판매업 신고번호<br>
                        개인정보처리방침<br>
                        서비스 이용약관<br>
                    </p>
                    <div class="check">
                        <input type="checkbox" id="agreeCheck" class="agreeCheck">
                        <label for="agreeCheck">개인정보 수집 및 이용</label>
                    </div>
                    <em class="agreeMsg"></em>
                </div>
                <a href="joinSave.php"><button class="btnStyle4 agreeBtn">동의</button></a>
            </div>
        <div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script>
        // 체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");

        agreeBtn.addEventListener("click", (e) => {
            
            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerText = "*체크박스를 다시 한 번 확인해주세요!";
                    
                    e.preventDefault();
                }
            });
        })
    </script>
</body>
</html>
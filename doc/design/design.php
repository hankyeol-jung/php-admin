<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="/css/admin/admin.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/793dc8e510.js" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>Design setup</title>

</head>
<body>

    <section class='design'>
        <div class='width271'>
            <h5>메뉴 탭</h5>
            <!-- 메뉴 탭 버튼 -->
            <ul class='menu-tab_group'>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class='fa-solid fa-house'></i>
                        <span>ADMIN 홈</span>
                        <button type='button'>
                            <i class='fa-solid fa-angle-down'></i>
                        </button>
                    </a>
                    <ul>
                        <li>
                            <a href='#'>
                                <span>정보</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='menu-tab selected'>
                    <a href='#'>
                        <i class='fa-solid fa-house'></i>
                        <span>엑티브</span>
                        <button type='button'>
                            <i class='fa-solid fa-angle-down'></i>
                        </button>
                    </a>
                    <ul>
                        <li class='selected'>
                            <a href='#'>
                                <span>엑티브</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>정보</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>정보</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <h5>텍스트 디자인</h5>
            <!-- 텍스트 디자인 -->
            <h1 class='wrap_title'>
                H1 타이틀
            </h1>
        </div>
        <div>
            <h5>버튼 디자인</h5>
            <!-- 네모버튼 디자인 -->
            <div>
                <a href='#' class='btnSizeM'>글작성</a>
                <a href='#' class='btnSizeM colorBlueReverse'>a 태그</a>
                <button type='button' class='btnSizeM colorBlueReverse'>컬러버튼태그</button>
            </div>
            <div class='mt-05'>
                <button type='button' class='btnSizeM colorGrayReverse'>회색버튼태그</button>
                <button type='button' class='btnSizeM colorRedReverse'>회색버튼태그</button>
                <a href='#' class='btnSizeS colorGrayReverse custom_btn'>버튼</a>
            </div>
            <div class='mt-05'>
                <a href='#' class='btn_basic_type02'>버튼</a>
                <a href='#' class='btn_basic_type04'>버튼</a>
                <a href='#' class='btn_basic_type05'>버튼</a>
            </div>
        </div>
    </section>

</body>

    <script src="/js/admin.js"></script>

</html>
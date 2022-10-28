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

    <?php
        if(basename($_SERVER['PHP_SELF'])=='index.php'){
            $active="selected";
        }
    ?>
    <div id='admin_section' class="">
        <div class='gnb_wrap'>
            <button class="btn_toggle_gnb" style='display: inline-block;'>
                <i class="fa-solid fa-arrow-right open_i"></i>
                <i class="fa-solid fa-arrow-left closed_i"></i>
            </button>
            <ul class='gnb'>
                <li class='menu-tab <?=$active?>'>
                    <a href='#'>
                        <i class='fa-solid fa-house'></i>
                        <span>ADMIN 홈</span>
                    </a>
                </li>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class="fa-solid fa-circle-info"></i>
                        <span>정보</span>
                        <button type='button'>
                            <i class='fa-solid fa-angle-down'></i>
                        </button>
                    </a>
                    <ul>
                        <li>
                            <a href='#'>
                                <span>홈페이지정보</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>회사정보</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>링크관리</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class="fa-solid fa-sitemap"></i>
                        <span>사이트맵</span>
                        <button type='button'>
                            <i class='fa-solid fa-angle-down'></i>
                        </button>
                    </a>
                    <ul>
                        <li>
                            <a href='#'>
                                <span>메뉴관리</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>게시판관리</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>페이지관리</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class="fa-solid fa-user-group"></i>
                        <span>회원관리</span>
                    </a>
                </li>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class="fa-solid fa-palette"></i>
                        <span>디자인</span>
                        <button type='button'>
                            <i class='fa-solid fa-angle-down'></i>
                        </button>
                    </a>
                    <ul>
                        <li>
                            <a href='#'>
                                <span>브랜트</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>메인</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>서브</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <span>팝업</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='menu-tab'>
                    <a href='#'>
                        <i class="fa-solid fa-envelopes-bulk"></i>
                        <span>우편함</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    

</body>

    <script src="/js/admin.js"></script>

</html>
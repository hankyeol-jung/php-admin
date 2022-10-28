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
                <span>ADMIN 홈</span>
                <button type='button'>
                    <i class='fa-solid fa-angle-down'></i>
                </button>
            </a>
            <ul>
                <li class='selected'>
                    <a href='#'>
                        <span>정보</span>
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

</body>

    <script src="/js/admin.js"></script>

</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/reservation.css" rel="stylesheet">
</head>
<body class="sub reservation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <section class="reserve-view">
                <!-- page-header -->
                <div class="page-header">
                    <h2>RESERVATION</h2>
                    <p>원하시는 서비스에 친절한 안내를 받으실 수 있습니다</p>
                </div>
                <article class="view">
                    <div class="article-header">
                        <ul>
                            <li class="subject">
                                <i class="icon-lock">
                                    <span class="sr-only">비밀글</span>
                                </i>
                                <h3>3월 20일 예약 확인해주세요</h3>
                            </li>
                            <li class="date">
                                <dl>
                                    <dt>등록일</dt>
                                    <dd>2016-12-14</dd>
                                </dl>
                            </li>
                            <li class="user-info">
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>홍길*</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <div class="view-content">
                            내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력
                            내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력
                        </div>
                        <div class="adm-reply">
                            <div class="reply-header">
                                <h4>관리자 답변</h4>
                                <dl>
                                    <dt>등록일</dt>
                                    <dd>2016-12-17</dd>
                                </dl>
                            </div>
                            <div class="reply-content">
                                내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력
                                내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력내용출력
                            </div>
                        </div>
                    </div>
                </article>
                <div class="btn-area">
                    <p>
                        <a href="/reservation/reserve_list.php" class="btn btn-basic" role="button">글목록</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
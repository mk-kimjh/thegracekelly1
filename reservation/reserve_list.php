<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/reservation.css" rel="stylesheet">
</head>
<body class="sub reservation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <section class="reserve-list">
                <!-- page-header -->
                <div class="page-header">
                    <h2>RESERVATION</h2>
                    <p>원하시는 서비스에 친절한 안내를 받으실 수 있습니다</p>
                </div>
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <label for="search">예약자명</label>
                            <input type="text" id="search" class="form-control">
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th class="date">작성일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요3월 20일 예약 확인해주세요3월 20일 예약 확인해주세요
                                        <p class="reply">답변완료</p>
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>99</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                        <p class="reply">답변완료</p>
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>98</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                        <p class="reply">답변완료</p>
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>97</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                        <p class="reply">답변완료</p>
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>96</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요3월 20일 예약 확인해주세요3월 20일 예약 확인해주세요
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>95</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>94</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                            <tr>
                                <td>93</td>
                                <td>
                                    <a href="#">
                                        <i class="icon-lock"><span class="sr-only">비밀글</span></i>
                                        3월 20일 예약 확인해주세요
                                    </a>
                                </td>
                                <td>홍길*</td>
                                <td class="date">2016-07-01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="/reservation/reserve_write.php" class="btn btn-basic" role="button">글쓰기</a>
                    </p>
                </div>
                <div class="paging">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous" class="arrow">
                                    <i class="icon-angle-double-left" aria-hidden="true">
                                        <span class="sr-only">previous</span>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous" class="arrow ar-left">
                                    <i class="icon-angle-left" aria-hidden="true">
                                        <span class="sr-only">previous</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next" class="arrow ar-right">
                                    <i class="icon-angle-right" aria-hidden="true">
                                        <span class="sr-only">next</span>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next" class="arrow">
                                    <i class="icon-angle-double-right" aria-hidden="true">
                                        <span class="sr-only">next</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
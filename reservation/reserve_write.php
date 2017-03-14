<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/reservation.css" rel="stylesheet">
<link href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">
</head>
<body class="sub reservation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <article class="reserve_write">
                <!-- page-header -->
                <div class="page-header">
                    <h2>RESERVATION</h2>
                    <p>원하시는 서비스에 친절한 안내를 받으실 수 있습니다</p>
                </div>
                <form action="#">
                    <div class="service-info">
                        <div class="service">
                            정보통신망 법 제 50조의 2 (전자우편주소의 무단 수집행위 등 금지)<br><br>
                            1. 누구든지 전자우편주소의 수집을 거부하는 의사 인터넷 홈페이지에서 자동으로 전자우편주소를 수집 프로그램 그 밖의 기술적 장치를 이용하여 전자우편주수집하여서는 아니된다.
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox">개인정보수집에 동의합니다.</label>
                        </div>
                    </div>
                    <section class="write">
                        <h3>예약정보 입력</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>행사희망일정</th>
                                        <td class="date">
                                            <div class="form-group">
                                                <input type="text" id="u-date" class="form-control">
                                                <label for="u-date">
                                                    <i class="icon-calendar"></i>
                                                    <span class="sr-only">날짜조회</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="guest-sum">예상하객수</label></th>
                                        <td>
                                            <div class="form-group">
                                                <select id="guest-sum" class="form-control">
                                                    <option>선택하세요</option>
                                                    <option>100명</option>
                                                    <option>150명</option>
                                                    <option>200명</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-name">신청자성명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-mail">이메일주소</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="email" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-phone">휴대전화</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="prevent"><label for="captcha">자동등록방지</label></th>
                                        <td class="captcha">
                                            <div class="captcha-box">
                                                자동등록방지 영역
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="captcha" class="form-control">
                                            </div>
                                            <p class="attention">자동등록방지 숫자를 순서대로 입력하세요</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="u-content"><label for="u-content">상담받고자 하는내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-gray">신청하기</button>
                            </p>
                        </div>
                    </section>
                </form>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        (function($) {
            $("#u-date").datepicker({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                changeMonth: true,
                changeYear: true,
                yearSuffix: '년'
            });
        })(jQuery);
    </script>
</body>
</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <!-- page-header -->
            <div class="page-header">
                <h2>KELLY IS</h2>
                <p>
                    도심 속, 자연과 어우러진 하우스웨딩이<br class="visible-xs visible-md"> 당신의 꿈꾸는 결혼을 실현시켜드립니다.
                </p>
            </div>
            
            <!-- tab-menu common -->
            <div class="tab-menu">
                <ul class="nav nav-pills">
                  <li class="active"><a href="#">ABOUT US</a></li>
                  <li><a href="#">MOVIE</a></li>
                </ul>
            </div>
            
            <!-- wedding -->
            <div style="margin-top: 40px;"></div>
            <ul class="nav-wedding">
                <li class="active"><a href="#">PARTY &amp; WEDDING</a></li>
                <li><a href="#">BRIDAL PARTY</a></li>
                <li><a href="#">TRADITIONAL<br class="visible-xs"> CEREMONY</a></li>
                <li><a href="#">AFTER PARTY</a></li>
            </ul>
            
            <!-- table -->
            <div style="margin-top: 40px;"></div>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>이름</th>
                            <th>날짜</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="num">1</td>
                            <td class="title"><a href="#">연말 행사안내</a></td>
                            <td>최고관리자</td>
                            <td class="date">2017-02-10</td>
                        </tr>
                        <tr>
                            <td class="num">2</td>
                            <td class="title"><a href="#">아름다운 샹들리에로 교체</a></td>
                            <td>최고관리자</td>
                            <td class="date">2017-02-10</td>
                        </tr>
                        <tr>
                            <td class="num">3</td>
                            <td class="title"><a href="#">하우스웨딩 초대전 : 더그레이스켈리 파티움 하우스 - 셀프웨딩 웨딩박람회</a></td>
                            <td>최고관리자</td>
                            <td class="date">2017-02-10</td>
                        </tr>
                        <tr>
                            <td class="num">4</td>
                            <td class="title"><a href="#">설문이벤트 당첨자, 피크닉 가방 증정</a></td>
                            <td>최고관리자</td>
                            <td class="date">2017-02-10</td>
                        </tr>
                        <tr>
                            <td class="num">5</td>
                            <td class="title"><a href="#">FLY TO THE SKY(플라이투더 스카이) 그렇게 됐어 MV</a></td>
                            <td>최고관리자</td>
                            <td class="date">2017-02-10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- btn-area -->
            <div style="margin-top: 40px;"></div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-default" role="button">이전</a>
                    <a href="#" class="btn btn-default" role="button">다음</a>
                </p>
                <p>
                    <a href="#" class="btn btn-gray" role="button">목록보기</a>
                </p>
            </div>
            
            <!-- search-form -->
            <div style="margin-top: 40px;"></div>
            <div class="search-form">
                <form action="#">
                    <div class="form-group">
                        <select>
                            <option>제목</option>
                        </select>
                        <input type="text" id="search" class="form-control" placeholder="검색하실 단어를 입력하세요">
                        <label for="search" class="sr-only">검색하실 단어를 입력하세요</label>
                    </div>
                    <button type="submit" class="btn search-btn">검색</button>
                </form>
            </div>
            
            <!-- paging -->
            <div style="margin-top: 40px;"></div>
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
            
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
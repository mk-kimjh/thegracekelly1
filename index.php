<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="about">
                        <a href="#">
                            <p class="visible-md visible-lg">
                                <img class="img-responsive" src="/assets/images/main/img_about_lg.jpg" alt="">
                            </p>
                            <p class="visible-sm">
                                <img class="img-responsive" src="/assets/images/main/img_about_sm.jpg" alt="">
                            </p>
                            <p class="visible-xs">
                                <img class="img-responsive" src="/assets/images/main/img_about_xs.jpg" alt="">
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/wZZyd2u9hjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <section class="location">
                                <header>
                                    <h4>LOCATION</h4>
                                    <a class="more" href="/location/map.php"><span class="sr-only">더보기</span></a>
                                </header>
                                <div class="map">
                                    <p>맵영역</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <section class="news">
                                <header>
                                    <h4>RESERVATION</h4>
                                    <a class="more" href="/reservation/reserve_write.php"><span class="sr-only">더보기</span></a>
                                </header>
                                <ul>
                                    <li><a href="#">연말 행사안내</a></li>
                                    <li><a href="#">아름다운 샹들리에로 교체</a></li>
                                    <li><a href="#">하우스웨딩 초대전 : 더그레이스켈리 파티움 하우스웨딩전에 초대합니다.</a></li>
                                    <li><a href="#">설문이벤트 당첨자, 피크닉 가방 증정</a></li>
                                    <li><a href="#">설문이벤트 당첨자, 피크닉 가방 증정</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <section class="space">
                                <header>
                                    <h4>HOUSE WEDDING</h4>
                                    <a class="more" href="/house/wedding.php"><span class="sr-only">더보기</span></a>
                                </header>
                                <ul class="slider">
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_space_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_space_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_space_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_space_1_xs.jpg" alt=""></a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <section class="party">
                                <header>
                                    <h4>PARTY</h4>
                                    <a class="more" href="/special/party.php"><span class="sr-only">더보기</span></a>
                                </header>
                                <ul class="slider">
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_party_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_party_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_party_1_xs.jpg" alt=""></a></li>
                                    <li><a href="#"><img class="img-responsive" src="/assets/images/main/img_party_1_xs.jpg" alt=""></a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $('.space .slider').bxSlider({
                controls: false,
                buildPager: function(slideIndex) {
                    return "<span class='sr-only'>"+(slideIndex+1)+"</span>";
                }
            });
            $('.party .slider').bxSlider({
                controls: false,
                buildPager: function(slideIndex) {
                    return "<span class='sr-only'>"+(slideIndex+1)+"</span>";
                }
            });
        })(jQuery);
    </script>
</body>
</html>
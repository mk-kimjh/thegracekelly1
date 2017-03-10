<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/movie.css" rel="stylesheet">
</head>
<body class="sub speical">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <!-- page-header -->
            <div class="page-header">
                <h2>MOVIE</h2>
                <p>The Grace Kelly의 아름다운 웨딩 영상을 보여드립니다</p>
            </div>
            <article class="video">
                <div class="movie-play">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_C2TCjs4ONg?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
                    </div>
                    <div class="summary">
                        <h3>더 그레이스 켈리 웨딩 동영상</h3>
                        <p>
                            웨딩전문프로듀서와 함께 세상의 단, 하나뿐인<br class="visible-xs"> '그레이스 켈리 디자인 웨딩'의 하이라이트 영상으로<br> 여유로운 예식시간, 이국적인 야외가든예식<br class="visible-xs"> 아름다운 예식을 미리 경험해보세요.
                        </p>
                    </div>
                </div>
                <div class="movie-play">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SbmP1VCGgbk?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
                    </div>
                    <div class="summary">
                        <h3>더 그레이스 켈리 웨딩<br class="visible-xs"> 박람회 동영상</h3>
                        <p>
                            둘 만의 특별한 웨딩을 그릴 수 있는 공간, 더 그레이스<br class="visible-xs">켈리의 하우스웨딩을<br class="hidden-xs"> 웨딩박람회에서 촬영한<br class="visible-xs"> 편집영상을 보실 수 있습니다.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
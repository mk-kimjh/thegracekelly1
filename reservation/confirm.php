<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/reservation.css" rel="stylesheet">
</head>
<body class="sub reservation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <div class="confirm">
                <p class="title">
                    작성자만 글을 볼 수 있습니다. 작성자 본인이라면,<br>
                    글 작성시 입력한 비밀번호를 입력하여 글을 볼 수 있습니다.
                </p>
                <form action="#">
                    <div class="form-group">
                        <label for="u-pw" class="sr-only">비밀번호 입력</label>
                        <input type="password" id="u-pw" class="form-control" placeholder="비밀번호 확인">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-default">확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
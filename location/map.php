<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/location.css" rel="stylesheet">
</head>
<body class="sub location">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <div class="container">
            <!-- page-header -->
            <div class="page-header">
                <h2>LOCATION</h2>
                <p>원하시는 서비스에 친절한 안내를 받으실 수 있습니다</p>
            </div>
            <article class="map">
                <p class="maps">
                    <img src="/assets/images/location/map_img.jpg" class="img-responsive" alt="map">
                </p>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>주소</th>
                                <td>서울 강남구 언주로 126길 23<br>(논현동 247-4호)</td>
                            </tr>
                            <tr>
                                <th>지하철</th>
                                <td>
                                    <ul>
                                        <li>
                                            <i class="subway"><span class="sr-only">지하철 7호선</span></i>
                                        </li>
                                        <li>
                                            <i class="subway"><span class="sr-only">지하철 7호선</span></i>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-1"><span class="sr-only">셔틀버스</span></i>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <ul>
                                        <li>
                                            <i class="icon-bus bus-2"><span class="sr-only">지선버스</span></i>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-3"><span class="sr-only">간선버스</span></i>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-4"><span class="sr-only">순환버스</span></i>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-5"><span class="sr-only">마을버스</span></i>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-6"><span class="sr-only">공항버스</span></i>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
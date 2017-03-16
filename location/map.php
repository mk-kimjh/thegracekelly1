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
                <div class="maps" id="maps" style="min-height:400px;">
                    <img src="/assets/images/location/map_img.jpg" class="img-responsive" alt="map">
                </div>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>주소</th>
                                <td>서울 강남구 언주로 126길 23<br>(논현동 247-4번지)</td>
                            </tr>
                            <tr>
                                <th>지하철</th>
                                <td>
                                    <ul>
                                        <li>
                                            <i class="subway"><span class="sr-only">지하철 7호선</span></i>
                                            7호선/분당선(강남구청역 2번출구 도보 7분거리 내외)
                                        </li>
                                        <li>
                                            <i class="subway sub-2"><span class="sr-only">지하철 7호선</span></i>
                                            7호선(학동역 1번출구 도보 10분거리 내외)
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-1"><span class="sr-only">셔틀버스</span></i>
                                            강남구청역 2번출구옆에 예식당일 셔틀버스운행
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>버 스</th>
                                <td>
                                    <ul>
                                        <li>
                                            <i class="icon-bus bus-2"><span class="sr-only">지선버스</span></i>
                                            <dl>
                                                <dt class="tx-1">지선</dt>
                                                <dd>
                                                    <ul class="route-list">
                                                        <li>2011</li>
                                                        <li>3414</li>
                                                        <li>6411</li>
                                                        <li>3219</li>
                                                        <li>4412</li>
                                                        <li>3412</li>
                                                        <li>3422</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <i class="icon-bus bus-3"><span class="sr-only">간선버스</span></i>
                                            <dl>
                                                <dt class="tx-2">간선</dt>
                                                <dd>
                                                    <ul class="route-list">
                                                        <li>141</li>
                                                        <li>401</li>
                                                        <li>640</li>
                                                        <li>351</li>
                                                        <li>472</li>
                                                        <li>147</li>
                                                        <li>301</li>
                                                        <li>241B</li>
                                                        <li>241A</li>
                                                        <li>240</li>
                                                    </ul>
                                                </dd>
                                                
                                            </dl>
                                        </li>
                                        <li class="line">
                                            <i class="icon-bus bus-4"><span class="sr-only">순환버스</span></i>
                                            <dl>
                                                <dt class="tx-3">순환</dt>
                                                <dd>
                                                    <ul class="route-list">
                                                        <li>41</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li class="line">
                                            <i class="icon-bus bus-5"><span class="sr-only">마을버스</span></i>
                                            <dl>
                                                <dt class="tx-4">마을</dt>
                                                <dd>
                                                    <ul class="route-list">
                                                        <li>강남08</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li class="line">
                                            <i class="icon-bus bus-6"><span class="sr-only">공항버스</span></i>
                                            <dl>
                                                <dt class="tx-5">공항</dt>
                                                <dd>
                                                    <ul class="route-list">
                                                        <li>6704</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>전 화</th>
                                <td><a href="tel:025473381">02 - 547 -3381</a></td>
                            </tr>
                            <tr>
                                <th>팩 스</th>
                                <td>02 - 547 - 3383</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhnrBd9nn0idjWvb210O0Up6etCTHQjYU&signed_in=true&callback=google_init"></script>
	<script>
	var geocoder;
	var map;
	function google_init() {
		geocoder = new google.maps.Geocoder();
		var myLatlng = new google.maps.LatLng('>', '');
		var myOptions = {
			zoom: 17,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}

		var map = new google.maps.Map(document.getElementById("maps"), myOptions);

		var image = "";

		var marker = new google.maps.Marker({
			position: myLatlng, 
			map: map,
			icon: image
		});

		
		var address = "서울특별시 강남구 논현동 247-4";
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map, 
					position: results[0].geometry.location,
					icon: image
				});
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	}

	window.onload = function(){
		google_init();
	}
	</script>
</body>
</html>
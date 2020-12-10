php 에러시 조치
=

1. 127.0.0.1/index.php 부분에서 나오지 않을시
----------

<img src="https://user-images.githubusercontent.com/71910560/101730140-d84c9800-3afc-11eb-9ba3-f2aadc4f799c.jpg" width="1000">

위부분처럼 나오는 경우가 있을 수 있습니다.(대부분은 아니지만요!)그럴경우 생각해봐야하는경우는 port입니다.

기본적으로 적용되는 포트는 80 입니다. 사용중인 포트인 경우 +1 되어 81입니다.

이런경우 에는 밑사진 처럼 포트를 127.0.0.1:81/index.php 으로 해주면 짜잔!...

<img src="https://user-images.githubusercontent.com/71910560/101731340-d683d400-3afe-11eb-9402-576a08274c64.jpg" width="1000">


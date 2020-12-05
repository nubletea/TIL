그리드 게임으로 이해하기
=
1.grid-column-start 이해
------------

<img src="https://user-images.githubusercontent.com/71910560/101242980-5fd28980-3740-11eb-883d-ed193073a93a.jpg" width="1000">

문제풀이

grid-column-start - 행에 시작 부분을 정합니다.(사각형 기준이 아닌 줄기준으로 숫자에요 처음줄이 그러니 1이겟조 ?)

그러므로 

답은 grid-column-start :3;(3번째 줄에서 시작해야 맞는거니까요!)


2.grid-column-start로 문제풀이
------------

<img src="https://user-images.githubusercontent.com/71910560/101255236-4fcba180-3762-11eb-90b3-ab6a58a952ae.jpg" width="1000">

문제풀이

저풀이 5번째줄 다음에 있으므로 

답은 grid-column-start: 5;

3.grid-column-end 이해
------------

<img src="https://user-images.githubusercontent.com/71910560/101256791-d54f5180-3762-11eb-99b4-62ee71c74d40.jpg" width="1000">

문제풀이

grid-column-end - 시작부분이 있으면 끝부분도 있어야 한다.끝부분을 정함(이것도 선을 기준으로 선 바로 뒤까지를 나타냄)

그러므로

답은 grid-column-end: 4;(1 > 4까지 해야 처음줄부터 4번째줄 뒤인 3개가 됨!)

4.grid-column-end 낮은 수
----------

<img src="https://user-images.githubusercontent.com/71910560/101258204-4e9b7400-3764-11eb-9c5e-765920b5179b.jpg" width="1000">

문제풀이

문제를 읽어보면 grid-column-end를 사용하되 start인 5보단 낮은 값으로 설정하라고 되어있다.

(이것으로 무조건 start가 무조건 end보다 작다는 아닌것을 알 수 있다)

그러므로

답은 grid-column-end: 2;(end를 start라고 생각해보고 풀이해봄)

5.grid-column-end 음수설정
----------

<img src="https://user-images.githubusercontent.com/71910560/101258289-e4cf9a00-3764-11eb-98be-2bec0190bd54.jpg" width="1000">

문제풀이

문제에서 grid-column-end를 음수로 설정하라고 되어있다. ( 1에 end가 -1면 뒤로 가게됨 )

그러므로 

답은 grid-column-end:-2;

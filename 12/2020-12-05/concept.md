웹개발 기초이해
=

개념이해

1.인터넷과 웹은 동일하지 않다.
----------------

인터넷 - 통신이 되는 환경 자체를 말함!

웹 - www(world wide web)[보통의 홈페이지를 여나는 행위 자체]

2.웹개발자가 뭐냐?
----------------

웹개발자 - www환경에서 문서를 주고 받는 환경에서 동작하는 프로그램을 만든다.

종류 : 프론트엔드, 백엔드

프론트엔드 : 웹브라우저 환경에서 보여지는 부분을 담당

백엔드 : 사용자에게는 보여지지 않지만 로그인,회원가입(user 정보) 등을 서버로 받아 관리 담당

2-1. 왜 프론트엔드와 백엔드로 나눴는가?

- 웹브라우저로 동작하는 환경같은 경우는 개발자모드로 소스가 노출되는데 이럴경우 개인정보 등도 노출될 수 있기에 나눠놓았다고 보임.

3.HTML, CSS, Javascript ?
----------------

HTML - 구조를 잡아주는 역활을 해줌 (글이나 종류의 집합 등)

Javascript - 동적인 부분을 담당 (움직이는 부분 및 이쁜 효과등을 만들기 위해 사용)

CSS - 스타일(속성)을 담당 (그림에 색칠해주는 부분이라고 생각)

4.DB(Dadabase)
----------------

DB - 데이터를 저장하는 공간(서버의 역할, 성능최적화, 보안 같은 것들이 잘되어있어 텍스트 파일보다 효율적)

DB종류 - Oracle, mysql, monggoDB 등(하나가 아닌 여러가지이다.)  

5.웹서버와 웹어플리케이션서버

웹서버 - www페이지를 전문적으로 전송해주는 웹통신(http 통신을 지원 http통신-개념[예)한국어로 말했을때 한국어로 답해])

요구 과정 - 웹브라우저(페이지 요청) => 웹서버가 받음 => 웹서버가 요청받은 페이지를 처리(만약 DB에 정보를 넣으라는 부분이 있을시) => DB에 입력해줌(잘들어 갔을시) => 

웹서버에 잘됬다고 신호를줌 => 사용자 요청이 처리됬다는 부분을 웹서버에서 만들어줌 =>웹브라우저로 소스파일 전송 => 웹브라우저에서 해석

위과정에서 주로 쓰이는 언어 : PHP(Java, python등 대체가능),SQL(DB종류), 기타등등 

Dom이라는 구조를 가지고 있음

DOM - 구조적으로 소스파일을 만들어줌

파싱 - 내가 사용하기 위해 가져와서 내가 사용 할 수 있게 바꿈 (예)난한국인이니 영어를 번역해서 한국어로 바꿔줌)
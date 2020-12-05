CSS grid 알아보기
=

CSS grid
-----------

CSS grid - 2차원(행과 열)의 레이아웃 시스템을 지원함(장점 Flexible Box는 비교적 1차원 레이아웃이기에 확실한 틀이 없지만 css grid는 구역을 나눠 확실히 틀식으로 사용)

//CSS grid는 Container(컨테이너)와 Item(아이템)이라는 두 가지 개념으로 구분 Container는 감싸는 부모적 관점 / Item은 부모안에 있는 자식요소 개념 

Grid Container Properties
------------

display - 그리드 컨테이너를 정의한다.(display: grid 로 보임!)

grid-template-rows - 명시적 행의 크기를 정의(행의 비율 1 : 2 : 1  이런식의 비율단위로 가로세로를 쪼갤때 사용)

grid-template-columns - 명시적 열의 크기를 정의(열의 비율 위와 같으나 이건 위아래)

grid-template-areas - 영역 이름을 참조해 템플릿 생성(위 row와 columns 두개를 한번에 바꾸기위해 영역단위)

grid-template - grid-template-xxxx의 단축 속성(areas 쓰면되는거 아닌가 ..? 안에 무엇을 넣어야하는지 모르므로 일단보류)

row-gap(grid-row-gap) - 행과 행 사이의 간격(Line)을 정의 (행과 행사이 [적용X시 붙어 잇음] 벌려주는것으로 보임 )

column-gap(grid-column-gap) - 열과 열 사이의 간격(Line)을 정의(위와 같으나 열)

gap(grid-gap) - xxx-gap 의 단축 속성 (위에 부분 단축형)

grid-auto-rows - 암시적인 행의 크기를 정의

grid-auto-columns - 암시적인 열의 크기를 정의

grid-auto-flow - 자동 배치 알고리즘 방식 정의

grid - grid-template-xxx과 grid-auto-xxx의 단축 속성

align-content - 그리드 콘텐츠(Grid Contents)를 수직(열 축) 정렬

justify-content - 그리드 콘텐츠를 수평(행 축) 정렬

place-content - align-content와 justify-content의 단축 속성 

align-items - 그리드 아이템(Items)들을 수직(열 축) 정렬

justify-items - 그리드 아이템들을 수평(행 축) 정렬

place-items - lign-items와 justify-items의 단축 속성

Grid Item Properties
----------------
grid-row-start - 그리드 아이템(Item)의 행 시작 위치 지정

grid-row-end - 그리드 아이템의 행 끝 위치 지정

grid-row - grid-row-xxx의 단축 속성(행 시작/끝 위치)

grid-column-start - 그리드 아이템의 열 시작 위치 지정

grid-column-end - 그리드 아이템의 열 끝 위치 지정

grid-area - 영역(Area) 이름을 설정하거나, grid-row와 grid-column의 단축 속성

align-self - 단일 그리드 아이템을 수직(열 축) 정렬

justify-self - 단일 그리드 아이템을 수평(행 축) 정렬

place-self - align-self와 justify-self의 단축 속성

order - 그리드 아이템의 배치 순서를 지정

z-index - 그리드 아이템의 쌓이는 순서를 지정(높을수록 위쪽에 !)

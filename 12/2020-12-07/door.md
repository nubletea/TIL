간단 3d 문짝 만들기
=

HTML
---------------
```
<div class="box"> //앞과 뒷면을 보여주기 위해 묶음을 주려고 만든 박스입니다.(크기조정도 이걸로 함!)

    <div class="front"></div> //앞부분 문이 열리는 부분!
    
    <div class="back"></div>  //뒷부분 문이 열리고 나서 보이는 문안의 내용부분!
    
</div>
```
CSS
----------------
```
.box{                             //박스의 크기를 지정!
    width:300px;
    height:600px;
    perspective: 500px; //이부분은 저희가 보는 관점! 이부분은 밑에서 설명해드리겠습니다.!
    background:#aaa;
    position: relative;
    left :1000px;
}
.front{
    width:100%;
    height:100%;
    background:blue;
    position: absolute;
    transform-style: preserve-3d;  //이부분은 front부분의 3d front가 (문처럼 왓다 갓다 할꺼기 때문에!)
    transform-origin: left;        //그리고 왼쪽에서 움직여야 하므로 (origin - 시작위치) 를 left로 지정 right 하면 오른쪽부터
    transform:rotateY(0deg);       //초기값
    transition:1s;                 //deray 1초
    z-index: 3;                    // 위에서 보여야하므로 (z-index - 띄우기) 수만큼 띄워줌
}
.front.active{                     //front가 active클래스가 되면
    width:70%;                     //너무커서 줄여줌(솔직히 안줄여도 상관없는부분)_
    transform:rotateY(-100deg);    //3d를 돌려주기 위해 이렇게 설정 +로하면 안쪽으로 들어감
}
.back{
    width:100%;
    height:100%;
    background:red;
    position: absolute;
}
```
script
----------
```
    BOX = document.querySelector('.box');
    FRONT = document.querySelector('.front');
    BOX.addEventListener('mouseover',function(){          //위에 지정한 box에 마우스가 올라가면 front에 active클래스 상속
        FRONT.classList.add('active');
    });
    BOX.addEventListener('mouseleave',function(){         //위에 지정한 box에 마우스가 떨어지면 front에 active클래스 제거
        FRONT.classList.remove('active');
    });
```

perspective - 원근감을 주는 방법 (높을수록 멀리서 본다고 생각) 아래와 

<img src="https://user-images.githubusercontent.com/71910560/101449959-0ef3a880-396d-11eb-8257-76e8446a6a69.png" width="500">



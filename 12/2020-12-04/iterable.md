iterable 객체
=
iterable 객체
-----------
iterable - 반복가능한 객체로 배열을 일반화한 객체다.(?...배열 일반화?배열만 말하는건가 ..? 내용을 더 보도록 합시다.)이 개념을 사용하면 for..of 반복문이 사용가능하다.

Symbol.iterator
-----------
Symbol.iterator - 객체에 대응하는 기본 이터레이터를 지정(솔직히 이해못하는중..전공자가 아니라 ..)for .. of 와 같이 사용한다고함.

여기서 말하는 for .. of는 적용하기에 적합해 보이는 배열이 아닌 객체를 만듬!

예)

let range = {

  from: 1,
  
  to: 5
  
};

///for..of가 동작할 수 있도록 하는 게 목표

// for(let num of range) ... num=1,2,3,4,5 [목표예시]

range[Symbol.iterator] = function() {

//range를 인터러블로 바꾸기 위해 Symbol.iterator(특정 내장 심볼)메서드를 사용

return {

  current: this.from,
  
  //range 안에 from값을 가져옴 밑 next의 (인자로 쓰기 위해서 만들어줌)
  
  last: this.to,
  
  //range 안에 last값을 가져옴 밑 next의 (인자로 쓰기 위해서 만들어줌)
  
  next() {
  
           //Symbol.iterator는 반드시 이터레이터(iterator, 메서드 next가 있는 객체) 를 반환해야 함 (사용 조건주는식으로 보임)
  
           //(next 메서드는반환 값은 {done: Boolean, value: any}와 같은 형태) done이 false시 value의 다음 값이 저장되고 true시 반복은 멈춤
           
    if(this.current <= this.last) {
    
        return { done: false, value: this.current++ };
        
      } else {
      
        return { done: true };
        
    }
    
  }
  
  };
  
};

//이러면 정상 작동함

for (let a of range) {  

// 참고 for .. of 는 시작하면 Symbol.iterator를 호출한다.(없을시 에러!)

    console.log(a); //정상적으로 1 , 2 , 3 , 4 , 5 가 각각 출력됨
    
}

## 풀이(이번내용은 조금 어렵게 느껴져서 윗부분 간단하게 풀이)
1. range라는 객체를 만들었음

//(참고로 from ~ to 까지 더해서 나오게 할예정) 방법을 for .. of 를써서 사용해야함!

2. range의 값을 인터러블 식으로 변환 
//(for .. of 는 Symbol.iterator 을 호출해야 하기때문에 Symbol.iterator로 해줌)

3. next()으로 반환 

//Symbol.iterator는 next식으로 반환됨 (current,last 부분은 next()에서 from과 to를 쓰기 위해 this로 새로 만들어줌)

4. next()안에 조건을 넣어서 반환 

// next()의 형태는 {done: Boolean, value: any}로 해야함 boolean부분 false시 value의 any를 반복호출 true시 반복 호출을 멈춤

5. for .. of 로 값을 반환 

//Symbol.iterator이 있으니 정상적으로 되는걸 볼 수 있음 

문자열은 이터러블이다
--------------
배열과 문자열은 가장 광범위하게 쓰이는 내장 이터러블이다.

for .. of 는 문자열의 각 글자를 순회함

예)

for (let str of "test") { 

console.log(str); // t,e,s,t 각각 출력됨(문자열은 이터러블 이므로 for .. of 가 됨을 알 수 있음)

}

이터레이터를 명시적으로 호출하기
-------------

let str = "Hello";

// for..of를 사용한 것과 동일한 작업을 함

// for (let a of str) console.log(a);

let iterator = str[Symbol.iterator](); 

//이터레이터로 바꿈

while (true) {

//true 시 반복문을 정지하는 while문을 작성(무한으로 하고 특정조건줘서 멈추려고 한것처럼보임)

  let result = iterator.next();
  
  if (result.done) break; // 글자가 있으면 false 없으면 true가 찍힘 (true는 생량가능)true시 break; 
  
  console.log(result.value); // 글자가 하나씩 출력됨 
  
}

이터러블과 유사 배열
------------------
(둘은 아주 다른 용어)

이터러블 - 위와 같이 메서드 Symbol.iterator가 구현된 객체이다.

유사배열 - 인덱스와 length 프로퍼티가 있어서 배열처럼 보이는 객체 

브라우저나 등의 호스트 환경에서 자바스크립트를 사용해 문제를 해결할 때 이터러블 객체나 유사 배열 객체 혹은 둘 다인 객체를 만날 수 있다.

이터러블 객체(for..of 를 사용할 수 있음)이면서 유사배열 객체(숫자 인덱스와 length 프로퍼티가 있음)인 문자열이 대표적인 예이다.

이터러블 객체라고 해서 유사 배열 객체는 아니다. 유사 배열 객체라고 해서 이터러블 객체인 것도 아니다.

위 예시의 range는 이터러블 객체이긴 하지만 인덱스도 없고 length 프로퍼티도 없으므로 유사 배열 객체가 아니다.

(length 부분이 없어서 ..이터러블이 아니다? length를 다시 지정하라는건가..?)

유사 배열 예)

let arrayLike = { // 인덱스와 length프로퍼티가 있음 => 유사 배열

  0: "Hello",
  
  1: "World",
  
  length: 2
  
};

// Symbol.iterator가 없으므로 에러 발생

for (let item of arrayLike) {}

참고!) 이터러블과 유사 배열은 push, pop 등 배열에서 쓰던 메서드 사용이 불가하다. 그러므로 이터러블과 유사 배열을 배열로써 push와 pop등을 사용하게 해봅시다.

Array.from
------------

범용 메서드 Array.from은 이터러블과 유사 배열을 받아 진짜 배열로 만들어줌

(어제 문제에서 나왔던 부분.. 이거 몰랐었는데 ...(결론 ..set과 map은 이터러블))

예)

let arrayLike = {

  0: "Hello",
  
  1: "World",
  
  length: 2
  
};

let arr = Array.from(arrayLike); // (배열로 바꿔주는 부분)

console.log(arr.pop()); // World (메서드가 제대로 동작함)



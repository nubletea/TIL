Array[예습 문제풀이]

1-1. border-left-width를 borderLeftWidth로 변경하기

예시 :
camelize("background-color") == 'backgroundColor';
camelize("list-style-image") == 'listStyleImage';
camelize("-webkit-transition") == 'WebkitTransition';

힌트 : split을 사용해 문자열을 배열로 바꾼 다음 join을 사용해 다시 합치면 됩니다.

<문제 풀이>
function camelize(s) {
    let arr = s.split('');                                               //값을 split으로 배열로 만들어줌.
    for(let x = 0;x<s.length;x++){                                       //그냥 반복부분을 만들기 위해 최대length까지 하고 나중에 break생각중
        let a = arr.slice(0,1);                                          //맨앞부분을 자름
        let b = arr.splice(arr.indexOf('-')+1,1).join('').toUpperCase(); //'-'부분에 하나 앞부분의 하나를 자르고 조인한다음 대문자로 바꿔준다.
        if(arr.indexOf('-')===-1){                                       //해서 만약 '-'가 없으면 -1 이 됨
            arr.splice(0,0,a);                                           //앞부분 잘려서 나오길래 앞부분 붙여줌
            break;
        }else{
            arr.splice(arr.indexOf('-'),1,b);                            //'-'가 -1이 될때까지 '-앞영문'부분을 자르고 대문자를 넣어줌
        }
    }
    console.log(arr.join(''));                                           //그리고 배열을 조인해줌
}
camelize("background-color");
camelize("list-style-image");
camelize("-webkit-transition");


<answer(답)>
function camelize(str) {
  return str
    .split('-')                                                                   //'-'기준으로 배열로 해주고
    .map(                                                                         //map은 (item, index, array) ...(사실있는지 몰랐었던..)
      (word, index) => index == 0 ? word : word[0].toUpperCase() + word.slice(1)  //위부분이므로 (item, index)부분의 매개를줘서 index가 0이면 item부분만 나오고 아니면 item에
    )                                                                             //앞부분 대문자+소문자 자른 뒷부분(word.slice(1,word.length)와 같음)
    .join('');                                                                    //묶어줌
 }
 
 //둘이 답은 같게 나오지만 map(모든 배열요소를 상대로 조건가능)을 쓰면 좀더 짧은 코드로 활용가능
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
1-2. 내림차순으로 정렬하기

let arr = [5, 2, 1, -10, 8];

// 요소를 내림차순으로 정렬해주는 코드를 여기에 작성해보세요.

alert( arr ); // 8, 5, 2, 1, -10

<문제풀이>
let arr = [5, 2, 1, -10, 8].sort().reverse();                                 //낮은거부터로 해놓고 반대로 뒤집음
alert( arr );

<answer(답)>
let arr = [5, 2, 1, -10, 8];

arr.sort((a, b) => b - a);                                                    //sort(function 함수넣기가능) 로 b-a시 양수면 b가 a보다 크다를 나타내고 음수면 b가 a보다 작다를 이용
                                                                              //하여 함 (거꾸로시 a-b)
alert( arr );

//함수를 이용해 좀더 쉽게 정렬하는법 알게됨
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 1-3. 배열 복사본을 정렬하기
 let arr = ["HTML", "JavaScript", "CSS"];

let sorted = copySorted(arr);

alert( sorted ); // CSS, HTML, JavaScript
alert( arr ); // HTML, JavaScript, CSS (no changes)
 
 <문제풀이>
 let arr = ["HTML", "JavaScript", "CSS"];
function copySorted(s) {
    let a = s.concat().sort();                                                           //복사본을 정렬해서 a변수에 담음
    return a;                                                                            //리턴 
}
let sorted = copySorted(arr);

alert( sorted );
alert( arr );
 
<answer(답)>
function copySorted(arr) {
  return arr.slice().sort();                                                            //잘라서 정렬
}

let arr = ["HTML", "JavaScript", "CSS"];

let sorted = copySorted(arr);

alert( sorted );
alert( arr );
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 1-4. 이름 매핑하기
 let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let users = [ john, pete, mary ];

let names = /* 여기에 코드를 작성하세요. */

alert( names ); // John, Pete, Mary

 <문제풀이>
 let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let users = [ john, pete, mary ];

let names = users.map((item) => {                                                 
    return item.name;             //item에 이름값을 리턴해줌
});

alert( names );

<answer(답)>
let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let users = [ john, pete, mary ];

let names = users.map(item => item.name);

alert( names );

//답이랑 거이 비슷해서 pass;
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 1-5. 객체 매핑하기
let john = { name: "John", surname: "Smith", id: 1 };
let pete = { name: "Pete", surname: "Hunt", id: 2 };
let mary = { name: "Mary", surname: "Key", id: 3 };

let users = [ john, pete, mary ];

let usersMapped = /* 여기에 코드를 작성하세요. */

/*
usersMapped = [
  { fullName: "John Smith", id: 1 },
  { fullName: "Pete Hunt", id: 2 },
  { fullName: "Mary Key", id: 3 }
]
*/

alert( usersMapped[0].id ) // 1
alert( usersMapped[0].fullName ) // John Smith

<문제풀이>
let john = { name: "John", surname: "Smith", id: 1 };
let pete = { name: "Pete", surname: "Hunt", id: 2 };
let mary = { name: "Mary", surname: "Key", id: 3 };

let users = [ john, pete, mary ];

let usersMapped = users.map((item)=>{                    //만든부분
    item.fullName = item.name+' '+item.surname;          //객체마다 fullname(key)를 만들어서 value를 넣어주는 식으로 만듬
 return item;
});
alert( usersMapped[0].id )
alert( usersMapped[0].fullName )

<answer(답)>
let usersMapped = users.map(user => ({                     
  fullName: `${user.name} ${user.surname}`,              //fullname,id만 만들어서 넣어놓음
  id: user.id                                            
}));

//필요없는 부분은 안받아도 될듯...?
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 1-6. 나이를 기준으로 객체 정렬하기
 let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let arr = [ pete, john, mary ];

sortByAge(arr);

// now: [john, mary, pete]
alert(arr[0].name); // John
alert(arr[1].name); // Mary
alert(arr[2].name); // Pete

<문제풀이>
function sortByAge(x) {
    x.sort((a, b)=>a.age - b.age);        //아까sort부분이용 a와 b age만 가져와서 비교
}
let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let arr = [ pete, john, mary ];
sortByAge(arr);

alert(arr[0].name);
alert(arr[1].name);
alert(arr[2].name);

<answer(답)>
function sortByAge(arr) {
  arr.sort((a, b) => a.age > b.age ? 1 : -1);      //??...솔직히 왜이렇게 햇는지는 잘모르겠습니다.. 풀이는 a가크면 1 b가크면-1
}

let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 28 };

let arr = [ pete, john, mary ];

sortByAge(arr);

// now sorted is: [john, mary, pete]
alert(arr[0].name); // John
alert(arr[1].name); // Mary
alert(arr[2].name); // Pete

//sort부분 이용
 -------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 1-7. 평균 나이 구하기
let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 29 };

let arr = [ john, pete, mary ];

alert( getAverageAge(arr) ); // (25 + 30 + 29) / 3 = 28

<문제풀이>
let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 29 };

let arr = [ john, pete, mary ];
function getAverageAge(x) {
   let y= x.reduce((sum, item, index) =>sum+item.age,0);    //reduce((이전계산값,item,index,array),초기값)이므로 계산값에 item.age부분을 더해줌 
   return y/arr.length;
}
alert( getAverageAge(arr) );

<answer(답)>
function getAverageAge(users) {
  return users.reduce((prev, user) => prev + user.age, 0) / users.length;
}

let john = { name: "John", age: 25 };
let pete = { name: "Pete", age: 30 };
let mary = { name: "Mary", age: 29 };

let arr = [ john, pete, mary ];

alert( getAverageAge(arr) ); // 28

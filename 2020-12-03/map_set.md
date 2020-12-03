맵&셋 문제풀이
=
1.문제
------------

<img src="https://user-images.githubusercontent.com/71910560/101067956-79a68c00-35db-11eb-8944-c232e3f19f96.jpg" width="500">

1-1. 문제풀이
------------

function unique(arr) {

    let set = new Set(arr);//일단 처음 받은 arr부분을 set에 넣어주고
    
    let a = '';            //넣어줄값 a변수를 만듬
    
    for(let value of set){ 
    
        a+=value;           //for .. of 로 value를 a에 넣어줌
        
    }
    
        return a;          //그리고 리턴 a
        
};

let values = ["Hare", "Krishna", "Hare", "Krishna",

  "Krishna", "Krishna", "Hare", "Hare", ":-O"
  
];

alert( unique(values) );  // HareKrishna:-O 로출력... (솔직히 부호 없이 나와서 아쉬움..)

1-2. 답
------------

function unique(arr) {

    return Array.from(new Set(arr));         // set을 배열로 만들어줌 !!!...(이거 편법아닌가 처음봄..).. 
  
    //유사 배열 객체(array-like object)나반복 가능한 객체(iterable object)를 얕게 복사해새로운Array 객체를생성...
}

2.문제
------------

<img src="https://user-images.githubusercontent.com/71910560/101067645-23394d80-35db-11eb-9cd2-6f6431a03da5.jpg" width="500">

2-1. 문제풀이
------------
let map = new Map();

map.set("name", "John");

let keys = [map.keys()]; //편법식으로 ... 배열로 묶어봄.. 약간 반...상태..

// Error: keys.push is not a function

keys.push("more");

1-2. 답
------------

let map = new Map();

map.set("name", "John");

let keys = Array.from(map.keys()); //역시 이방법대로....네...? 

keys.push("more");

alert(keys); // name, more


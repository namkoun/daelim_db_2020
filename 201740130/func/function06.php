<?php

if(function_exists("hello")) {
    echo "hello 함수가 존재하네요.<br>";
} else {
    echo "hello 함수가 뭐에요? 처음 들었어요.<br>";
    //조건 제어문의 코드블럭 안에서도 함수 선언 가능.

    function hello($name) {
    // 함수내에서 받는 변수, 매개변수
    //$name 변수 함수내에, 생성.
    echo "안녕하세요<br>";
    print "대림대학교 ";
    print  $name."입니다.<br>";
    return true;
    }
}

hello("야호");
<?php
// 함수를 호출할때 전달되는 값 : 인자값
// 실행 
hello("대림이");
hello("대숙이");

//선언된 함수에서 전달받는 값을 매개변수
//인자값 -> 매개변수 복사되어 전달합니다.

function hello($name) {
    // 함수내에 $name 변수 생성
    echo "안녕하세요." . "<br>";
    echo "날씨가 참 좋네요.". "<br>";
    echo "저는 대림대학교 $name 입니다.". "<br>";
    return true; // 출력은 반드시 하나여야만 한다
}
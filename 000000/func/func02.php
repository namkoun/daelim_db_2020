<?php
// 함수의 실행은
# 함수명();
// 함수를 호출할때 전달되는 값: 인자값
hello("대림이");

hello("대숙이");

// 선언된 함수에서 전달받는 값을 매개변수...
// 인자값 -> 매게변수 복사되어 전달합니다.
// $name = "대림이"; 할당복사
function hello($name)
// 함수내에 $name 변수가 생성됩니다.
{
    echo "안녕하세요." . "<br>";
    print "날씨가 참 좋네요." . "<br>";
    echo "저는 대림대학교 <b>$name</b> 입니다.<br>";

    return true;  
}

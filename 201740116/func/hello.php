<?php

//echo __FILE__.":".__LINE__."<br>";


/*
$funcs = get_defined_functions();
echo "<pre>";
print_r($funcs);
echo"</pre>";*/



if (function_exists("hello")) {

    echo "hello 함수가 있군요";
} else {
    echo "hello가 뭐에요???";

function hello($name= "아무개")  //초기값
{
    $text = "";
    // 복합연산자
    // 문자열을 결합합니다 . (.)
    $text .= "안녕하세요." . "<br>";
    $text .= "날씨가 참 좋네요.". "<br>";
    $text .= "저는 대림대학교 <b>$name</b> 아무개 입니다. <br>";

    //함수의 내부값 반환
    return $text;
}
}
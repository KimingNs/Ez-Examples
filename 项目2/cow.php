<?php
//有一母牛，到4岁可生育，每年一头，所生均是一样的母牛，到15岁绝育，不再能生，20岁死亡，问n年后有多少头牛。
function niu($y)
{
    static $num = 1;                    //定义静态变量;初始化牛的数量为0
    for ($i = 1; $i <= $y; $i++) {
        if ($i >= 4 && $i < 15) {         //每年递增来算，4岁开始+1，15岁不能生育
            $num++;
        } else if ($i == 20) {
            return $num;                           //20岁死亡
        }
    }
    return $num;
}

echo niu(8);//11
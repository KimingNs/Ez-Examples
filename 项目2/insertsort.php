<?php

// 插入排序
//插入排序
function insertSort($arr)
{
    //获取数组单元个数
    $count = count($arr);
    //外层循环用于从未排序区域中取出待排序元素
    for ($i = 1; $i < $count; $i++) {
        //获取当前需要插入已排序区域的元素值
        $temp = $arr[$i];
        //内层循环用于从已排序区域寻找待排序元素的插入位置
        for ($j = $i - 1; $j >= 0; $j--) {
            //如果$arr[$i]比已排序区域的$arr[$j]小，就后移$arr[$j]
            if ($temp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            } else {
                //如果$arr[$i]不小于$arr[$j]，则对已排序区无需再排序
                break;
            }
        }
    }
    return $arr;
}

$arr = array(6, 19, 26, 62, 88, 99, 18, 16, 1, 20, 4, 10);
echo '<pre>';
print_r(insertSort($arr));
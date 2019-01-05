<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


//检测数据长度
function checkLen($str,$len=5){
	if (mb_strlen($str) > $len) {
		$str = mb_substr($str, 0,$len);
		$str .= "..";
	}
	return $str;
}

//返回用户session
function userSession($param) {
	return $_SESSION["User"][$param];
}
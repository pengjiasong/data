1.PHP SPL（PHP 标准库）
https://www.cnblogs.com/yafang/p/5872187.html

2.接口设计
https://segmentfault.com/a/1190000013703264?utm_source=tag-newest

3.//去掉标签属性，只保留a标签和img标签的 部分以A开头的标签并未排除
	private function deletetagsattribute($text){
		$text = preg_replace('/<(?!img|a|input)([a-z]+)[^<>]*>/sim', '<$1>', $text);
		return $text;
	}
4.二维数组修改键名	
$ar = array(
  array(1 => 'a', 2 => 50, 3 => 60, 4 => 'long', 5 => 'zzz', 6 => 'kkk', 7 => 'ooo'),
  array(1 => 'b', 2 => 60, 3 => 70, 4 => 'king', 5 => 'lll', 6 => 'ttt', 7 => 'ppp'),
  array(1 => 'c', 2 => 70, 3 => 80, 4 => 'quit', 5 => 'qqq', 6 => 'xxx', 7 => 'ccc'),
);
$kname = array('StaffId', 'Wage', 'Name', 'Work', 'Type');
function foo(&$v, $k, $kname) {
  $v = array_combine($kname, array_slice($v, 1, -1));
}
array_walk($ar, 'foo', $kname);

5.strpos升级版查找字符串中是否包含给定的字符
$tempfield = "date_histogram(field='insert_time','interval'='1d','alias'='yourAlias')";
echo strpbrk($tempfield,'(),\'\"=, ');  //返回的不是位置，而是类似strstr第一次出现包含的位置

thinkphp5:
1.数据库操作方法小结:https://blog.csdn.net/lovehmm/article/details/53892857

46 个非常有用的 PHP 代码片段:https://www.oschina.net/question/2012764_246023

6. PHP7内核剖析 https://blog.csdn.net/fanghua_vip/article/details/79535540

7.PHP性能优化利器：生成器 yield理解  https://www.cnblogs.com/zuochuang/p/8176868.html

8.php结合redis实现高并发下的抢购、秒杀功能:http://www.cnblogs.com/zuochuang/p/7262361.html

9.上传进度支持:http://www.laruence.com/2011/10/10/2217.html

10.关于PHP写APP接口的安全问题探讨:http://www.php.cn/php-weizijiaocheng-331570.html

11.PHP开发api接口安全验证 https://blog.csdn.net/li741350149/article/details/62887524

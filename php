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
print_r($ar);
exit;

thinkphp5:
1.数据库操作方法小结:https://blog.csdn.net/lovehmm/article/details/53892857

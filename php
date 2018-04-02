1.PHP SPL（PHP 标准库）
https://www.cnblogs.com/yafang/p/5872187.html

2.接口设计
https://segmentfault.com/a/1190000013703264?utm_source=tag-newest

3.//去掉标签属性，只保留a标签和img标签的 部分以A开头的标签并未排除
	private function deletetagsattribute($text){
		$text = preg_replace('/<(?!img|a|input)([a-z]+)[^<>]*>/sim', '<$1>', $text);
		return $text;
	}

thinkphp5:
1.数据库操作方法小结:https://blog.csdn.net/lovehmm/article/details/53892857

<?php
/**
 *if the word's length is odd,return the middle charater;
 *if the word's length is even,return the middle 2 charaters
 *@param string $word 
 *@return string
 */
function getMiddle($word)
{
	if (is_string($word))
	{
		$length = strlen($word);
		$begin = round($length / 2 - 1);
		$returnNum = $length % 2 ? 1 : 2;
		return substr($word, $begin, $returnNum);
	}
}

$words = array('test', 'testing', 'middle', 'A');
foreach($words as $word)
{
	echo getMiddle($word) . "\n";
}

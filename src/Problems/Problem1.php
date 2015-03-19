<?php namespace KevBaldwyn\ProjectEuler\Problems;

use KevBaldwyn\ProjectEuler\AbstractProblem;

class Problem1 extends AbstractProblem {

	public function name()
	{
		return '1';
	}

	public function title()
	{
		return 'Multiples of 3 and 5';
	}

	public function describe()
	{
		return 'If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. 
  Find the sum of all the multiples of 3 or 5 below 1000.';
	}

	public function calculateAnswer()
	{
		$target = 1000;
		$res = [];
		for($i = $target; $i --; $i >= $target) {
			if($i % 3 == 0 || $i % 5 == 0) {
				$res[] = $i;
			}
		}
		return array_sum($res);
	}

}
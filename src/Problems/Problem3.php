<?php namespace KevBaldwyn\ProjectEuler\Problems;

use KevBaldwyn\ProjectEuler\AbstractProblem;

class Problem3 extends AbstractProblem {

	public function name()
	{
		return '3';
	}

	public function title()
	{
		return 'Largest prime factor';
	}

	public function describe()
	{
		return 'The prime factors of 13195 are 5, 7, 13 and 29.
  What is the largest prime factor of the number 600851475143 ?';
	}

	public function calculateAnswer()
	{
		$num = 600851475143;		
		
		$factors = $this->primeFactors($num);
		return max($factors);

	}

	private function primeFactors($num)
	{
		for ($i = 2; $i <= sqrt($num); $i++) {
			if ($num % $i == 0) {
				return array_merge($this->primefactors($num/$i), array($i));
			}
		}
		return array($num);
	}

}
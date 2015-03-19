<?php namespace KevBaldwyn\ProjectEuler;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication {

	public function registerProblems()
	{
		$dh = new \DirectoryIterator(__DIR__ . '/Problems');

		// get dir and find problems and add them
		foreach($dh as $file) {
			if(!$file->isDot()) {
				$classname = __NAMESPACE__ . '\\Problems\\' . str_replace('.php', '', $file->getFilename());
				$this->add(new $classname);
			}
		}
	}

}
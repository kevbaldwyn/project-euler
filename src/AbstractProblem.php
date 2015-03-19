<?php namespace KevBaldwyn\ProjectEuler;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractProblem extends Command {

	abstract public function name();

	abstract public function title();

	abstract public function describe();

	protected function configure()
    {
        $this->setName('problem:'.$this->name())
             ->setDescription($this->title());
    }

    abstract public function calculateAnswer();

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $start = microtime(true);
        $answer = $this->calculateAnswer();
        $end = microtime(true);
        $output->writeln('<comment>> ' . $this->title() . '</comment>');
        $output->writeln(' <comment> ' . $this->describe() . '</comment>');
        $output->writeln('<info>= ' . $answer . ' in (' . (($end - $start) * 1000) . ' miliseconds)</info>');
    }

}
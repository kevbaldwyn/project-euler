<?php namespace KevBaldwyn\ProjectEuler;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractProblem extends Command {

	private $answer;

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
        $answer = $this->calculateAnswer();
        $output->writeln('<comment>> ' . $this->title() . '</comment>');
        $output->writeln(' <comment> ' . $this->describe() . '</comment>');
        $output->writeln('<info>= ' . $answer . '</info>');
    }

}
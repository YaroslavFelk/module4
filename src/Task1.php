<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Task1 extends Command
{
    
    protected function configure()
    {
        $this
            ->setName('task1')
            ->addArgument('string', InputArgument::REQUIRED, 'Write any.');
    }
    
    
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет, ' . $input->getArgument('string'));
    
        return 0;
    }
}
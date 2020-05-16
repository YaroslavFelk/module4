<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Task2 extends Command
{
    
    protected function configure()
    {
        $this
            ->setName('task2')
            ->addArgument('string', InputArgument::REQUIRED, 'Write any.')
            ->addOption(
                'iterations',
                null,
                InputOption::VALUE_REQUIRED,
                'How many times should the message be printed?',
                1
            );
    }
    
    
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        for ($i = 0; $i < $input->getOption('iterations'); $i++) {
            $output->writeln('Привет, ' . $input->getArgument('string'));
        }
    
        return 0;
    }
}
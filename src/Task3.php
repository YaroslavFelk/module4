<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Helper\QuestionHelper;

class Task3 extends Command
{
    protected function configure()
    {
        $this
            ->setName('task3');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        
        $nameQuestion = new Question('ВВедите ваше имя: ', 'Беззымяный');
    
        $answerName = $helper->ask($input, $output, $nameQuestion);
    
        $ageQuestion = new Question('Введите ваш возраст: ', '0');
        $ageQuestion->setValidator(function ($answer) {
            if (!is_numeric($answer)) {
                throw new \RuntimeException(
                    'Введите число'
                );
            }

            return $answer;
        });
    
        $answerAge = $helper->ask($input, $output, $ageQuestion);
    
        $helper = $this->getHelper('question');
        $genderQuestion = new ChoiceQuestion(
            'Выберите ваш пол (по умолчанию м): ',
            array('м', 'ж'),
            0
        );
        $genderQuestion->setErrorMessage('Непраильный ввод');
    
        $answerGender = $helper->ask($input, $output, $genderQuestion);
        
        $output->writeln('Ваше имя: ' . $answerName  . '. Ваш возраст: ' . $answerAge  . '. Ваш пол: ' . $answerGender);
    
        return 0;
    }
}
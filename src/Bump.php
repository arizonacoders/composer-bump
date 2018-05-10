<?php namespace ArizonaCoders\Infrastructure\Composer\Plugin;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Bump extends BaseCommand
{

    protected function configure()
    {
        $this->setName('bump');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Executing');
    }
}

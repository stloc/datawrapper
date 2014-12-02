<?php
/**
 * Created by PhpStorm Laurent GUIGO
 * Date: 02/12/14
 * Time: 09:42
 */

namespace command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ChartPublishCommand extends Command {
    protected function configure()
    {
        $this
            ->setName('chart:publish')
            ->setDescription('Publish a chart')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Chart id'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $chartId = $input->getArgument('id');
        $chart = \ChartQuery::create()->findOneById($chartId);

        if (!is_null($chart)) {
            $output->writeln('Publishing chart : '.$chartId);
            publish_chart($chart->getUser(), $chart, true);
        }
        else {
            $output->writeln('<error>Chart not found</error>');
        }
    }
} 
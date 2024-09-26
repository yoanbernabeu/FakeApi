<?php

namespace App\Command;

use App\Repository\LogRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:check-logs',
    description: 'List all logs',
)]
class CheckLogsCommand extends Command
{
    public function __construct(
        private readonly LogRepository $logRepository,
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        // last 25 logs
        $logs = $this->logRepository->findBy([], ['id' => 'DESC'], 25);

        $io->table(
            ['date', 'id', 'ip', 'user_agent'],
            array_map(fn($log) => [
                $log->getDate()->format('Y-m-d H:i:s'),
                $log->getId(),
                $log->getIp(),
                $log->getUserAgent(),
            ], $logs)
        );

        return Command::SUCCESS;
    }
}

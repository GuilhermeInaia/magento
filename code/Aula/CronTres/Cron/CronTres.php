<?php
namespace Aula\CronTres\Cron;

use Psr\Log\LoggerInterface;

class CronTres {
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

   /**
    * Write to system.log
    *
    * @return void
    */
    public function execute() {
        $this->logger->info('Cron Tres Works');
    }
}
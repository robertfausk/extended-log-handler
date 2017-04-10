<?php

namespace RobertFausK\ExtendedLog;

use Monolog\Handler\StreamHandler;

class ExtendedLogHandler extends StreamHandler
{
    public function __construct($stream)
    {
        parent::__construct($stream);

        $this->formatter = new ExtendedLogFormatter();
    }

    public function handle(array $record)
    {
    }

    public function handleBatch(array $records)
    {
    }
}

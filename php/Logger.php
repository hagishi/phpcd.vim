<?php

namespace PHPCD;

use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    private $log_file;

    public function __construct($log_path)
    {
        // @todo handle bugs with opening log file
        $this->log_file = fopen($log_path, 'a');
    }

    public function __destruct()
    {
        fclose($this->log_file);
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function log($level, $message, array $context = [])
    {
        if (is_string($level)) {
            $message = strtoupper($level) . ': ' . $message;
        }

        if ($context !== []) {
            $message .= PHP_EOL . json_encode($context, JSON_PRETTY_PRINT);
        }
        $message .= PHP_EOL;
        fwrite($this->log_file, $message);
    }
}

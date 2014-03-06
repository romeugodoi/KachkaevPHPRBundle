<?php
namespace Kachkaev\RBundle;
class RError
{
    private $lineNumber;
    private $commandNumber;
    private $command;
    private $errorMessage;

    public function __construct($lineNumber, $commandNumber, $command, $errorMessage)
    {
        $this->lineNumber = $lineNumber;
        $this->commandNumber = $commandNumber;
        $this->command = $command;
        $this->errorMessage = $errorMessage;
    }

    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    public function getCommandNumber()
    {
        return $this->commandNumber;
    }

    public function getCommand()
    {
        return $this->command;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
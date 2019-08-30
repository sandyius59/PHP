<?php
require_once 'Terminal.php';
class TerminalImp implements Terminal
{
    public function run($cmd)
    {
        $op = shell_exex($cmd);
        echo $op;
    }
}

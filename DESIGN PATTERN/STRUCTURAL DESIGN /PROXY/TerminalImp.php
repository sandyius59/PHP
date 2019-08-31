<?php
require_once '/home/admin1/sandy/PHP/DESIGN PATTERN/STRUCTURAL DESIGN /PROXY/Terminal.php';
class TerminalImp implements Terminal
{
    public function run($cmd)
    {
        $op = shell_exex($cmd);
        echo $op;
    }
}

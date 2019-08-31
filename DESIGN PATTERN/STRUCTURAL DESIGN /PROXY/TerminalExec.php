<?php
require_once '/home/admin1/sandy/PHP/DESIGN PATTERN/STRUCTURAL DESIGN /PROXY/Terminal.php';
require_once '/home/admin1/sandy/PHP/DESIGN PATTERN/STRUCTURAL DESIGN /PROXY/TerminalImp.php';
require_once '/home/admin1/sandy/PHP/DESIGN PATTERN/STRUCTURAL DESIGN /PROXY/TerminalExec.php';
class TerminalExec implements Terminal
{
    public $isAdmin = false;
    public function __construct($user, $pwd)
    {
        global $isAdmin;
        try
        {
            if ("sandy" == $user && "sandeep123" == $pwd) {
                $isAdmin = true;
            } else {
                throw new Exception("invalid credential \n");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function run($cmd)
    {
        global $isAdmin;
        $terminalRun = new TerminalImp;
        if ($isAdmin) {
            $terminalRun->run($cmd);
        }
    }
}

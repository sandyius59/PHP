<?php
require_once 'Terminal.php';
require_once 'TerminalImp.php';
require_once 'TerminalExec.php';
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

<?php
require_once 'TerminalExec.php';
//require '';

class pattern
{
    public function main()
    {
        try
        {
            $tExec = new TerminalExec("sandy", "sandeep123");
            $tExec = run("is-1tr");
            $tExec = run("rm abc.txt");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
$fds = new pattern();
$fds->main();

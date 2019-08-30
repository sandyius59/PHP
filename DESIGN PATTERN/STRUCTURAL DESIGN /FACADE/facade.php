<?php
/***********************************************************************************
 * @Execution : default node : cmd> facade.php
 *
 *
 * @Purpose :Facade Pattern defines a higher-level interface that makes the subsystem
 * easier to use
 *
 * @advantage : A facade can make a software library easier to use, understand and test,
 * since the facade has convenient methods for common tasks. - make the library more readable
 *
 *
 * @overview : Facade desing pattern
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 30-aug-2019
 *
 ***********************************************************************************/
interface ShareInterface
{
    public function setMessage($message);
    public function share();
}

class Twitter implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo sprintf('Sharing "%s" on Twitter.', $this->message) . PHP_EOL;
        //PHP_EOL is a constant holding the line break character
        //The sprintf() function writes a formatted string to a variable.
    }
}

class Facebook implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo sprintf('Sharing "%s" on Facebook.', $this->message) . PHP_EOL;
    }
}

class Linkedin implements ShareInterface
{
    private $message;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function share()
    {
        echo sprintf('Sharing "%s" on Linkedin.', $this->message) . PHP_EOL;
    }
}

$twitter = new Twitter();
$twitter->setMessage('Learning Facade pattern.');
$twitter->share();

$facebook = new Facebook();
$facebook->setMessage('Learning Facade pattern.');
$facebook->share();

$linkedin = new Linkedin();
$linkedin->setMessage('Learning Facade pattern.');
$linkedin->share();

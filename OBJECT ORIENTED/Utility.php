 <?php
 class Inventery
 {
    public function __construct()
    {
        $this->data = null;
        $fileName = null;
    }
    function jsonread()
    {
        $this->data=json_decode(file_get_contents('/home/admin1/sandy/PHP/OOP/Inventer.json'));
    }
    function value()
    {
        $sum=0;
        foreach($this->data as $ele)
        {
            echo $ele->Name."=".(int)$ele->price*(int)$ele->weight."\n";
            $sum=$sum+(int)$ele->price*(int)$ele->weight;
            echo $sum;
        }
    }
    function display()
    {
        var_dump($this->data);
    }
}
 
 
 ?>
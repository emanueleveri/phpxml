<?php
    //This class helps you to use and load xml files 
    class loadxml
    {
        private $xml;
        
        public function __construct($address)
        {
            $this->xml=simplexml_load_file($address) ;
        }
        
        function printxml($title,$content)
        {
            echo "<h3>".$this->xml->$title."</h3> <br>";
            echo "<h3>".$this->xml->$content."</h3> <br>";
        }
    }
?>

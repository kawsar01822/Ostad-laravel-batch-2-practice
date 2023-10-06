<?php

    class RGB
    {
        private $color;
        public $red;
        public $green;
        public $blue;

        function __construct($colorCode = '')
        {
            $this->color = ltrim($colorCode,"#");
            $this->parseColor();
        }

        function getColor(){
            return $this->color;
        }

        public function getRGBColor(){
            return array($this->red,$this->green,$this->blue);
        }

        public function readRGBColor(){
            echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
        }

        public function setColor($colorCode){
            $this->color = ltrim($colorCode,"#");
        }

        private function parseColor(){
            if($this->color){
                list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
            }else{
                list($this->red,$this->green,$this->blue) = array(0,0,0);
            }
        }

        function getRed(){
            return $this->red;
        }

        function getGreen(){
            return $this->green;
        }

        function getBlue(){
            return $this->blue;
        }
    }

    $mycolor = new RGB("#FF0000");
    $mycolor->readRGBColor();
?>
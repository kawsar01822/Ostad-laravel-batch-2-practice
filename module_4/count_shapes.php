<?php

    class Shape{

    }

    class Shapes{
        private $shapes;

        function __construct()
        {
            $this->shapes = array();
        }

        function addShape(Shape $shape){
            array_push($this->shapes,$shape);
        }

        function totalShapes(){
            return count($this->shapes);
        }
    }


    class Rectangle extends Shape{

    }


    class Triangle extends Shape{

    }

    class Student{

    }

    $shapeCollection = new Shapes();
    $shapeCollection->addShape(new Rectangle);
    $shapeCollection->addShape(new Triangle);
    // $shapeCollection->addShape(new Student); // Will give error as it doesn't inherit from Shape

    echo $shapeCollection->totalShapes();    // 2
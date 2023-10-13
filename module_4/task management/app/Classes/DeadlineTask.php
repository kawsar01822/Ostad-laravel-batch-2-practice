<?php

namespace app\Classes;

use app\Classes\Task;
use app\Traits\HasAssigneeTrait;
use App\Interfaces\HasDueDateInterface;
use App\Interfaces\HasStartDateInterface;

class DeadlineTask extends Task implements HasStartDateInterface, HasDueDateInterface
{
    use HasAssigneeTrait;
    protected $startDate;
    protected $dueDate;

    public function __construct($title, $description, $startDate, $dueDate){
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    // Getters

    public function getStartDate(){
        return $this->startDate;
    }

    public function getDueDate(){
        return $this->dueDate;
    }

    public function getPriority(){
        return "Low";
    }

    public function markAsCompleted(){
        $this->completed = true;
    }


}
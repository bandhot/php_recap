<?php

class Task
{
    protected $description;
    protected $completed;

    public function __construct($description)
    {
        $this->description=$description;
    }
    public function isComplete()
    {
        return $this->completed;
    }
    public function Complete()
    {               
        $this->completed=true;
    }
    public function description()
    {
        return $this->description;
    }

    
}
$task=[ new Task('Go to the store'),
          new Task('Go to the Markert'),
          new Task('Go to the flos')
];
$task[0]->Complete();
<?php

namespace App;

class Profile
{
    private $name;
    private $story;

    public function __construct($data = null)
    {
        if (isset($data['Name'])) {
            $this->name = $data['Name'];
        }
        
        if (isset($data['Story'])) {
            $this->story = $data['Story'];
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStory()
    {
        return $this->story;
    }
}

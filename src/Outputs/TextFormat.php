<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;

class TextFormat implements ProfileFormatter
{
    private $response;

    public function setData($profile)
    {
        $output = "=============================\n";
        $output .= "Name: " . $profile->getName() . "\n\n";
        $output .= "Her Story:\n";
        $output .= str_repeat("-", 30) . "\n"; 
        $output .= $profile->getStory() . "\n";
        $output .= str_repeat("-", 30) . "\n"; 
        $output .= "=============================\n";

        $this->response = $output;
    }

    public function render()
    {
        header('Content-Type: text/plain');
        return $this->response;
    }
}

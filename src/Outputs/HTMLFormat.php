<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;

class HTMLFormat implements ProfileFormatter
{
    private $response;

    public function setData($profile)
    {
        $output = <<<HTML
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile of {$profile->getName()}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-header {
            background-color: #343a40;
            color: white;
            padding: 20px;
        }
        .card {
            margin-top: 20px;
        }
        .img-profile {
            width: 400px
            height: 400px;
            object-fit: cover; 
            border-radius: 0; 
            margin-top: 30px; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <header class="profile-header text-center">
            <h1>The Founder</h1>
        </header>
        <div class="text-center">
            <img src="https://www.auf.edu.ph/home/images/articles/bya.jpg" alt="Founder Image" class="img-fluid img-profile mb-4">
            <h5>Dr. Barbara Yap Angeles</h5> 
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Her Story:</h5>
                <p class="card-text">{$profile->getStory()}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Contact</a>
            <a href="#" class="btn btn-secondary">More About</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
HTML;

        $this->response = $output;
    }

    public function render()
    {
        header('Content-Type: text/html');
        return $this->response;
    }
}

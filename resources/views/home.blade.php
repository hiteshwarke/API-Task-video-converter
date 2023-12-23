<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Assignment</title>       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            
            <h1 class="text-center">
                <a href="{{ route('que-1') }}">Click Here</a>
            </h1>
            <p>
                <strong>Task 1: Laravel Setup</strong>
                
                <ul>
                    <li>
                        <span> Create a new Laravel project.</span>
                    </li>
                    <li>
                        <span> Implement a simple route that returns a "Hello, Laravel!" message.</span>
                    </li>
                </ul>
                
            </p>
        </div>
        <div class="jumbotron">
            <h1 class="text-center">
                <a href="">Click Here</a>
            </h1>
            <p>
                <strong>Task 2: RESTful API Development</strong>
                
                <ul>
                    <li>
                        <span> Implement a minimal RESTful API for managing a collection of items (e.g., books, movies).</span>
                    </li>
                    <li>
                        <span> Include endpoints for retrieving all items and adding a new item.</span>
                    </li>
                    <li>
                        <span> Use Laravel Eloquent for database interactions.</span>
                    </li>
                </ul>
                
            </p>
        </div>
        <div class="jumbotron">
            <h1 class="text-center">
                <a href="">Click Here</a>
            </h1>
            <p>
                <strong>Task 3: Video Generation (Optional)</strong>
                
                <ul>
                    <li>
                        <span> If time allows, choose either FFmpeg or PHP-FFmpeg.</span>
                    </li>
                    <li>
                        <span> Implement a basic command or API endpoint to process a sample video file.</span>
                    </li>
                </ul>
                
            </p>
        </div>
        
    </body>
</html>

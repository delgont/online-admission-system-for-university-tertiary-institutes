<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        
       <div class="container">
        <div class="row">
            <form action="" method="POST" class="col-lg-8 offset-2 p-5 my-5 border" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Education</h1>
                    </div>
                </div>

                @for ($i = 0; $i < 4; $i++)
                    
                <div class="row my-3">

                    <div class="col-lg-4">
                        <input type="text" name="qualification" placeholder="Qualification" class="form-control" />
                    </div>

                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="school" placeholder="School" />
                    </div>

                    <div class="col-lg-2">
                        <input type="date" class="form-control" name="start_date" placeholder="Start Date" />
                    </div>

                    <div class="col-lg-2">
                        <input type="date" class="form-control" name="end_date" placeholder="Start Date" />
                    </div>
                  
                </div>
                @endfor

            </form>
        </div>
       </div>
    </body>
</html>

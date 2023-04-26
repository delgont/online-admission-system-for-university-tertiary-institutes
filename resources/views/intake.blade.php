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
                        <h1>Intake & Course</h1>
                    </div>

                    <div class="col-lg-4">
                        <label for="intake">Intake</label>
                        <select name="intake" id="inatek" class="form-control">
                            <option value="">May 2023</option>
                            <option value="">May 2025</option>
                            <option value="">Jan 2040</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label for="course">Course</label>
                        <select name="course" id="" class="form-control">
                            <option value="">Certificate Nursing</option>
                            <option value="">Certificate Midwifery</option>
                            <option value="">Diploma In Nursing</option>
                        </select>

                        <div class="form-chec py-1">
                            <input id="course1" class="form-check-input" type="checkbox" name="" value="true">
                            <label for="course1" class="form-check-label">Certificate Nursing</label><br />
                            <input id="course2" class="form-check-input" type="checkbox" name="" value="true">
                            <label for="course2" class="form-check-label">Certificate Midwifery</label>
                        </div>
                    </div>
                  
                </div>
            </form>
        </div>
       </div>
    </body>
</html>

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
    
                    <div class="col-lg-8">
                        <h1>Personal Details</h1>
                    </div>
                    <div class="col-lg-4 offset-lg-8 mb-5">
                        <img src="" alt="" />
                        <input type="file">
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Surname</label>
                        <input type="text" name="surname" class="form-control" placeholder="Enter Surname" value="{{ old('surname') }}" />
                        <small class="text-danger">
                            {{ $errors->first('surname') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Given Names</label>
                        <input type="text" name="given_name" class="form-control" placeholder="Given Name" value="{{ old('given_name') }}" />
                        <small class="text-danger">
                            {{ $errors->first('given_name') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Other Names</label>
                        <input type="text" name="other_name" placeholder="Other Names" value="{{ old('other_name') }}" class="form-control" />
                        <small class="text-danger">
                            {{ $errors->first('other_name') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Primary Email Address" />
                        <small class="text-danger">
                            {{ $errors->first('email') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" />
                        <small class="text-danger">
                            {{ $errors->first('phone_number') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Nationality</label>
                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="{{ old('nationality') }}" />
                        <small class="text-danger">
                            {{ $errors->first('nationality') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Religion</label>
                        <input type="text" class="form-control" name="religion" placeholder="Religion" value="{{ old('religion') }}" />
                        <small class="text-danger">
                            {{ $errors->first('religion') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4 p-2">
                        <label for="">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" placeholder="Date Of Birth" value="{{ old('date_of_birth') }}" />
                        <small class="text-danger">
                            {{ $errors->first('date_of_birth') }}
                        </small>
                    </div>
    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="my-select">Marital Status</label>
                            <select id="my-select" class="form-control" name="marital_status">
                                <option>Married</option>
                                <option>Single</option>
                                <option>Single</option>
                            </select>
                        </div>
                    </div>
    
                </div>
            </form>
        </div>
       </div>
    </body>
</html>

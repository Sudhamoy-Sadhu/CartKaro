@extends('Dashboard.main')
@push('title')
    <title>Dashboard - Add Members</title> {{-- Enter Your Page Title Here--}}
@endpush
@section('content')
    {{--Enter Your Code Here--}}
    {{-- Route of your page is /addmembers --}}
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
        <form action="" method="post" >
          <div class="container">
            <h1 class="text-center">Profile</h1>
            <div class="form-group">
                <label for="Name"></label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="heliId"/>
               {{-- <small id="helpId" class="text-muted">Help text</small>--}}
            </div>
          </div>
          <div class="form-group">
                <label for="Email"></label>
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="heliId"/>
               {{-- <small id="helpId" class="text-muted">Help text</small>--}}
            </div>
          </div>
          <div class="form-group">
                <label for="Contact No"></label>
                <input type="contact no" name="contact no" id="" class="form-control" placeholder="" aria-describedby="heliId"/>
               {{-- <small id="helpId" class="text-muted">Help text</small>--}}
            </div>
          </div>
        </form>
        <form action="" method="post">   
          <div class="container">
            <h1 class="text-center">Position</h1>
            <div class="form-group">
                <label for="Qutlet"></label>
                <input type="qutlet" name="qutlet" id="" class="form-control" placeholder="" aria-describedby="heliId"/>
               </div>
          </div>
          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                        Qutlet
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item disabled" href="#">Disabled action</a>
                <h6 class="dropdown-header">Section header</h6>
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">After divider action</a>
            </div>
            <div class="form-group">
                <label for="Role"></label>
                <input type="role" name="qutlet" id="" class="form-control" placeholder="" aria-describedby="heliId"/>
               </div>
            <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                        Role
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item disabled" href="#">Disabled action</a>
                <h6 class="dropdown-header">Section header</h6>
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">After divider action</a>
                
            </div>
            </div>
        </form>      
          </body>
    </html>
    
@endsection
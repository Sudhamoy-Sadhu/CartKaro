@extends('Dashboard.main')
@push('title')
    <title>Dashboard - Edit</title> {{-- Enter Your Page Title Here--}}
@endpush
@section('content')
    {{--Enter Your Code Here--}}
    {{-- Route of your page is /edit --}}
    {{-- I am Abhisikta  --}}
    <div class="basic-info">
        <h2>Basic Info</h2>
        <div class="label1">
            <div class="circle">
                <img src="" alt="profile_image">
            </div>
            <div class="pic-label">
                <p>Upload new Picture</p>
                <input type="button" class="btn" value="Remove">
            </div>            
        </div>
        <div class="label">
            <h3>Name</h3>
            <input type="text" class="btn" name="" id="">
        </div>
        <div class="label">
            <h3>Email</h3>
            <input type="text" class="btn" name="" id="">
        </div>
        <div class="label">
            <h3>Contact No.</h3>
            <input type="text" class="btn" name="" id="">
        </div>
    </div>
    <div class="account-info">
        <h2>Account Info</h2>
        <div class="label">
            <h3>Username</h3>
            <input type="text" class="btn" name="" id="">
        </div>
        <div class="label">
            <h3>Password</h3>
            <input type="text" class="btn" name="" id="">
        </div>
    </div>
@endsection
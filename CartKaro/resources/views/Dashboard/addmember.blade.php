@extends('Dashboard.main')
@push('title')
    <title>Dashboard - Add Members</title> {{-- Enter Your Page Title Here --}}
@endpush
@section('content')
    {{-- Enter Your Code Here --}}
    {{-- Route of your page is /addmembers --}}
    {{-- I am Anupama --}}
    <div class="upper">
        <div class="left">
            <h2>Profile</h2>
            <div class="profile-details">

                <div class="details">
                    <label for="name">
                        <h4>Name</h4>
                    </label>
                    <input type="text">
                </div>
                <div class="details">
                    <label for="email">
                        <h4>Email</h4>
                    </label>
                    <input type="email">
                </div>
                <div class="details">
                    <label for="contact">
                        <h4>Contact No.</h4>
                    </label>
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="right">
            <input type="button" value="Add Members">
            <h5>Profile Image</h5>
            <div class="circle">
                <img src="" alt="profile image">
            </div>
            <input type="file" name="image" id="uploadFile">
        </div>
    </div>
    <div class="lower">
        <div class="left">
            <h2>Position</h2>
            <div class="details">
                <h4>Outlet</h4>
                <select name="" id="outlet">
                    <option value="westbengal">Westbengal</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="chennai">Chennai</option>
                </select>
            </div>
            <div class="details">
                <h4>Role</h4>
                <select name="" id="role">
                    <option value="mannager">Mannager</option>
                    <option value="employee">Employee</option>
                    <option value="cashier">Cashier</option>
                </select>
            </div>
        </div>
        <div class="right">
            <input type="button" value="Save">
        </div>
    </div>
@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/addmember.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}">
    @stack('title')
    <style>

    </style>
</head>

<body>
    <div class="big-container">
        <div class="main-container">
            <div class="side-bar">
                <div class="logo">
                    <h1>This is Logo</h1>
                </div>
                <div class="menu">
                    <a href="" class="dashboard">Dashboard</a>
                    <a href="" class="analysis">Analysis</a>
                    <a href="" class="addmember">Add Member</a>
                    <a href="" class="edit">Edit</a>
                </div>
            </div>
            <div class="main-content">
                <div class="header">
                    <div class="shop-name" id="shopName">Joy Ma Tara</div>
                    <div class="profile">
                        <div class="info"><strong>Anupama</strong><br>Emp_1</div>
                        <div class="circle">
                            <img src="{{ URL::asset('image/anupama.jpg') }}" alt="Image" id="mode">
                        </div>
                    </div>
                </div>
                <div class="contenter">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
</body>

</html>

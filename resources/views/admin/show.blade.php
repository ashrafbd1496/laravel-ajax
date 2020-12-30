<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Crud</title>
    <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



<div class="wrap ">
    <a class="btn btn-sm btn-primary" href="#">All Data</a>
    <div class="card shadow">
        <div class="card-body single-patient">
           <img class="shadow" src="{{asset('assets/media/img/avatar.jpg')}}" alt="">
            <h2>Md Ashrf Uddin</h2>
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td>Ashraf</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>asraf1496@gmail.com</td>
                </tr>
                <tr>
                    <td>Cell</td>
                    <td>01558917333</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>ashraf</td>
                </tr>

            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>








<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{'assets/js/bootstrap.min.js'}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css?family=Rubik:400,700');

*{
    font-family: 'Rubik', sans-serif;
}
body{
  background: #162739;
}
#form {
    margin: 50px auto;
    width: 400px;
    padding:45px 30px 15px;
    position: relative;
    box-shadow: 5px 5px 25px rgba(0,0,0,.2);
    border-radius: 1px;
    background-color: #2c3e50;
    height: 600px;
    overflow: hidden
}

#form #toggle-forms{
    position: absolute;
    top: 15px;
    right: 30px;
    border: 1px solid #3a4a5d;
    border-radius: 20px;
    overflow: hidden;
    z-index: 99
}

#form #toggle-forms > button {
    border:none;
    background:none;
    background-color: #34495e;
    border: 1px solid #22303e;
    color: #FFF;
    float:left;
    border-bottom-right-radius: 20px;
    border-top-right-radius: 20px;
    padding:2px 10px;
}

#form #toggle-forms > button:first-of-type{
    border-right: 0;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

#form #toggle-forms > button.active {
    background-color: #007bff;
}

#form form h4{
    text-transform: capitalize
}

#form form{
    padding:45px 30px 15px;
    position: absolute;
    top:0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #2c3e50;
    transition: all .3s linear;
    z-index: 2
}

#form form:last-of-type {
    left: 100%
}

#form.active form:first-of-type {
    left: -100% !important
}

#form.active form:last-of-type{
    left:0 !important
}

@media (max-width: 767px) {
    #form {
        width: 290px !important;
    }
}
.animate {
    height: 100%;
    display: block;
    margin: 0;
    padding: 0;
    width: 100%
}

.animate > li {
    position: absolute;
    height: 50px;
    width: 50px;
    top: 100%;
    left: 10px;
    background-color:  rgba(255,255,255,.1);
    z-index: -1;
    overflow: hidden;
    animation: move 10s linear infinite
}

.animate > li:nth-last-of-type(2) {
    left: 70px;
    animation-delay: 3.5s;
    height: 15px;
    width: 15px;
}

.animate > li:nth-last-of-type(3) {
    left: 140px;
    animation-delay: 3s
}

.animate > li:nth-last-of-type(4) {
    left: 210px;
    animation-delay: 5.5s
}

.animate > li:nth-last-of-type(5) {
    left: 280px;
    animation-delay: 1.8s;
    height: 65px;
    width: 65px
}

.animate > li:nth-last-of-type(6) {
    left: 140px;
    animation-delay: 6.8s;
    height: 25px;
    width: 25px
}

.animate > li:nth-last-of-type(7) {
    left: 280px;
    animation-delay: 5s;
    height: 35px;
    width: 35px
}

.myalert{
      position: fixed;
      right: 20px;
      bottom: 20px;
    }

@keyframes move {
    to {top: -50px;transform: rotate(360deg)}
}


  </style>
</head>
<body>
<div class="text-center mt-5">
  <img style="width: 200px;" class="logo" src="{{ asset('assets/images/logo.png') }}" alt="LOGO">

</div>

<section id="form">

        <form  class="col s12" action="{{ route('login-submit') }}" method="POST">
                @csrf
            <div class="text-center mt-3">
                <h4 class="text-white text-uppercase">login</h4>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email" class="validate">
                </div>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password" class="validate">
                </div>
            </div>
            <div class=" center-align">
                <button class="btn btn-primary">Login</button>
            </div>
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
        <form  class="col s12" action="{{ route('reg-submit') }}" method="POST">
        @csrf
            <div class="text-center mt-3">
                <h4 class="text-white text-uppercase">register</h4>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="email">Email</label>
                    <input class="form-control" id="email" type="email" class="validate" name="email">
                </div>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="id">ID</label>
                    <input class="form-control" id="id" type="text" class="validate" name="id">
                </div>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="name">Name</label>
                    <input class="form-control" id="name" type="text" class="validate" name="name">
                </div>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="password">Password</label>
                    <input class="form-control" id="password" type="password" class="validate" name="password">
                </div>
            </div>
            <div class="">
                <div class="input-field form-group">
                    <label class="text-white" for="password">Re-Password</label>
                        <input class="form-control" id="password" type="password" class="validate" name="password_confirmation">
                    </div>
                </div>
            <div class=" center-align">
                <button class="btn btn-primary">Register</button>
            </div>
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>


        <div id="toggle-forms">
            <button class="active" id="login">Login</button>
            <button class="" id="register">Register</button>
        </div>
    </section>


    <div class="myalert" id="myalert">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>


    <script>
      let $id = (id) => document.getElementById(id);
var [login, register, form] = ['login', 'register', 'form'].map(id => $id(id));

[login, register].map(element => {
    element.onclick = function () {
        [login, register].map($ele => {
            $ele.classList.remove("active");
        });
        this.classList.add("active");
        this.getAttribute("id") === "register"?  form.classList.add("active") : form.classList.remove("active");
    }
});

var myAlertElement = document.getElementById("myalert");

        function hideMyAlert() {
            myAlertElement.style.display = "none";
        }

        setTimeout(hideMyAlert, 3000);
    </script>
  
</body>
</html>
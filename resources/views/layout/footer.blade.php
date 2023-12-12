<!-- FOOTER -->

<footer class="container">
    <hr class="featurette-divider">

    <a class="float-right" href=""><button class="btn bg-clr text-white"><i class="ri-arrow-up-circle-line"></i></button></a>
    <p>© {{ date('Y') }} Bracu,Club Unity · <a href="{{ route('privacy') }}">Privacy</a> · <a href="{{ route('faq') }}">FAQ</a></p>
</footer>

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
        var myAlertElement = document.getElementById("myalert");

        function hideMyAlert() {
            myAlertElement.style.display = "none";
        }

        setTimeout(hideMyAlert, 3000);
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Login Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for login</span>
                <div class="infield">
                    <input type="text" name="nama" placeholder="Name" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" name="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="password" placeholder="Password" />
                    <label></label>
                </div>
                <button>Sign In</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            {{-- <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button>Sign In</button>
            </form> --}}
            <img src="/img/logo/login2.png" alt="" width="110%" class="a pr-0 pb-0 pt-10 ">
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Login dengan akun yang sudah didaftarkan pihak Rumah Qur'an Qu</p>
                    <button>Back</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hai, Sahabat Qur'an</h1>
                    <p>Untuk mendaftar hubungi pihak admin melalui Whatsapp</p>
                    <button>Login</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
    
    <!-- js code -->
    <script>
        const container = document.getElementById('container')
        const overlayCon = document.getElementById('overlayCon')
        const overlayBtn = document.getElementById('overlayBtn')

        overlayBtn.addEventListener('click', ()=> {
            container.classList.toggle('right-panel-active');
        });

    </script>

</body>
</html>
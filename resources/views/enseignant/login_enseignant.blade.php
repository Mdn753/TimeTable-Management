<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ url('css/style.css') }}">

      <title>login</title>
   </head>
   <body>
      <div class="login">
         <img src="{{ asset('images/image.png') }}" alt="login image" class="login__img">

         <form action="{{route('login.enseignant')}}"  method="POST" class="login__form">
            @csrf
            <h1 class="login__title">Login</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="email" name ="email" required class="login__input" id="email" placeholder=" ">
                     <label for="email" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" name="password" required class="login__input" id="password" placeholder=" ">
                     <label for="password" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <!-- <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input" id="login-check">
                  <label for="login-check" class="login__check-label">Remember me</label>
               </div>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div> -->

            <button type="submit" id="submit" class="login__button">Login</button>

            <!-- <p class="login__register">
               Don't have an account? <a href="#">Register</a>
            </p> -->
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
    <script>
        const showHiddenPass = (loginPass, loginEye) => {
            const input = document.getElementById(loginPass),
                  iconEye = document.getElementById(loginEye);

            iconEye.addEventListener('click', () => {
                if (input.type === 'password') {
                    input.type = 'text';
                    iconEye.classList.add('ri-eye-line');
                    iconEye.classList.remove('ri-eye-off-line');
                } else {
                    input.type = 'password';
                    iconEye.classList.remove('ri-eye-line');
                    iconEye.classList.add('ri-eye-off-line');
                }
            });
        };

        showHiddenPass('password', 'login-eye');
    </script>
   </body>
</html>
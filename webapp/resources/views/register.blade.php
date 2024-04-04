<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Load Locate | Register </title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <body>
        <div class="container" id="container">
            <div class="form-container register-container">
                    <h1>Sign In</h1>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me" />
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="/forgot-password">Forgot password?</a>
                    </div>
                    </div>
                    {{-- <a href="/"> --}}
                        <button>Log In</button>
                    {{-- </a>           --}}
                    <div class="social-container">
                    </div>
                </form>

            </div>

            <div class="form-container login-container">
                  <form action={{ url('/register')}} method="POST">
                    @csrf
                    <h1>Create Account</h1>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="phone_number" placeholder="Phone Number">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Register</button>
                  </form>
            </div>


            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="title">Hello Friends!</h1>
                        <p>Enter your personal details <br> and start connected with us</p>
                        <button class="ghost" id="register">SIGN UP
                            <i class="lni lni-arrow-left register"></i>
                        </button>
                        </div>
                        <div class="overlay-panel overlay-right">
                        <h1 class="title">Welcome Back!</h1>
                        <p>To keep connected with us please <br> login with your personal info</p>
                        <button class="ghost" id="login">SIGN IN
                            <i class="lni lni-arrow-right login"></i>
                        </button>
                        <script>
                          document.getElementById('login').addEventListener('click', function() {
                              window.location.href = 'login';
                          });
                      </script>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;800&family=Montserrat:wght@300;500&family=Poppins:wght@800&display=swap');

  * {
  box-sizing: border-box;
}

body {
  display: flex;
  background-image: url('image/ab.png');
  background-size: cover;
  background-position: auto;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: "Poppins", sans-serif;
  overflow: hidden;
  height: 100vh;
  letter-spacing: 0%;
}

h1 {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  letter-spacing: 0%;
  margin: 0;
  margin-bottom: 12px;
  font-size: 30px;
}

h1.title {
  font-size: 45px;
  line-height: 45px;
  margin: 0;
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  color: #fff
}

p {
  font-size: 15px;
  font-weight: 400;
  line-height: 20px;
  font-family: 'Inter', sans-serif;
  color:#fff;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;

}

span {
  font-size: 14px;
  margin-top: 25px;
}

a {
color: rgba(0, 0, 0, 0.7);
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
  transition: 0.3s ease-in-out;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300; 
}

a:hover {
  color: #205295;
}

.content {
  display: flex;
  width: 85%;
  height: 50px;
  align-items: center;
  justify-content: space-around;
}

.content .checkbox {
  display: flex;
  align-items: center;
  justify-content: center;
}

.content input {
  accent-color: #333;
  width: 12px;
  height: 12px;
}

.content label {
  font-size: 14px;
  user-select: none;
  padding-left: 0.5rem;
  font-family: 'Montserrat', sans-serif;
  font-weight: 300;
}

button {
  position: relative;
  border-radius: 20px;
  border: 1px solid #2C74B3;
  background-color: #2C74B3;
  color: #fff;
  font-size: 15px;
  font-weight: 800;
  font-family: 'Inter', sans-serif;
  margin: 10px;
  padding: 12px 80px;
  letter-spacing: 0%;
  text-transform: capitalize;
  transition: 0.3s ease-in-out;
}

button:hover {
  letter-spacing: 3px;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: rgba(225, 225, 225, 0.2);
  border: 2px solid #fff;
  color: #fff;
}

button.ghost i{
  position: absolute;
  opacity: 0;
  transition: 0.3s ease-in-out;
}

button.ghost i.register{
  right: 70px;
  background
}

button.ghost i.login{
  left: 70px;
}

button.ghost:hover i.register{
  right: 40px;
  opacity: 1;
}

button.ghost:hover i.login{
  left: 40px;
  opacity: 1;
}

form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border-radius: 10px;
  border: 1px solid #929292;
  padding: 12px 15px;
  margin: 8px 0;
  width: 300px;
}

.container {
  background-color: #fff;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  border-radius: 25px;
  position: relative;
  overflow: hidden;
  width: 1000px;
  height: 550px;
  max-width: 100%;
  min-height: 500px;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.login-container {
  left: 0;
  width: 50%;
  z-index: 1;
}

.container.right-panel-active .login-container {
  transform: translateX(100%);
}

.register-container {
  left: 0;
  width: 50%;
  opacity: 0;
  letter-spacing: 0%;
  z-index: 1;
}

.container.right-panel-active .register-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }

  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.container.right-panel-active .overlay-container {
  transform: translate(-100%);
}

.overlay {
  background-color: #2C74B3;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: linear-gradient(
    to top,
    rgba(46, 94, 109, 0.4) 40%,
    rgba(46, 94, 109, 0)
  );
}

.container.right-panel-active .overlay {
  transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
  transition: 0.3s ease-in-out;
}

.social-container a:hover {
  border: 1px solid #4bb6b7;
}
</style>
<script>
    const loginButton = document.getElementById("login");
    const registerButton = document.getElementById("register");
    const container = document.getElementById("container");

    loginButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
});

    registerButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
});
</script>
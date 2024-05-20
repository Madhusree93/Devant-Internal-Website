<html lang="en">

<head>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style type="text/css">
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url('public/website/images/background/images.jpg') no-repeat;

  background-position: center;
  background-size: cover;
}

.wrapper {
    width: 420px;
    background-color: transparent;
    color: #fff;
    border-radius: 10px;
    padding: 40px 60px;
    border: 2px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    font-size: 66px;
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}

.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0;
}

.input-box input {
  width: 100%;
  height: 100%;
  background-color: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box select {
  width: 100%;
    height: 100%;
    background-color: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 40px;
    color: #fff;
    padding: 10px 50px 11px 14px;
    font-size: 15px;
}

.input-box input::placeholder {
  color: #fff;
}
.input-box select::placeholder {
  color: #fff;
}
.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.wrapper .remember-forgot {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  margin: -15px 0 15px;
}

.remember-forgot label input {
  accent-color: #fff;
  margin-right: 3px;
}

.remember-forgot a {
  color: #fff;
  text-decoration: none;
}

.remember-forgot a:hover {
  text-decoration: underline;
  color: #568b8c;
}

.wrapper .btn {
  width: 100%;
  height: 45px;
  background-color: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
  transition: all 0.8s ease-out;
}

.wrapper .btn:hover {
  background-color: #568b8c;
  color: #fff;
}

.wrapper .register-link {
  font-size: 14px;
  text-align: center;
  margin: 20px 0 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
  color: #568b8c;
}
 .input-box input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
  }

</style>
<body>
  <div class="wrapper">
 <p style="color:blue;"> Thank You !  <i class="fas fa-smile"></i></p>
  <h6 style="font-size: 15px;color:blue;
    text-align: center">We Will Contact You Shortly !</h6>
  </div>
</body>

</html>
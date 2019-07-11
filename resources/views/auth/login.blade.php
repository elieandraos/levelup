<!DOCTYPE html>
<html>
<head>
    <title>Level Up LANS</title>
    <style type="text/css">
        .form-container{
            float: right;
            padding: 20px;
        }
        #email, #password
        {
            border: none;
            padding: 10px !important;
            outline: none;
            margin: 10px;
            background-color: transparent;
            border-bottom: 1px solid #999;
            color: #999;
        }
        button 
        {
            background-color: transparent;
            border: 1px solid #999;
            padding: 5px 10px;
            cursor: pointer;
            color: #999;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-transition: "color 9999s ease-out, background-color 9999s ease-out";
            -webkit-transition-delay: 9999s;
        }
    </style>
</head>
<body style="background: url(images/wall.jpg) no-repeat center center fixed;; background-size: cover">
    <form method="POST" action="{{ route('login') }}" autocomplete="off">
         @csrf
         <div class="form-container">
             <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="email" />

             <input id="password" type="password" name="password" required placeholder="password">

             <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
         </div>
    </form>
</body>
</html>
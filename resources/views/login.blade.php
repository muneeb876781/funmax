@include('Navbar');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .fullscreen {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            background: #0A101E;
        }

        .loginbody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            min-height: 100vh;
            padding: 20px 170px;
        }

        .loginbody .loginimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            height: auto;
        }

        .loginbody .loginimg img {
            width: 100%;
            height: auto;
        }

        .loginbody .logincontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            height: auto;
            color: #FFFFFF;
        }

        .loginbody .logincontent h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .loginbody .logincontent .loginform form { 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            padding: 10px;
        }

        .loginbody .logincontent .loginform form div {
            width: 100%;
            margin-bottom: 15px;
        }

        .loginbody .logincontent .loginform form input[type="email"],
        .loginbody .logincontent .loginform form input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
            background-color: #1A202C;
            color: #FFFFFF;
        }

        .loginbody .logincontent .loginform form input[type="checkbox"] {
            margin-right: 10px;
        }

        .loginbody .logincontent .loginform form label {
            color: #FFFFFF;
        }

        .loginbody .logincontent .loginform form .block {
            display: flex;
            align-items: center;
        }

        .loginbody .logincontent .loginform form .underline {
            color: #63B3ED;
        }

        .loginbody .logincontent .loginform form .underline:hover {
            color: #4299E1;
        }

        .loginbody .logincontent .loginform form .mt-4 {
            margin-top: 1rem;
        }

        .loginbody .logincontent .loginform form .flex {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .loginbody .logincontent .loginform form .flex .underline {
            margin-right: auto;
        }

        .loginbody .logincontent .loginform form .login {
            background: #FEC544;
            width: auto;
            padding: 10px 20px;
            color: #101624;
            border: none;
            border-radius: 50px;
            margin: 10px;
            font-size: 20px;
        }

        .loginbody .logincontent .loginform form .x-primary-button:hover {
            background-color: #2B6CB0;
        }
    </style>
</head>
<body>
    <div class="fullscreen">
        <div class="loginbody">
            <div class="loginimg">
                <img src="../images/experties.png" alt="Expertise Image">
            </div>
            <div class="logincontent">
                <h1>Login</h1>
                <div class="loginform">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                
                            <button class="login ms-3">
                                {{ __('Log in') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @include('footer');

    </div>

    
</body>
</html>

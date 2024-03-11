@extends('layout.app')
@section('content')

    <body class="bg-gray-50 min-h-screen flex items-center justify-center">
        @include('sweetalert::alert')
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <!-- form -->
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-2xl text-[#002D74]">Login</h2>
                <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>

                <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-4">
                    @csrf

                    <input class="p-2 mt-8 rounded-xl border" id="email" type="email" name="email"
                        placeholder="Email">
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" id="password" type="password" name="password"
                            placeholder="Password">
                        <div class="eye-icons" onclick="togglePasswordVisibility()">
                            <svg id="eye-off" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                            <svg id="eye-slash" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="gray" class="bi bi-eye-slash absolute top-1/2 right-3 -translate-y-1/2 "
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486z" />
                                <path
                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
                                <path
                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708" />
                            </svg>
                        </div>
                    </div>

                    <button type="submit" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">
                        Login
                    </button>
                </form>


                <button
                    class="my-4 flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="800px" height="800px" viewBox="-0.5 0 48 48" version="1.1">
                        <title>Google-color</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                <g id="Google" transform="translate(401.000000, 860.000000)">
                                    <path
                                        d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24"
                                        id="Fill-1" fill="#FBBC05"> </path>
                                    <path
                                        d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333"
                                        id="Fill-2" fill="#EB4335"> </path>
                                    <path
                                        d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667"
                                        id="Fill-3" fill="#34A853"> </path>
                                    <path
                                        d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24"
                                        id="Fill-4" fill="#4285F4"> </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>Login with Google</span>
                </button>

                <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                    <a href="{{ route('forgot') }}">Forgot your password?</a>
                </div>

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                    <p>Don't have an account?</p>
                    <form action="{{ route('register') }}">
                        <button class="py-2 px-4 bg-white border rounded-xl hover:scale-110 duration-300">Register</button>
                    </form>
                </div>

            </div>

            <!-- image -->
            <div class="md:block hidden">
                <img class="rounded-2xl aspect-[9/12]" src="img/showcase4.png" alt="Starboy">
            </div>
        </div>

    </body>

    {{-- mata buat password --}}
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeOffIcon = document.getElementById('eye-off');
            const eyeSlashIcon = document.getElementById('eye-slash');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOffIcon.style.display = 'none';
                eyeSlashIcon.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                eyeOffIcon.style.display = 'block';
                eyeSlashIcon.style.display = 'none';
            }
        }
    </script>
@endsection

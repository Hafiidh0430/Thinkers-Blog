<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <!-- <div class="ball_mask absolute w-16 h-16 bg-blue-600 rounded-[50%]"></div> -->
    <div class="container-login py-10 px-24 h-screen flex items-center justify-center">
        <div
            class="wrapper-login  h-fit rounded-[1rem] bg-white-300 bg-clip-padding backdrop-filter bg-slate-100 backdrop-blur-md bg-opacity-60 ">
            <div class="img_login flex items-center lg:h-full w-full gap-16 p-10">
                <div class="login_form rounded-[1rem]">
                    <div class="form w-full flex flex-col gap-6 ">
                        <div class="title_login flex flex-col gap-2 h-full">
                            <h1 class="text-3xl font-bold">Register.</h1>
                            <p class="text-lg font-light text-slate-500 leading-7">Make your account to access! </p>
                        </div>

                        <form action="{{ route('registerStore') }}" method="POST"
                            class="input_form flex flex-col gap-4">
                            @csrf
                            <div class="email flex flex-col gap-2">
                                <label for="username" class="username_label ">Username</label>
                                <input required type="text" placeholder="username" id="username" name="username"
                                    class="username w-[24rem] px-4 py-2 bg-slate-100 border-2 border-slate-200 rounded-[8px] outline-none">
                            </div>
                            <div class="password flex flex-col gap-2">
                                <label for="password" class="password_label">Password</label>
                                <input required type="password" placeholder="password" id="email" name="password"
                                    class="password  bg-slate-100 w-[24rem] px-4 py-2 border-2 border-slate-200 rounded-[8px] outline-none">
                            </div>
                            @error('password')
                                <div class="error flex items-center text-red-600 gap-3">
                                    <p class="rounded-full font-bold">!</p>
                                    <p class="text-sm font-medium">Password min 8 chars!</p>
                                </div>
                            @enderror
                            <div class="password flex flex-col gap-2">
                                <label for="password" class="password_label">Confirm Password</label>
                                <input required type="password" placeholder="confirm password" id="email"
                                    name="confirm_password"
                                    class="password  bg-slate-100 w-[24rem] px-4 py-2 border-2 border-slate-200 rounded-[8px] outline-none">
                            </div>
                            {{-- @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="error flex items-center text-red-600 gap-3">
                                        <p class="rounded-full font-bold">!</p>
                                        <p class="text-sm font-medium">{{ $error }}</p>
                                    </div>
                                @endforeach
                            @endif --}}
                            <div class="flex flex-col items-center gap-4">
                                <button type="submit" name="submit"
                                    class="login_submit w-full bg-zinc-950 text-white text-sm py-3 rounded-[8px]">Sign
                                    In to
                                    account</button>
                                <p>Have an account? <a class="underline font-semibold" href="{{ route('login') }}">Let's
                                        Sign In here.</a></p>
                            </div>
                        </form>

                    </div>
                    {{-- <p class="text-center text-[14px] mt-6">By sign an account you agree with our <span
                            class="underline">Terms of Service</span>,<br> <span class="underline">Privacy
                            Policy</span>, and my default <span class="underline">Notification Settings.</span></p> --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>

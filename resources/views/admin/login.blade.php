<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body style="font-family:Arial;background:#E8EEFB;">

<div style="width:350px;margin:100px auto;background:white;padding:30px;border-radius:10px;">

    <h2 style="text-align:center;color:#0D2D8A;">Admin Login</h2>

    @if(session('error'))
        <p style="color:red;text-align:center;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('admin.auth') }}">
        @csrf

        <input type="email" name="email" placeholder="Email"
               style="width:100%;padding:10px;margin-bottom:10px;">

        <input type="password" name="password" placeholder="Password"
               style="width:100%;padding:10px;margin-bottom:20px;">

        <button style="width:100%;padding:10px;background:#0D2D8A;color:white;border:none;">
            Login
        </button>
    </form>

</div>

</body>
</html>
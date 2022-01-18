<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #f0f2f5;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 180px;
  max-width: 600px;
  height: 330px;
  /* border: 1px solid #9C9C9C; */
  /* display: flex;
  flex-wrap: wrap; */
  /* justify-content: center;
  align-items: center; */
  box-sizing: border-box;
  border-radius: 10px;
  /* box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%); */
  box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
  background-color: #ffffff;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<body>
    <div id="login">
        {{-- <h3 class="text-center text-white pt-5">Login form</h3> --}}
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">
                    {{session()->get('message')}}
                </p>
            @endif
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('admin.dologin')}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Admin Login</h3>
                            @if(session()->has('error'))
                            <p class="alert alert-danger">
                                {{session()->get('error')}}
                            </p>
                        @endif
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Login</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
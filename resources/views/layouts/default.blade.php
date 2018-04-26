<!DOCTYPE html>
<html>
<title>@yield,('title','sample app'</title>
<link rel="stylesheet" href="/css/app.css">
<body>

<hader class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
    <div class="col-md-offset-1 col-md-10">
     <a href="/" id="logo">Sample App</a>
        <nav>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/help">帮助</a></li>
                <li><a href="#">登录</a></li>

            </ul>
        </nav>
    </div>
    </div>
</hader>
<div class="container">
@yield('content')
</div>

</body>
</html>
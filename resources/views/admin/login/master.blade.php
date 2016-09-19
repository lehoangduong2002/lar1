<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Laravel Training - @yield('title')</title>
  <link rel="stylesheet" href="{!! asset('admin/template/css/bootstrap.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('admin/template/css/animate.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('admin/template/css/font-awesome.min.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('admin/template/css/simple-line-icons.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('admin/template/css/font.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('admin/template/css/app.css') !!}" type="text/css" />

</head>
<body>
<div class="app app-header-fixed">
  

<div class="container w-xxl w-auto-xs">
  <a href class="navbar-brand block m-t">Project Laravel Training</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Đăng Nhập</strong>
    </div>
    <form name="form" class="form-validation" action="" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('admin.blocks.error')
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="text" name="username" id="username" placeholder="Username" class="form-control no-border" >
        </div>
        <div class="list-group-item">
           <input type="password" name="password" id="password"  placeholder="Password" class="form-control no-border" >
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" >Log in</button>
      <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Quên mật khẩu?</a></div>
      <div class="line line-dashed"></div>
      <p class="text-center"><small>Bạn chưa có tài khoản?</small></p>
      <a ui-sref="access.signup" class="btn btn-lg btn-default btn-block">Tạo một tài khoản</a>
    </form>
  </div>
  <div class="text-center">
    <p>
      <small class="text-muted">Training Laravel FW<br>&copy; Duong Le 2016</small>
    </p>
  </div>
</div>

</div>

<script src="{!! asset('admin/template/js/jquery.min.js') !!}"></script>
<script src="{!! asset('admin/template/js/bootstrap.js') !!}"></script>
<script src="{!! asset('admin/template/js/ui-load.js') !!}"></script>
<script src="{!! asset('admin/template/js/ui-jp.config.js') !!}"></script>
<script src="{!! asset('admin/template/js/ui-jp.js') !!}"></script>
<script src="{!! asset('admin/template/js/ui-nav.js') !!}"></script>
<script src="{!! asset('admin/template/js/ui-toggle.js') !!}"></script>

</body>
</html>

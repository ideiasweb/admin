<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('admin.projeto') }} « Ideiasweb</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="{{ asset('assets/vendor/admin/img/favicon.ico') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/admin/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/admin/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/admin/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/admin/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="{{ route('admin.login') }}">
			<img src="{{ asset('assets/vendor/admin/img/logo.png') }}" alt="Ideiasweb">
		</a>
	</div>
	<div class="login-box-body">
		@yield('conteudo')
	</div>
</div>

<script src="{{ asset('assets/vendor/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/admin/js/bootstrap.min.js') }}"></script>
</body>
</html>

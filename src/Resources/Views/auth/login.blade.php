@extends('admin::layouts.login')

@section('conteudo')
	<p class="login-box-msg">Entre para iniciar sua sessão</p>

	<form action="{{ route('admin.login.post') }}" method="post">
		<div class="form-group has-feedback">
			<input type="text" name="email" class="form-control" required placeholder="E-mail">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" required placeholder="Senha">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
			</div>
		</div>
	</form>
@endsection

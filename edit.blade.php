@extends('layouts.default')

@section('content')
<div class="page-header">
	<a class="btn btn-primary pull-right" href="{{ route('pessoas.index') }}" role="button">Voltar</a>
	<h2>Editando Pessoas</h2>
</div>

<form action="{{ route('pessoas.update', $user) }}" method="post" encType="multipart/form-data">
	@csrf
	@method('PUT')
	<fieldset>
		

		<div class="form-group @if ($errors->has('id')) has-error @endif">
			<label class="control-label" for="id">Código</label>
			<input type="text" class="form-control" id="id" name="id" value='{{ old("id", $user->id) }}' disabled>
			@if ($errors->has('id'))
			<span class="invalid-feedback help-block" role="alert">
				<strong>{{ $errors->first('id') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group @if ($errors->has('name')) has-error @endif">
			<label class="control-label" for="name">Nome do Usuário</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ old("name", $user->name) }}">
			@if ($errors->has('name'))
			<span class="invalid-feedback help-block" role="alert">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			@endif
		</div>

		<!-- tem que criar css p cpf -->

		<div class="form-group @if ($errors->has('number_cpf')) has-error @endif">
			<label class="control-label" for="number_cpf">Cpf</label>
			<input type="text" class="form-control" id="number_cpf" name="number_cpf" value="{{ old("number_cpf", $user->number_cpf) }}">
			@if ($errors->has('number_cpf'))
			<span class="invalid-feedback help-block" role="alert">
				<strong>{{ $errors->first('number_cpf') }}</strong>
			</span>
			@endif
		</div>

		

		<div class="form-group @if ($errors->has('situacao_status')) has-error @endif">
			<label class="control-label" for="situacao_status">Status</label>
			<input type="situacao_status" class="form-control" id="situacao_status" name="situacao_status" value="{{ old("situacao_status", $pessoas->situacao_status) }}">
			@if ($errors->has('situacao_status'))
			<span class="invalid-feedback help-block" role="alert">
				<strong>{{ $errors->first('situacao_status') }}</strong>
			</span>
			@endif
		</div>

		
		<br />

		<!-- CRIAR CSS BOOTSTRAP P BTN AÇÕES -->

		<button type="submit" class="btn btn-success">Ações</button>
	</fieldset>
</form>
@endsection
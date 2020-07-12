@extends('layouts.default')

@section('content')
<div class="page-header">
	<a class="btn btn-success pull-right" href="{{ route('pessoas.create') }}" role="button"> + Adicionar Pessoa</a>
	<h2>Cadastro de Pessoas</h2>
</div>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
				<tr>
					<!-- <th>Avatar</th> -->
					<th>Código</th>
					<th>Nome</th>
					<th>Cpf</th>
					<th>Status</th>
					<th>Ações</th>
				</tr>
		</thead>
			<tbody>
				@foreach ($items as $pessoas)
				<tr>	
					<td>
						<!--@if($pessoas->avatar)
							<img class="avatar" style="width: 50px;height: 50px;" src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}" /></p>
						@endif
					</td>-->
					<td>{{ $pessoas->id }}</td>
					<td>{{ $pessoas->name }}</td>
					<td>{{ $pessoas->cpf_number}}</td>
					<td>{{ $pessoas->status}}</td>
					<!-- <td>{{ $pessoas->acoes }}</td> -->
					<td>
						<form action="{{ route('pessoas.destroy', $pessoas) }}" method="post">
							@method('DELETE')
							@csrf
							<div class="btn-group btn-group-xs" role="group" aria-label="Ações">
								<a class="btn btn-primary" href="{{ route('pessoas.edit', $pessoas) }}" role="button">Editar</a>
								<a class="btn btn-primary" href="{{ route('pessoas.visualizar', $pessoas) }}" role="button">Visualizar</a>
								<button class="btn btn-danger" type="submit">Deletar</button>
							</div>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</div>
@endsection
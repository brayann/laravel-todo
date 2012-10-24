@layout('layouts/default')

@section('conteudo')

	<div class="row">

		<div class="well span4 offset4">
			{{ Form::open( URL::to('dashboard') ) }}

				{{ Form::label('descricao', 'Descrição') }}
				{{ Form::text('descricao', Input::old('descricao')) }}

				{{ Form::label('data', 'Data') }}
				{{ Form::text('data', Input::old('data')) }}				

				<p>
					{{ Form::submit('Enviar') }}
				</p>

			{{ Form::close() }}
		</div>

	</div>

@endsection
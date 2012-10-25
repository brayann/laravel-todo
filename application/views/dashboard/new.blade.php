@layout('layouts/default')

@section('conteudo')

	<div class="row">

		<div class="well span4 offset4">

			@foreach ($errors->messages as $error)
			
				<div class="alert alert-error" style="margin-bottom:5px;">

					<button type="button" class="close" data-dismiss="alert">×</button>

					<?php for($i = 0; $i < count($error); $i++) : ?>

						{{ $error[$i] }}

					<?php endfor; ?>

				</div>

			@endforeach
			
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
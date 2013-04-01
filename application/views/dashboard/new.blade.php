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

				{{ Form::label('descricao', __('form.descricao') ) }}
				{{ Form::text('descricao', Input::old('descricao')) }}

				{{ Form::label('data', __('form.data')) }}
				{{ Form::text('data', Input::old('data')) }}				

				<p>
					{{ Form::submit(__('form.submit')) }}
				</p>

			{{ Form::close() }}
		</div>

	</div>

@endsection
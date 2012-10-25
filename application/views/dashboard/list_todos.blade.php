@layout('layouts/default')

@section('conteudo')
	
	<div class="row">

		<p>
			{{ HTML::link('dashboard/new', 'Novo Todo', array('class' => 'btn btn-primary')) }}
		</p>

		@if( Session::has('error') )

			<div class="alert alert-error fade in" style="margin-top:10px;">

               {{ Session::get('error') }}

            </div>

		@endif

		@if( Session::has('msg') )

			<div class="alert alert-sucess fade in" style="margin-top:10px;">

               {{ Session::get('msg') }}

            </div>

		@endif
		
		@if (!empty($itens))

			<table class="table table-striped table-bordered table-hover">
				
				<thead>
					<tr>
						<th>Descrição</th>
						<th>Data Início</th>
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>
					@foreach($itens as $item)
						<tr>
							<td>{{ $item->descricao }}</td>
							<td>{{ date('d/m/Y H:i:s', strtotime($item->data)) }}</td>
							<td>
								@if (empty($item->finalizado))
									<a href="{{ URL::to('dashboard/finalizar/' . $item->id) }}">
										<i class="icon-ok"></i>
									</a>
								@endif
								&nbsp;
								<a href="{{ URL::to('dashboard/delete/' . $item->id) }}">
									<i class="icon-trash"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>

			</table>

		@endif

	</div>

@endsection
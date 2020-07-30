@extends('layouts.app')

@section('content')
	<div class="container">
		{{-- {{ $data }} --}}
		@foreach($posts as $key => $val)
			<div class="alert alert-info" role="alert">
				<h4 class="alert-heading">{{ $val['Topic'] }}</h4>
				<p>{{ $val['Content'] }}</p>
			</div>
		@endforeach

		<div class="d-flex justify-content-center">
			{{ $posts->links() }}
		</div>
	</div>
@endsection

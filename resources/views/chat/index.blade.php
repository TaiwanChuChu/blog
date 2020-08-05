@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 mb-2">
				<a href="{{ route('chat.create') }}">
					<button class="btn btn-success">新增文章</button>
				</a>
			</div>

			<div class="col-12">
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
		</div>
	</div>
@endsection

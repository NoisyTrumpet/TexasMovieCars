{{--
  Template Name: Thank You - Contact Template
--}}

@extends('layouts.app')

@section('content')
	<section class="thankContactWrapper blackBackground" style="padding: 3rem 0 3rem 0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="thanksWrapper text-center">
						@field('thanks_text')
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

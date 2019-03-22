@extends('frontend.header')

@section('content')
    <div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('{{url('images/background.jpg')}}'); height: 60vh; max-height:460px;">
		<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
			<p class="text-white font-extrabold text-3xl md:text-5xl">
				Medium
			</p>
		</div>
	</div>
	<div class="container px-4 md:px-0 max-w-2xl mx-auto -mt-32">
		<div class="mx-0 sm:mx-6">
			<div class="w-full text-xl md:text-2xl text-grey-darkest leading-normal rounded-t">
				<div class="flex flex-wrap justify-between -mx-6">
					@foreach ($posts as $post)
					    <div class="w-full md:w-1/3 p-1 flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{url($post->slug)}}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="{{$post->image}}" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-grey-dark text-xs md:text-sm px-6">{{$post->tags}}</p>
								<div class="w-full font-bold text-xl text-black px-6">{{$post->title}}</div>
								<p class="text-grey-darkest font-serif text-base px-6 mb-5">
									{{$post->text}}
								</p>
							</a>
						</div>
					</div>
					@endforeach	
				</div>
			</div>
		</div>
	</div>
	<footer class="bg-black">	
		<div class="container max-w-2xl mx-auto flex items-center px-2 py-8">
			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-black no-underline hover:text-black hover:no-underline" href="#">
						 <span class="text-base text-grey-lighter"> Medium</span>
					</a>
				</div>
			</div>	
		</div>
	</footer>
@endsection

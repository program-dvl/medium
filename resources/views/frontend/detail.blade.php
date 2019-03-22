@extends('frontend.header')

@section('content')
<nav id="header" class=" w-full z-10 pin-t">
	
	<div id="progress" class="h-1 z-20 pin-t" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

		<div class="w-full md:max-w-md mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
			<div class="pl-4">
				<a class="text-black text-base no-underline hover:no-underline font-extrabold text-xl"  href="{{url('/')}}"> 
					Medium
				</a>
            </div>
		</div>
	</nav>

	<!--Container-->
	<div class="container w-full md:max-w-md mx-auto pt-10 pb-10">
	    <div class="w-full px-4 md:px-6 text-xl text-grey-darkest leading-normal" style="font-family:Georgia,serif;">
			<div class="font-sans">
				<span class="text-base md:text-sm text-teal font-bold">&lt;<span> <a href="{{url('/')}}" class="text-base md:text-sm text-teal font-bold no-underline hover:underline">BACK TO BLOG</a></p>
				<h1 class="font-sans break-normal text-black pt-6 pb-2 text-3xl md:text-4xl">{{$post->title}}</h1>
				<p class="text-sm md:text-base font-normal text-grey-dark">Published on {{$post->published_date}}</p>
			</div>
		</div>
		</br>
		<p>
			{!! $post->body !!}
		</p>
	</div>

	<footer class="bg-black">	
		<div class="container max-w-2xl mx-auto flex items-center px-2 py-8">
			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:items-center text-white font-extrabold">
					<a class="text-black no-underline hover:text-black hover:no-underline" href="#">
						 <span class="text-base text-grey-lighter"> Medium</span>
					</a>
				</div>
			</div>	
		</div>
	</footer>		
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
		<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	</head>

	<body class="antialiased leading-normal h-screen tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
		<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('bg.svg');">
			<!--Nav-->
			<div class="w-full container mx-auto p-6">
				<div class="w-full flex items-center justify-between">
					<a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="#">
						<svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
						{{ config('app.name') }}
					</a>

					<div class="flex w-1/2 justify-end content-center">
						<a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" 
							data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
							<svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
						</a>

						<a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 " 
							data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
							<svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
						</a>
					</div>
				</div>
			</div>

			<!--Main-->
			<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
				<!--Left Col-->
				<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
					<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Main Hero Message to sell your app</h1>

					<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Sub-hero message, not too long and not too short. Make it just right!</p>

					<p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Download our app:</p>

					<div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
						<img src="App Store.svg" class="h-12 pr-4 bounce-top-icons">
						<img src="Play Store.svg" class="h-12 bounce-top-icons">
					</div>
				</div>

				<!--Right Col-->
				<div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
					<img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="devices.svg">
				</div>

				<!--Footer-->
				<div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
					<a class="text-gray-500 no-underline hover:no-underline" href="javascript:void(0);">&copy; {{ config('app.name') }} {{ date('Y') }}</a>
					@if (Route::has('login')) 
						@auth 
					<a href="{{ url('/home') }}"
						class="text-gray-500 no-underline hover:no-underline">{{ __('Home') }}</a>
						@else 
					<a href="{{ route('login') }}"
						class="text-gray-500 no-underline hover:no-underline">{{ __('Login') }}</a>
							@if (Route::has('register')) 
					<a href="{{ route('register') }}"
						class="text-gray-500 no-underline hover:no-underline">{{ __('Register') }}</a>
							@endif 
						@endauth 
					@endif 
				</div>
			</div>
		</div>

		{{--
		<div class="flex flex-col">
			@if (Route::has('login')) 
			<div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
				@auth 
				<a href="{{ url('/home') }}"
					class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
				@else 
				<a href="{{ route('login') }}"
					class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
					@if (Route::has('register')) 
				<a href="{{ route('register') }}"
					class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
					@endif 
				@endauth 
			</div>
			@endif 

			<div class="min-h-screen flex items-center justify-center">
				<div class="flex flex-col justify-around h-full">
					<div>
						<h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
							{{ config('app.name', 'Laravel') }}
						</h1>

						<ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
							<li>
								<a href="https://laravel.com/docs"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Documentation">Documentation</a>
							</li>
							<li>
								<a href="https://laracasts.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Laracasts">Laracasts</a>
							</li>
							<li>
								<a href="https://laravel-news.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="News">News</a>
							</li>
							<li>
								<a href="https://nova.laravel.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Nova">Nova</a>
							</li>
							<li>
								<a href="https://forge.laravel.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Forge">Forge</a>
							</li>
							<li>
								<a href="https://vapor.laravel.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Vapor">Vapor</a>
							</li>
							<li>
								<a href="https://github.com/laravel/laravel"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="GitHub">GitHub</a>
							</li>
							<li>
								<a href="https://tailwindcss.com"
									class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
									title="Tailwind Css">Tailwind CSS</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		--}}
	</body>
</html>

@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-6 pt-10 home-container">
		<div class="home-container__text">
			<h1>Welcome</h1>
			<h3 >Millions of Movies, TV Shows and people to discover, Explore more </h3>
		</div>
	</div>

	<div class="container mx-auto px-4 pt-16">
		{{-- POPULAR MOVIES --}}
		<div class="popular-movies">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/sonic.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/frozen2.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/joker.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/frozen2.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/sonic.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/joker.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/frozen2.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
			</div>

		</div>
    {{-- END OF POPULAR MOVIES --}}


    {{-- NOW PLAYING --}}
		<div class="nowplaying-movies py-24">
			<h2 class="upper-case tracking-wider text-gray-700 text-lg font-semibold">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/frozen2.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/sonic.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/joker.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/frozen2.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/joker.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/sonic.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/sonic.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img class="rounded-lg hover:opacity-75 transition ease-in-out duration-150" src="/img/parasite.jpg" alt="parasite">
					</a>
					<div class="mt-2 pb-2">
						<a href="#" class="text-lg mt-2 hover:text-gray-700">Parasite</a>
						<div class="flex items-center text-gray-600 text-sm">
							<svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-600 text-sm">
							Action, Triller, Commedy
						</div>
					</div>
				</div>
			</div>

		</div>
		{{-- END OF NEW MOVIES --}}
	</div>

@endsection

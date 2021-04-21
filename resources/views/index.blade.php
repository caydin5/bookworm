@extends('layouts.default')

@section('content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Access <span class="text-pink-500">millions</span> of books</h2>
            <h3 class="text-2xl sm:text-4xl italic">with BookWorm</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to explore</p>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-lg font-semibold">Popular Books</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book1.jpg" alt="Ocean Prey">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Ocean Prey</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book2.jpg" alt="We Are All The Same In The Dark">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">We Are All The Same In The Dark</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book3.jpg" alt="The Venice Sketchbook">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">The Venice Sketchbook</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book4.jpg" alt="Rhythm Of War">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Rhythm Of War</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book5.jpg" alt="Goblet of Fire">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Goblet of Fire</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book6.jpg" alt="Dune">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Dune</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">84.6%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book7.jpg" alt="Philosopher's Stone">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Philosopher's Stone</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book8.jpg" alt="The Four Winds">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">The Four Winds</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-lg font-semibold">Best Sellers</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book7.jpg" alt="Philosopher's Stone">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Philosopher's Stone</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book3.jpg" alt="The Venice Sketchbook">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">The Venice Sketchbook</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book4.jpg" alt="Rhythm Of War">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Rhythm Of War</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-80 transition ease-in-out duration-150" src="/img/book6.jpg" alt="Dune">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Dune</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl ml-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia optio quis voluptatum rem, libero nobis modi magnam consectetur nemo iusto non ad. Dignissimos accusantium delectus id neque odit illo debitis, excepturi doloribus sequi hic veritatis esse culpa deserunt maiores, cupiditate inventore obcaecati recusandae nesciunt modi! Officiis repudiandae ipsa delectus.
            </p>
            <a href="{{ route('about') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What can you learn?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Reading Habits</h3>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta atque deleniti facilis saepe tempore at alias voluptate quas aliquam ad?
                        </p>
                        <a href="{{ url('https://google.com') }}" target="_blank" rel="noopener noreferrer"
                        class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
                    </div>
                </div>
            <div class="w-full sm:w-1/2 mb-3 px-2">
                <div class="p-4 bg-gray-500 h-full rounded-lg">
                    <h3 class="text-xl font-bold mb-3">Instant Access</h3>
                    <p class="text-gray-200 mb-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta atque deleniti facilis saepe tempore at alias voluptate quas aliquam ad?
                    </p>
                    <a href="{{ url('https://google.com') }}" target="_blank" rel="noopener noreferrer"
                    class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where else to read?</h3>
            <h3 class="text-xl mb-6">Check out these BookWorm suggestions</h3>
            <div class="-mx-2 sm:flex">
                <a href="{{ url('https://google.com') }}" target="_blank" rel="noopener noreferrer" 
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2">💻</span> Listen on <strong>Audible</strong>
                </a>
                <a href="{{ url('https://google.com') }}" target="_blank" rel="noopener noreferrer" 
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2">📚</span> Read on <strong>Goodreads</strong>
                </a>
            </div>
        </div>
@endsection
@extends('layouts.default')

@section('content')
    <div class="book-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img class="w-92 py-16" src="/img/book6.jpg" alt="Ocean Prey">
            <div class="ml-24 mt-20">
                <h2 class="text-4xl font-semibold">Dune (1965)</h2>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 text-white hover:text-pink-500 transition">Frank Herbert</a>
                    <div class="flex items-center text-gray-400 text-sm">
                        <svg class="fill-current text-pink-500 w-4 mb-0.5" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">84.6%</span>
                        <span class="mx-2">|</span>
                        <span>Jun 20, 1965</span>
                        <span class="mx-2">|</span>
                        <span>Space Opera, Epic Fantasy</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        Set on the desert planet Arrakis, Dune is the story of the boy Paul Atreides, heir to a noble family tasked with ruling an inhospitable world where the only thing of value is the “spice” melange, a drug capable of extending life and enhancing consciousness. Coveted across the known universe, melange is a prize worth killing for...
                        <br><br>When House Atreides is betrayed, the destruction of Paul’s family will set the boy on a journey toward a destiny greater than he could ever have imagined. And as he evolves into the mysterious man known as Muad’Dib, he will bring to fruition humankind’s most ancient and unattainable dream.                    </p>
                </div>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>059309932X</div>
                            <div class="text-sm text-gray-400">ISBN</div>
                        </div>
                        <div class="ml-8">
                            <div>Ace Books</div>
                            <div class="text-sm text-gray-400">Publisher</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-pink-500 text-center py-2 px-4 
                    rounded hover:bg-purple-500 transition">Read Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold"></h2>
        </div>
    </div>
@endsection
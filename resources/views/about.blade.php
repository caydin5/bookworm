@extends('layouts.default')

@section('content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">
                About
            </h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">What is employee management?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi consequuntur quisquam quidem dolorum eaque soluta veritatis rem voluptate sed, hic fuga ut! Eos veritatis ex maxime natus accusantium ad tenetur magni voluptate necessitatibus quae vitae eum consectetur placeat quod est sed nobis qui, cumque vero? Amet voluptatum obcaecati cumque quasi beatae magni tempore aspernatur doloribus a maiores. Ipsa quam enim debitis officia, itaque sunt unde ullam obcaecati velit atque soluta recusandae porro veritatis maxime earum sequi pariatur provident, nostrum nisi delectus modi! Aliquam in voluptate accusamus laborum, ducimus perferendis magnam itaque, iusto quasi eaque eos accusantium nostrum nobis?
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic qui necessitatibus labore consequuntur quos a sequi, minima porro, ab magnam modi enim! Voluptas, repellendus consectetur!
            </p>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nam aliquid vero accusantium debitis rerum corporis numquam. Perspiciatis expedita aut eligendi dolor. Exercitationem maiores fugit delectus dolorum at animi molestias, cupiditate nesciunt quibusdam asperiores consequuntur expedita suscipit ab rem? Itaque omnis, quos id quod illo nihil voluptas quam consequatur laboriosam!
            </p>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded
                hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection
<x-layout>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12">
            <h2>Ecco le card</h2>
        </div>
        <div class="col-12 col-md-6 mt-5">
            {{-- @dd($products) --}}
            @foreach($products as $product)
            <x-card
            :product="$product"
            />
            @endforeach
        </div>
    </div>
</div>


</x-layout>
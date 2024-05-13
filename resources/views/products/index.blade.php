<x-layout>

<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-12">
            <h2>Ecco le card</h2>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row justify-content-center text-center">
        @foreach($products as $product)
        <div class="col-10 col-md-3 my-3 mx-3">
                {{-- @dd($products) --}}
                <x-card
                :product="$product"
                />
                
            </div>
            @endforeach
    </div>
</div>

</x-layout>
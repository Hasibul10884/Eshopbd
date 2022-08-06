<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Products</span></h2>
    </div>
    @foreach($products as $product)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80">
                        <h5><a href="#">{{$product->name}}</a></h5>
                    </div>
                </div>
@endforeach
</div>
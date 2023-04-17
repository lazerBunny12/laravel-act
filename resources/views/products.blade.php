<h1>{{ $product->name }}</h1>


<ul>
    <li><h2>Description</h2>{{$product->description}}</li>
    <li><h2>Price</h2>{{$product->unit_price}} per {{$product->unit}}</li>
    <li><h2>Category</h2>{{$product->category}}</li>
</ul>
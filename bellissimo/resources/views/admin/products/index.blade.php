
    @extends('layouts.app')

    @section('content')

       <div class="card">
            <div class="card-header">
                Products
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Image
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            Price
                        </th>

                        <th>
                            Edit
                        </th>

                         <th>
                            Delete
                        </th>
                    
                    </thead>

                    <tbody>
                        @if($products->count() > 0)
                            @foreach($products as $product)
                                <tr>
                                    <td><img src="{{ $product->featured }}"  alt="{{ $product->title }}" width="200px" height="200px"></td>

                                    <td>{{ $product->title }}</td>

                                    <td>{{ $product->price }}</td>

                                    <td>
                                        <a href="{{ route('product.edit', ['id'=>$product->id]) }}" class="btn btn-xs btn-info">Edit</a>

                                    </td>

                                    <td><a href="{{ route('product.delete', ['id'=>$product->id]) }}" class="btn btn-xs btn-danger">Trash</a></td>

                                
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">No products</th>
                            </tr>
                        @endif
                    </tbody>                   
                            
                </table>
            </div>

       </div>

    @stop

    @extends('layouts.app')

    @section('content')

       <div class="card">
            <div class="card-header">
                Trashed products
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
                            Restore
                        </th>
                        <th>
                            Destroy
                        </th>
                    
                    </thead>

                    <tbody>
                        @if($products->count() > 0)
                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{ $product->featured }}"  alt="{{ $product->Name }}" width="200px" height="200px">
                                    </td>

                                    <td>{{ $product->title }}</td>

                                    <td>{{ $product->price }}</td>
                                    
                                    <td>
                                        <a href="{{ route('product.restore', ['id'=>$product->id]) }}" class="btn btn-xs btn-success">Restore</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('product.kill', ['id'=>$product->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                    </td>

                                
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <th colspan="5" class="text-center">No trashed products</th>
                            </tr>
                        @endif
                    </tbody>                   
                            
                </table>
            </div>

       </div>

    @stop
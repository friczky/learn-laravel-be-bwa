@extends('layouts.default')

@section('content')
 <div class="order">
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">
                     <h4 class="box-title">Daftar Barang</h4>
                 </div>
                 <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-picture-o"></i> </a>
                                        <a href="{{ route('product.edit',$item->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"> </i> </a>
                                        <a href="{{ route('product.destroy',$item->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                        <form action="{{ route('product.destroy', $item->id) }}" class="d-inline" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection

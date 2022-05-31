@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Uabah Barang</strong>
        <small>{{ $item->name }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product.update',$item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="" class="form-control-label">Nama Barang</label>
                <input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror">
                 @error('name')<div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Tipe Barang</label>
                <input type="text" name="type" value="{{ old('type') ? old('type') : $item->type }}" class="form-control @error('type') is-invalid @enderror">
                @error('type')<div class="text-muted">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="" class="form-control-label">Deskripsi Barang</label>
                <textarea name="description" id="editor" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
                @error('description')<div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Harga Barang</label>
                <input type="number" name="price" value="{{ old('price') ? old('price') : $item->price }}" class="form-control @error('price') is-invalid @enderror">
                @error('price')<div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-control-label">Jumlah Barang</label>
                <input type="number" name="quantity" value="{{ old('quantity') ? old('quantity') : $item->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                @error('quantity')<div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block">Edit Barang</button>
            </div>

        </form>
    </div>
</div>

@endsection

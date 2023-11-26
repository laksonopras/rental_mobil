@extends('layouts.adminpage')
@section('mainContent')
<div class="p-3" id="car">  
    <h1 class="text-center fw-bold">Daftar Produk</h1>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addcar">Tambah Produk</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Kode Menu</th>
                <th scope="col">Kategori</th>
                <th scope="col">Produk</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Diskon</th>
                <th scope="col" colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    {{-- <td>{{ $car['id'] }}</td>
                    <td>{{ $car['category']->category }}</td>
                    <td>{{ $car['car_name'] }}</td>
                    <td>{{ $car['stock'] }}</td>
                    <td>{{ $car['price'] }}</td>
                    <td>{{ $car['discount'] }}</td>
                    <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewcar{{$car['id']}}">lihat</a>
                        <div class="modal fade " id="viewcar{{$car['id']}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center" ">
                                                <img src="{{ asset('storage/'.$car->car_pict) }}" class="img-fluid">
                                            </div>
                                            <div class="col py-3">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td class="py-3">Nama Produk</td>
                                                        <td>{{ $car['car_name'] }}</td>
                                                    </tr>
                                                    <tr ">
                                                        <td class="py-4">Kategori</td>
                                                        <td>{{ $car->category->category}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Stok</td>
                                                        <td>{{ $car['stock'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Harga</td>
                                                        <td>{{ $car['price'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Diskon</td>
                                                        <td>{{ $car['discount'] }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editcar{{$car['id']}}">ubah</a>
                        <div class="modal fade" id="editcar{{$car['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/car/edit/{{ $car['id'] }}"method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td>Nama Produk</td>
                                                    <td><input class="form-control my-3 @error('car_name') is-invalid @enderror" type="text" placeholder="{{ $car['car_name'] }}" name="car_name">
                                                        @error('car_name')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>
                                                        <select class="form-select" name="category_id">
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category['id']}}">{{ $category['category']}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Stok</td>
                                                    <td><input class="form-control my-3 @error('stock') is-invalid @enderror" type="text" placeholder="{{ $car['stock'] }}" name="stock">
                                                        @error('stock')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Harga</td>
                                                    <td><input class="form-control my-3 @error('price') is-invalid @enderror" type="text" placeholder=" {{ $car['price'] }} " name="price">
                                                        @error('price')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Diskon</td>
                                                    <td><input class="form-control my-3 @error('discount') is-invalid @enderror" type="text" placeholder=" {{ $car['discount'] }} " name="discount">
                                                        @error('discount')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%"><label for="inputcarPict" class="form-label">Foto Produk</label></td>
                                                    <td>
                                                        <input type="file" class="form-control my-1 @error('car_pict') is-invalid @enderror" id="inputcarPict" placeholder="Foto Produk" name="car_pict">
                                                        @error('car_pict')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><a class="btn btn-danger" href="/car/delete/{{ $car['id'] }}" >hapus</a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="addcar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/car/add"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <table style="width: 100%;">
                        <tr>
                            <td>Nama Produk</td>
                            <td><input class="form-control my-3 @error('car_name') is-invalid @enderror" type="text" required placeholder="Nama Produk" name="car_name" aria-describedby="nameHelp">
                                @error('car_name')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            {{-- <td>Kategori</td>
                            <td>
                                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id']}}">{{ $category['category']}}</option>
                                    @endforeach
                                </select> 
                            </td> --}}
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input class="form-control my-3 @error('stock') is-invalid @enderror" type="text" required placeholder="Stok" name="stock">
                                @error('stock')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input class="form-control my-3 @error('price') is-invalid @enderror" type="text" required placeholder="harga" name="price">
                                @error('price')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Diskon</td>
                            <td><input class="form-control my-3 @error('discount') is-invalid @enderror" type="text" required placeholder="diskon" name="discount">
                                @error('discount')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 25%"><label for="inputcarPict" class="form-label">Foto Produk</label></td>
                            <td>
                                <input type="file" class="form-control my-1 @error('car_pict') is-invalid @enderror" id="inputcarPict" placeholder="Foto Produk" name="car_pict"required>
                                @error('car_pict')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
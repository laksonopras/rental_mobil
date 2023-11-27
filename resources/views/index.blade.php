@extends('layouts.admin_page')
@section('mainContent')
<div class="p-3" id="car">  
    <h1 class="text-center fw-bold">Daftar Produk</h1>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addcar">Tambah Produk</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Merk</th>
                <th scope="col">Stock</th>
                <th scope="col">Capacity</th>
                <th scope="col">Transmission</th>
                <th scope="col">Fuel</th>
                <th scope="col">Rate</th>
                <th scope="col">Price</th>
                <th scope="col" colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car['id'] }}</td>
                    <td>{{ $car['merk'] }}</td>
                    <td>{{ $car['stock'] }}</td>
                    <td>{{ $car['capacity'] }}</td>
                    <td>
                        @if ($car['transmission'] == 0)
                            Automatic
                        @else
                            Manual
                        @endif
                    </td>
                    <td>{{ $car['fuel'] }}</td>
                    <td>{{ $car['rate'] }}</td>
                    <td>Rp. {{ $car['price'] }}</td>
                    <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewcar{{$car['id']}}">lihat</a>
                        <div class="modal fade " id="viewcar{{$car['id']}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/car/{{ $car['id'] }}"method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body p-3">
                                            <div class="row">
                                                <div class="col-3 d-flex align-items-center" ">
                                                    <img src="{{ asset('storage/'.$car->car_pict) }}" class="img-fluid">
                                                </div>
                                                <div class="col py-3">
                                                    <table style="width: 100%;">
                                                        <tr>
                                                            <td>Merk</td>
                                                            <td><input class="form-control my-1 @error('merk') is-invalid @enderror" type="text" placeholder="{{$car->merk}}" name="merk" aria-describedby="merkHelp">
                                                                @error('merk')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stock</td>
                                                            <td><input class="form-control my-1 @error('stock') is-invalid @enderror" type="text" placeholder="{{$car->stock}}" name="stock">
                                                                @error('stock')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input class="form-control my-1 @error('capacity') is-invalid @enderror" type="text" placeholder="{{$car->capacity}}" name="capacity">
                                                                @error('capacity')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>
                                                                <select class="form-select @error('transmission') is-invalid @enderror" name="transmission">
                                                                        <option value="0">Automatic</option>
                                                                        <option value="1">Manual</option>
                                                                </select> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fuel</td>
                                                            <td><input class="form-control my-1 @error('fuel') is-invalid @enderror" type="text" placeholder="{{$car->fuel}}" name="fuel">
                                                                @error('fuel')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rate</td>
                                                            <td><input class="form-control my-1 @error('rate') is-invalid @enderror" type="text" placeholder="{{$car->rate}}" name="rate">
                                                                @error('rate')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td><input class="form-control my-1 @error('price') is-invalid @enderror" type="text" placeholder="{{$car->price}}" name="price">
                                                                @error('price')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 25%"><label for="inputcarPict" class="form-label">Car Picture</label></td>
                                                            <td>
                                                                <input type="file" class="form-control my-1 @error('car_pict') is-invalid @enderror" id="inputcarPict" placeholder="car picture" name="car_pict">
                                                                @error('car_pict')
                                                                    <div class="form-text">{{ $message }}</div>
                                                                @enderror
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
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
                    <td><a class="btn btn-danger" href="/car/delete/{{ $car['id'] }}" >hapus</a></td>
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
            <form action="/car"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <table style="width: 100%;">
                        <tr>
                            <td>Merk</td>
                            <td><input class="form-control my-1 @error('merk') is-invalid @enderror" type="text" required placeholder="Merk" name="merk" aria-describedby="merkHelp">
                                @error('merk')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Stock</td>
                            <td><input class="form-control my-1 @error('stock') is-invalid @enderror" type="text" required placeholder="Stok" name="stock">
                                @error('stock')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Capacity</td>
                            <td><input class="form-control my-1 @error('capacity') is-invalid @enderror" type="text" required placeholder="capacity" name="capacity">
                                @error('capacity')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Transmission</td>
                            <td>
                                <select class="form-select @error('transmission') is-invalid @enderror" name="transmission">
                                        <option value="0">Automatic</option>
                                        <option value="1">Manual</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Fuel</td>
                            <td><input class="form-control my-1 @error('fuel') is-invalid @enderror" type="text" required placeholder="fuel" name="fuel">
                                @error('fuel')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Rate</td>
                            <td><input class="form-control my-1 @error('rate') is-invalid @enderror" type="text" required placeholder="rate" name="rate">
                                @error('rate')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input class="form-control my-1 @error('price') is-invalid @enderror" type="text" required placeholder="price" name="price">
                                @error('price')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 25%"><label for="inputcarPict" class="form-label">Car Picture</label></td>
                            <td>
                                <input type="file" class="form-control my-1 @error('car_pict') is-invalid @enderror" id="inputcarPict" placeholder="car picture" name="car_pict"required>
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
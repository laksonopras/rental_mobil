@extends('layouts.admin_page')
@section('mainContent')
<div class="p-3" id="car">  
    <h1 class="text-center fw-bold">Riwayat Pemesanan</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Kode Booking</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Merk Mobil</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Pengambilan</th>
                <th scope="col">Pengembalian</th>
                <th scope="col">Harga</th>
                <th scope="col" colspan="3">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->username }}</td>
                    <td>{{ $order->car->merk }}</td>
                    <td>{{ $order->car->price }}</td>
                    <td>{{ $order->check_in }}</td>
                    <td>{{ $order->check_out }}</td>
                    <td>Rp. {{ $order->price }}</td>
                    <td>
                        @if ($order->status == 0)
                            Dibatalkan
                        @elseif($order->status == 1)
                            Pemesanan Sukses
                        @elseif($order->status == 2)
                            Unit Telah Diambil
                        @else
                            Unit Telah Dikembalikan
                        @endif
                    </td>
                    {{-- <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewcar{{$car['id']}}">lihat</a>
                        <div class="modal fade " id="viewcar{{$car['id']}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/order/{{ $order['id'] }}"method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body p-3">
                                            <div class="row">
                                                <table style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col" colspan="3">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @foreach($items as $item)
                                                            @endforeach
                                                            <td>{{$item->car->merk}}</td>
                                                            <td>{{$item->car->price}}</td>
                                                            <td>{{$item->checkin}}</td>
                                                            <td>{{$item->checkout}}</td>
                                                            <td>{{$item->price}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                    </td> --}}
                    {{-- <td><a class="btn btn-danger" href="/car/delete/{{ $car['id'] }}" >hapus</a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
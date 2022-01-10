@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <table class="table" >
                    <thead style="background-color: #F3F6F9; ">
                        <tr class="">
                            <th scope="col">No</th>
                            {{-- <th scope="col">NIK</th> --}}
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jenis Vaksin</th>
                            <th scope="col">Vaksin 1</th>
                            <th scope="col">Vaksin 2</th>
            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pendaftar as $detail)
            
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                {{-- <td>{{ $detail->nik }}</td> --}}
                                <td>{{ $detail->nama }}</td>
                                <td>{{ $detail->jeniskelamin }}</td>
                                <td>{{ $detail->lokasi}}</td>
                                <td>{{ $detail->vaksin}}</td>
                                <td>{{ $detail->created_at->modify('+7 day')->format('d-M-Y')}}</td>
                                <td>{{ $detail->created_at->modify('+21 day')->format('d-M-Y')}}</td>
                            </tr>
                        @endforeach
            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

{{-- @foreach($pendaftar as $detail)
    {{ $detail->nik }}
    {{ $detail->nama }}
    {{ $detail->created_at }}
    {{ $detail->created_at->modify('+7 day')->format('Y-m-d') }}
    {{ $detail->created_at->modify('+14 day')->format('Y-m-d') }}
@endforeach --}}
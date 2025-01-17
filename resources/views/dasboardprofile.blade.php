@extends('layaouts.main')

@section('konten')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($home as $homes)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $homes->name }}</td>
        <td>{{ $homes->alamat }}</td>

        <td>
            {{-- <a href="/dashboard/profile/{{ $profiles->id }}/edit"class="badge bg-warning p-2 m-1"><i class="bi bi-pencil-square m-1"></i></a>
            <form action="/dashboard/profile/{{ $profiles->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-warning">Delete</button>
            
            </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/dashboard/profile/create"><button type="button" class="btn btn-primary ms-4">Submit Data</button></a>
    
@endsection
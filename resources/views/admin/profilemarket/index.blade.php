@extends('layouts.admin')

@section ('content')

<div class="col-10 col-md-10 col-sm-10 col-lg-10">
    <div class="card" style="width: 800px">
        <div class="card-header">
            <h5>PROFILE MARKET LIST</h5>
        </div>
        <div class="card-body" style="width: 800px">
            <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address  - Kota</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">{{ $profile->title }}</td>
                    <td>{{ $profile->diskripsi }}</td>
                    <td>{{ $profile->telpon }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->address .' - '.$profile->kota }}</td>
                    <td> <a href="{{ route('admin.profileedit') }}" class="btn btn-success"> Edit</a> </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection
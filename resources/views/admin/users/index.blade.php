<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>User</h1>
            <p class="breadcrumbs"><span><a href="/">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>User
            </p>
        </div>
        {{-- <div>
            <a href="{{ route('user.create') }}" class="btn btn-primary"> Tambah User</a>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    {{-- <th>Gambar</th> --}}
                                    <th>Role</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        {{-- <td><img class="tbl-thumb" src="{{asset($item->gambar)}}"
                                                alt="Article Image" /></td> --}}
                                        <td>Admin</td>
                                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                                        <td>
                                            <a href="{{route('user.edit',$item->id)}}" class="btn btn-outline-success">Info</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Js conf delete-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Hapus Data?`,
                text: "Jika data terhapus, data akan hilang selamanya!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                form.submit();
              }
            });
        });

    </script>
</x-app-layout>

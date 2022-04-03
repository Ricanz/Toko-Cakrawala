<x-app-layout>
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
        <h1>Kategori Utama</h1>
        <p class="breadcrumbs"><span><a href="/">Dashboard</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Kategori Utama
        </p>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="ec-cat-list card card-default mb-24px">
                <div class="card-body">
                    <div class="ec-cat-form">
                        <h4>Tambah Kategori Baru</h4>
                        <form method="post" action="{{ route('kategori.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Kategori</label>
                                <div class="col-12">
                                    <input id="text" name="nama" class="form-control here slug-title" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                <div class="col-12">
                                    <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                    <small>The “slug” is the URL-friendly version of the name. It is usually all
                                        lowercase and contains only letters, numbers, and hyphens.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Deskripsi</label>
                                <div class="col-12">
                                    <textarea id="fulldescription" name="detail" cols="40" rows="4"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="ec-cat-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Thumb</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Trending</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td><img class="cat-thumb" src="tadmin/assets/img/category/clothes.png"
                                                alt="Product Image" /></td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-count" title="Total Sub Categories">{{$item->subkategori->count()}}</span>
                                                @foreach ($item->subkategori->pluck('nama') as $kategori)
                                                    <span class="ec-sub-cat-tag">{{ $kategori }}</span>
                                                @endforeach
                                            </span>
                                        </td>
                                        <td>{{ $item->detail }}</td>
                                        {{-- <td>2161</td> --}}
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item">
                                                    <form action="{{route('kategori.destroy', $item->id)}}" method="POST" style="display: inline">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 show_confirm" data-toggle="tooltip" title='Delete'><i class="fas fa-trash text-secondary"></i></button>
                                                    </form>
                                                </a>
                                                    </div>
                                                </div>
                                            </div>
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

<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Tambah Produk</h1>
            <p class="breadcrumbs"><span><a href="/dashboard">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Tambah Produk
            </p>
        </div>
        <div>
            <a href="{{ route('produk.index') }}" class="btn btn-primary"> Lihat Semua
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah Produk</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="gambar1" class="ec-image-upload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('tadmin/assets/img/products/vender-upload-preview.jpg') }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thumb-upload-set colo-md-12">
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload01" name="gambar2" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('tadmin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload02" name="gambar3" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('tadmin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload03" name="gambar4" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('tadmin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload04" name="gambar5" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('tadmin/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row g-3">

                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Produk</label>
                                        <input type="text" name="nama" class="form-control slug-title" id="inputEmail4" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Kategori</label>
                                        <select name="kategori_id" id="Categories" class="form-select">
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Slug</label>
                                        <div class="col-12">
                                            <input id="slug" name="slug" class="form-control here set-slug" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Harga <span>( In IDR
                                                )</span></label>
                                        <input type="number" name="harga" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Stok</label>
                                        <input type="number" class="form-control" name="stok" id="quantity1">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="detail" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>

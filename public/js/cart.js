function jumlahCart(event) {   
    // event.preventDefault();
    var id = $(event).data("id");
    var jumlah = $('#qty-input-'+id).val();
    console.log('asd',jumlah,  id);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: 'updateToCart',
        data: {
            id: id,
            jumlah: jumlah,
        },       
        success: function (response) {
            console.log(response);
        }
    });
}

function tambahCart(event) {
    var id = $(event).data("id");
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: "DELETE",
        url: "deleteCart" + '/' + id,
        data: {},
        success: function (response) {
            $("#data_" + id).remove();
        }
    });
}
function deleteCart(event) {
    var id = $(event).data("id");
    console.log(id);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: "DELETE",
        url: "deleteCart" + '/' + id,
        data: {},
        success: function (response) {
            $("#data_" + id).remove();
        }
    });
}

$(document).ready(function () {
    let harga_produk = 0
    let jumlah = 0
    let harga_akhir = 0
    $('.harga-produk').each(function (i, obj) {
        $('.qty-input-js').each(function (k, val) {
            if (i == k) {
                harga_akhir = parseInt($(obj).text()) * parseInt($(val).val())
            }
            jumlah = parseInt($(obj).val()) + jumlah
            console.log(harga_akhir)
        });
        harga_produk = harga_produk + harga_akhir
    });

    $("#total-harga").text(harga_produk)
});

let jumlahClick = 0
function tambahKurang(event) {
    var id = $(event).data("id");
    var jumlah_produk = $('#qty-input-'+id).val();
    console.log('asd',jumlah_produk,  id);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: 'updateToCart',
        data: {
            id: id,
            jumlah: jumlah_produk,
        },       
        success: function (response) {
            console.log(response);
        }
    });
    
    let harga_produk = 0
    let jumlah = 0
    let harga_akhir = 0
    $('.harga-produk').each(function (i, obj) {
        $('.qty-input-js').each(function (k, val) {
            if (i == k) {
                harga_akhir = parseInt($(obj).text()) * parseInt($(val).val())
            }
            jumlah = parseInt($(obj).val()) + jumlah
            console.log(harga_akhir)
        });
        harga_produk = harga_produk + harga_akhir
    });
    $("#total-harga").text(harga_produk)    
}


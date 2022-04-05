function jumlahCart(event) {   
    // event.preventDefault();
    var id = $(event).data("id");
    var jumlah = $('#qty-input-'+id).val();
    var jumlah_produk = $('#harga-produk-'+id).html();
    console.log('asd',jumlah,  id, jumlah_produk);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: 'updateToCart',
        data: {
            id: id,
            jumlah: jumlah,
        },       
        success: function (response) {
            $("#total-" + id).html(jumlah*jumlah_produk);
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
    if (event.target.innerHTML == '+') {
        var id = $(event.target).prev().data("id");
    } else {
        var id = $(event.target).next().data("id");
    }  
    console.log(id );
    var jumlah_produk = $('#qty-input-'+id).val();
    
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


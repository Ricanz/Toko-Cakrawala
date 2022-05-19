function deleteCart(event) {
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
function tambahCart(event) {
    console.log('erza');
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
$(document).ready(function () {
    console.log('erza');
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
function tambahKurang(id) {
    let harga_produk = 0
    let jumlah = 0
    let barang = $('#qty-input-'+id).val();
    let harga_akhir = 0
    $('.harga-produk').each(function (i, obj) {
        $('.qty-input-js').each(function (k, val) {
            if (i == k) {
                harga_akhir = parseInt($(obj).text()) * parseInt($(val).val())
            }
            console.log(barang)
            jumlah = parseInt($(obj).val()) + jumlah
            
            // var id = $(event).data("id");
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: "POST",
                url: "updateToCart",
                data: {
                    'produk_id' : id,
                    'jumlah_produk' : barang,
                }
            });
            // console.log(id);
        });
        harga_produk = harga_produk + harga_akhir
    });

    $("#total-harga").text(harga_produk)

    // var jumlah = $("#qty-input-" + id).val();
    // var harga_produk = $("#harga-produk-" + id).text()
    // var total = jumlah * harga_produk
    // if (jumlahClick == 0) {
    //     var currentTotal = total
    //     $("#total-harga").text(currentTotal)
    //     jumlahClick = 1
    // } else {
    //     var currentTotal = parseInt($("#total-harga").text()) + total
    //     $("#total-harga").text(currentTotal)
    // }


}

$(document).ready(function () {
  $(".increment-btn").click(function (e) {
    e.preventDefault();
    var qty = $(this).closest(".modal-product-data").find(".qty-input").val();
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 10) {
      value++;
      $(".qty-input").val(value);
      $(this).closest(".modal-product-data").find(".qty-input").val(value);
    }
  });

  $(".decrement-btn").click(function (e) {
    e.preventDefault();
    var qty = $(this).closest(".modal-product-data").find(".qty-input").val();
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
      value--;
      $(".qty-input").val(value);
      $(this).closest(".modal-product-data").find(".qty-input").val(value);
    }
  });

  $(".passingID").click(function (e) {
    var ids = $(this).attr("data-id");
    var ids2 = $(this).attr("data-id2");
    var ids3 = $(this).attr("data-id3");
    var ids4 = $(this).attr("data-id4");
    var ids5 = $(this).attr("data-id5");

    $("#idkl").attr("src", ids);
    $("#product-name-jquery").html(ids3);
    $("#product-keterangan-jquery").html(ids4);
    $("#price").html(ids5);
    // $(".formulir-isi").attr("action", "product.php?<?= $row['" + ids5 + "' ] ?>");
    $(".addToCartBtn").attr("value", ids2);
    $("#myModal").modal("show");
  });

  $(".addToCartBtn").click(function (e) {
    e.preventDefault();
    var qty = $(this).closest(".modal-product-data").find(".qty-input").val();
    var price = $(this).closest(".modal-product-data").find("#price").html();
    var name = $(this).closest(".modal-product-data").find("#product-name-jquery").html();
    var img = $(this).closest(".modal-product-data").find("#idkl").attr("src");
    var prod_id = $(this).val();
    // var ids5 = $(this).attr("data-id5");

    $.ajax({
      type: "POST",
      url: "../function/handlecart.php",
      data: {
        prod_id: prod_id,
        prod_qty: qty,
        prod_price: price,
        prod_img: img,
        prod_name: name,
        prod_total_price: qty * price,
        scope: "add",
      },
      // dataType: "dataType",
      success: function (response) {
        if (response === 201) {
          alert("Data Berhasil Ditambahkan");
        } else if (response == 301) {
          alert("Produk gagal ditambahkan");
        } else if (response == "existing") {
          alert("produk udah ada");
        }
      },
    });

    location.href = "../CLIENT/product.php";
  });

  // $(".Bayar-sekarang").click(function (e) {
  //   e.preventDefault();
  //   var data_bayar = $(this).attr("data-bayar");
  //   var array_bayar = $(this).attr("array-bayar");

  //   $.ajax({
  //     type: "POST",
  //     url: "../function/pembayaran.php",
  //     data: {
  //       data_bayar: data_bayar,
  //       array_bayar: array_bayar,
  //       scope: "add",
  //     },
  //     // dataType: "dataType",
  //     success: function (response) {
  //       if (response == 201) {
  //         alert("Data Berhasil Ditambahkan");
  //       } else if (response == 301) {
  //         alert("Produk gagal ditambahkan");
  //       } else if (response == "existing") {
  //         alert("produk udah ada");
  //       }
  //     },
  //   });
  // });
});

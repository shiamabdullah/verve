const searchProduct = $("#searchProduct");
const searchProductResult = $("#searchProductResult");

    searchProduct.keyup(function () {
        var product = searchProduct.val();
        console.log(product);
        $.ajax({
            type: "POST",
            url: "../view/SearchCheckCus.php",
            data: {
                s_product: product,
            },
            dataType: "text",

            success: function (data) {
                searchProductResult.html(data);
            },
        });
    });
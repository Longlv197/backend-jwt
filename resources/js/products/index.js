import Toastify from "toastify-js";

$(document).ready(function () {
    $("#description").summernote({
        height: 250,
        placeholder: "product description",
    });

    $(".btn-delete").click(function (e) {
        const id = $(this).attr("data-id");
        var url = "products/delete" + "/" + id;
        $("#deleteModal").modal("toggle");
        $(".btn-delete-product").on("click", function () {
            $.ajax({
                type: "delete",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                url: url,
                success: function (response) {
                    var idDelete = "product-" + response.id;
                    $("#" + idDelete).remove();
                    $("#deleteModal").modal("hide");
                },
            });
        });
    });
});

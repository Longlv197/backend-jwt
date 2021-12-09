$(document).ready(function () {
    $("#description").summernote({
        height: 250,
        placeholder: "product description",
    });
    $("#image").change(function () {
        $("#frames").html("");
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frames").append(
                '<img src="' +
                    window.URL.createObjectURL(this.files[i]) +
                    '" width="150px" height="100px" margin-right="10px"/>'
            );
        }
    });
    $("#image_list").change(function () {
        $("#frame_list").html("");
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frame_list").append(
                '<img src="' +
                    window.URL.createObjectURL(this.files[i]) +
                    '" width="150px" height="100px" margin-right="10px"/>'
            );
        }
    });

    //validate form
    $("#formAdd").validate({
        rules: {
            name: {
                required: true,
            },
            image: {
                required: true,
                extention: "jpg|jepg|png",
            },
            "image_list[]": {
                required: true,
                maxupload: 5,
                maxfilesize: 5,
            },
            description: {
                required: true,
                lettersonly: true,
            },
            category_id: {
                required: true,
            },
            unit_id: {
                required: true,
            },
            quantity: {
                required: true,
                number: true,
            },
            price: {
                number: true,
                required: true,
            },
            price_sale: {
                number: true,
                required: true,
            },
            "size[]": {
                required: true,
                maxlength: 2,
            },
            "favcolor[]": {
                required: true,
                maxlength: 2,
            },
            status: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Bắt buộc nhập tên",
            },
            image: {
                required: "Bắt buộc thêm ảnh",
                extention: "Chỉ chấp nhận file JPG, JEPG, PNG, GIF",
            },
            "image_list[]": {
                required: "Bắt buộc nhập ảnh",
                maxupload: "Số ảnh tối đa là 5",
                maxfilesize: "Kích thước ảnh tối đa là 5MB",
            },
            description: {
                required: "Bắt buộc nhập mô tả sản phẩm",
            },
            category_id: {
                required: "Bắt buộc thêm danh mục",
            },
            unit_id: {
                required: "Bắt buộc nhập đơn vị sản phẩm",
            },
            quantity: {
                required: "Bắt buộc nhập số lượng sản phẩm",
                number: "Bắt buộc nhập số",
            },
            price: {
                required: "Bắt buộc nhập giá gốc sản phẩm",
                number: "Bắt buộc nhập số",
            },
            price_sale: {
                required: "Bắt buộc nhập giá giảm giá của sản phẩm",
                number: "Bắt buộc nhập số",
            },
            "size[]": {
                required: "Bắt buộc phải check ít nhất 1 ô",
            },
            "favcolor[]": {
                required: "Bắt buộc phải check ít nhất 1 ô",
            },
            status: {
                required: "Bắt buộc thêm trạng thái sản phẩm    ",
            },
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            if (element.attr("name") == "favcolor[]")
                error.insertAfter(".color-group");
            else if (element.attr("name") == "size[]")
                error.insertAfter(".size-group");
            else if (element.attr("name") == "status")
                error.insertAfter(".status-group");
            else error.insertAfter(element);
        },
    });
});

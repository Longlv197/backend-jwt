$(document).ready(function () {
    $("#formCreateCategory").validate({
        ignore: "",
        rules: {
            name: {
                required: true,
                minLength: 10,
                maxLength: 50,
            },
            status: {
                required: true,
            },
            category_id: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Tên danh mục không được để thiếu",
                minLength: "Độ dài tên từ 10 - 50 ký tự",
                maxLength: "Độ dài tên từ 10 - 50 ký tự",
            },
            status: {
                required: "Phải chọn trạng thái của danh mục",
            },
            category_id: {
                required: "Trạng thái danh mục không được để thiếu",
            },
        },
        submitHandler: function (form, event) {
            if ($("#formCreateCategory").isvalid())
                $.ajax({
                    // url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function (response) {
                        $("#answers").html(response);
                    },
                });
            else event.preventDefault();
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "category_id")
                error.insertAfter(".form-category");
            else if (element.attr("name") == "status")
                error.insertAfter(".status-group");
            else error.insertAfter(element);
        },
    });
});

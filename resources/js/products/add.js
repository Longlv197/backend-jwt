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
                required: "B???t bu???c nh???p t??n",
            },
            image: {
                required: "B???t bu???c th??m ???nh",
                extention: "Ch??? ch???p nh???n file JPG, JEPG, PNG, GIF",
            },
            "image_list[]": {
                required: "B???t bu???c nh???p ???nh",
                maxupload: "S??? ???nh t???i ??a l?? 5",
                maxfilesize: "K??ch th?????c ???nh t???i ??a l?? 5MB",
            },
            description: {
                required: "B???t bu???c nh???p m?? t??? s???n ph???m",
            },
            category_id: {
                required: "B???t bu???c th??m danh m???c",
            },
            unit_id: {
                required: "B???t bu???c nh???p ????n v??? s???n ph???m",
            },
            quantity: {
                required: "B???t bu???c nh???p s??? l?????ng s???n ph???m",
                number: "B???t bu???c nh???p s???",
            },
            price: {
                required: "B???t bu???c nh???p gi?? g???c s???n ph???m",
                number: "B???t bu???c nh???p s???",
            },
            price_sale: {
                required: "B???t bu???c nh???p gi?? gi???m gi?? c???a s???n ph???m",
                number: "B???t bu???c nh???p s???",
            },
            "size[]": {
                required: "B???t bu???c ph???i check ??t nh???t 1 ??",
            },
            "favcolor[]": {
                required: "B???t bu???c ph???i check ??t nh???t 1 ??",
            },
            status: {
                required: "B???t bu???c th??m tr???ng th??i s???n ph???m    ",
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

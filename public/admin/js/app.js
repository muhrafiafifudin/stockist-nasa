$(function() {

    $("#categories_id").on("change", function () {
        let categories_id = $("#categories_id").val();

        $.ajax({
            type: "POST",
            url: "/get-sub-category",
            data: {
                categories_id: categories_id,
            },
            cache: false,
            success: function (msg) {
                $("#sub_categories_id").html(msg);
            },
            error: function (data) {
                console.log(data);
            },
        });
    });
})

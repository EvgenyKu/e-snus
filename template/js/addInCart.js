$(document).ready(function(){
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        var count = 1;
        if($("*").is("#count")) {
            count = $("#count").val();
        }
        $.post("/cart/addAjax/"+id+"/"+count, {}, function (data) {
            $("#cart-count").html("("+data+")");
            $('.bottom-right').notify({
                message: { text: 'Выбранный вами товар был добавлен в корзину ' }
            }).show();
        });
        return false;
    });
});
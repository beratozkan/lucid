$(document).ready(function () {
    $("#add_employe").click(function(e){
        e.preventDefault();
        datas = $("#form").serialize()
        console.log(datas)
    })
});
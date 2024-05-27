var $englishForm = $("#english-form");
var $arForm = $("#arabic-form");
var $englishLink = $("#english-link");
var $arLink = $("#arabic-link");

$englishLink.click(function () {
    $englishLink.toggleClass("bg-aqua-active");
    $englishForm.toggleClass("d-none");
    $arLink.toggleClass("bg-aqua-active");
    $arForm.toggleClass("d-none");
});

$arLink.click(function () {
    $englishLink.toggleClass("bg-aqua-active");
    $englishForm.toggleClass("d-none");
    $arLink.toggleClass("bg-aqua-active");
    $arForm.toggleClass("d-none");
});
//subadmins
$(function () {
    $("#subadmins").DataTable();
});

//sections
$(function () {
    $("#sections").DataTable();
});
//update section status

$(document).ready(function () {
    $(document).on("click",".updateSectionStatus", function () {
        var status = $(this).data("section-status");
        var section_id = $(this).attr("section_id");
        alert(section_id);
        alert(status);
        $.ajax({
            type: "POST",
            url: "/admin/sections/update-section",
            '_token': '{{ csrf_token() }}',
            data: { section_id: section_id, status: status },
            success: function (resp) {
                if (resp["status"] == 0)
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-off' status='active'></i>"
                    );
                else 
                    $("#section-" + section_id).html(
                        "<i class='fas fa-toggle-on' status='inactive'></i>"
                    );
            },
            error: function () {
                alert("error");
            },
        });
    });
});

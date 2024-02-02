// Inside custom.js
$(document).ready(function () {
    // Open Modal
    $(".open-modal-btn").click(function () {
        var modalId = $(this).data("modal-id");
        $("#" + modalId).fadeIn();
    });

    // Close Modal
    $(".close-modal-btn").click(function () {
        $(this).closest(".modal").fadeOut();
    });
});
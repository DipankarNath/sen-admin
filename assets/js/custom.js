$(function () {
    // Floating labels
    // ------------------------------

    // Variables
    var onClass = "on";
    var showClass = "is-visible";


    // Setup
    $("input:not(.token-input):not(.bootstrap-tagsinput > input), textarea, select").on("checkval change", function () {

        // Define label
        var label = $(this).parents('.form-group-material').children(".control-label");

        // Toggle label
        if (this.value !== "") {
            label.addClass(showClass);
        }
        else {
            label.removeClass(showClass).addClass('animate');
        }

    }).on("keyup", function () {
        $(this).trigger("checkval");
    }).trigger("checkval").trigger('change');


    // Remove animation on page load
    $(window).on('load', function() {
        $(".form-group-material").children('.control-label.is-visible').removeClass('animate');
    });
    // ------------------------------
    // Floating labels END
// DROPZONE
    // Defaults
    Dropzone.autoDiscover = false;
    // Multiple files
    $("#dropzone_multiple").dropzone({
        paramName: "userFiles", // The name that will be used to transfer the file
        dictDefaultMessage: 'Drop files to upload <span>or CLICK</span>',
        maxFilesize: 2, // MB
        acceptedFiles: 'image/*',
        addRemoveLinks: true,
        maxFiles: 12
    });
// DROPZONE END









});
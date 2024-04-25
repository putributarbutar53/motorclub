<div class="modal-header">
    <h5 class="modal-title">
        tes
    </h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body text-left">
    tes
</div>
<script>
    utils.$document.ready(function() {
        var tinymces = $('.tinymce');

        if (tinymces.length) {
            window.tinymce.init({
                selector: '.tinymce',
                height: '50vh',
                menubar: false,
                skin: utils.settings.tinymce.theme,
                content_style: ".mce-content-body { color: " + utils.grays.black + " }",
                mobile: {
                    theme: 'mobile',
                    toolbar: ['undo', 'bold']
                },
                statusbar: false,
                plugins: 'link,image,lists,table,media',
                toolbar: 'styleselect | bold italic link bullist numlist image blockquote table media undo redo'
            });
        }
    });
    utils.$document.ready(function() {
        var datetimepicker = $('.datetimepicker');
        datetimepicker.length && datetimepicker.each(function(index, value) {
            var $this = $(value);
            var options = $.extend({
                dateFormat: 'd/m/y',
                disableMobile: true
            }, $this.data('options'));
            $this.flatpickr(options);
        });
    });

    utils.$document.ready(function() {
        var select2 = $('.selectpicker');
        select2.length && select2.each(function(index, value) {
            var $this = $(value);
            var options = $.extend({
                theme: 'bootstrap4'
            }, $this.data('options'));
            $this.select2(options);
        });
    });
    utils.$document.ready(function() {
        $('.custom-file-input').on('change', function(e) {
            var $this = $(e.currentTarget);
            var fileName = $this.val().split('\\').pop();
            $this.next('.custom-file-label').addClass('selected').html(fileName);
        });
    });

    $(document).ready(function() {

        $("#title").on('input', function() {
            var titleValue = $(this).val().toLowerCase();
            var slugValue = titleValue.replace(/\s+/g, '-');
            $("#slug").val(slugValue);
        });
        $('#customFile').on('change', function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#link_picture').attr('href', e.target.result);
                    $('#picture').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        })
        $('#add_submit').submit(function(e) {
            e.preventDefault();
            tinyMCE.triggerSave();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                type: 'POST',
                url: "<?= site_url('admin2011/artikel/submitdata') ?>",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#add_submit input[type="text"]').val('');
                    $('#add_submit textarea').val('');
                    $('#add-xl').modal('hide');
                    dataindex();
                    showToast("success", response.message);
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    showToastError('Error', response);
                }
            });
        });
    });
    $('#add').on('hidden.bs.modal', function() {
        dataindex();
        $('#report_edit').html('');
    });
</script>
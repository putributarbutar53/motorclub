<?php $this->extend('admin/layout/main') ?>
<?php $this->section('content') ?>
<div class="feature-section">
    <div class="container">
        <h2>Artikel</h2>
        <div class="container mt-5">
            <div class="mb-3">
                <button class="btn btn-success" onclick="adddata()">Tambah Artikel</button>
            </div>
            <table id="table_index" width="100%" class="table mb-0 table-striped table-dashboard data-table border-bottom border-200">
                <thead class="bg-200">
                    <tr>
                        <th><b>No</b></th>
                        <th><b>Title</b></th>
                        <th><b>Content</b></th>
                        <th data-orderable="false"><b>#</b></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php $this->endsection() ?>
<?php $this->section('script') ?>
<script>
    function dataindex() {
        $('#table_index').DataTable({
            'processing': true,
            'serverSide': true,
            'searching': false,
            'scrollX': true,
            'serverMethod': 'post',
            'searchDelay': '350',
            'responsive': false,
            'lengthChange': false,
            'autoWidth': true,
            'sWrapper': 'falcon-data-table-wrapper',

            'ajax': {
                'url': '<?= site_url('admin/artikel/loaddata') ?>',
                'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
            'columns': [{
                    data: 'id',
                },
                {
                    data: 'title',
                },
                {
                    data: 'content',
                },
                {
                    data: 'navButton',
                    render: function(data, type, row) {
                        return '<button onclick="editdata(' + row.id + ')" class="btn btn-sm btn-falcon-warning mb-1" title="Edit Data"><i class="fas fa-pen-square"></i></button>&nbsp;<button onclick="deletedata(' + row.id + ')" class="btn btn-sm btn-falcon-danger mb-1" title="Hapus Data"><i class="fas fa-trash-alt"></i></button>';
                    }
                }
            ],

            // 'dom':'Bfrtip',
            // 'buttons':[
            //   'copy','csv','excel','pdf','print'
            // ],	
            'order': [
                [0, 'asc']
            ],
            'language': {
                'emptyTable': 'Belum ada data'
            },
            'destroy': true,
        });
    }

    $(document).ready(function() {
        $('#table_index').DataTable().columns.adjust();
        setTimeout(function() {
            dataindex();
        }, 100);
    });

    function deletedata(iddata) {
        $('#alert_modal').modal('show');
        $("#click_yes").off("click").on("click", function() {
            $.ajax({
                type: 'DELETE',
                url: "<?= site_url('admin/artikel/delete') ?>/" + iddata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#alert_modal').modal('hide');
                    // Tanggapan sukses
                    showToast('success', response.message);
                    // Refresh tabel setelah penghapusan data
                    dataindex();
                },
                error: function(xhr, status, error) {
                    // Tanggapan error
                    showToastError(error, xhr.responseJSON);
                }
            });
        });
    }

    function editdata(iddata) {
        $.get("<?= site_url('admin/artikel/edit') ?>/" + iddata, function(data, status) {
            $("#editor_add_xl").html(data);
            $('#add-xl').modal('toggle');
        });
    }

    function adddata() {
        $('#editor_add_xl').load('<?= site_url('admin/artikel/add') ?>', function() {
            $('#add-xl').modal({
                show: true
            });
        });
    }
</script>
<?php $this->endsection() ?>
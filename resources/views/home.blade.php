<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Streamlined</title>
</head>
<body>
    <div class="container my-5">
        <div class="col-lg-8">
            <div class="row">
                <h3 class="mb-3">Laravel plyaground: jQuery Without Reload</h3>
                <button class="btn btn-sm btn-primary" onclick="create()">+ Tambah Product</button>
                <div id="read" class="mt-3">

                </div>
            </div>
        </div>
    </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="page" class="p-2">

          </div>
        </div>
      </div>
    </div>
  </div>
  
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>

    $(document).ready(function() {
        read()
    });

    // Read data
    function read()
    {
        $.get("{{ url('read') }}", {}, function (data, status) {
            $("#read").html(data);   
        });
    }

    // menampilkan modal tambah
    function create()
    {
        $.get("{{ url('create') }}", {}, function (data, status) {
            $('#exampleModalLabel').html('Tambah Product');
            $('#exampleModal').modal('show');
            $('#page').html(data);   
        });
    }

    // tambah data
    function store()
    {
        var name = $('#name').val();
        $.ajax({
            type: "get",
            url: "{{ ('store') }}",
            data: "name=" + name,
            success: function(data) {
                $(".btn-close").click();
                read();
            }
        });
    }

    // show data modal
    function show(id)
    {
        $.get("{{ url('show') }}/" + id, {}, function (data, status) {
            $('#exampleModalLabel').html('Edit Product');
            $('#page').html(data);   
            $('#exampleModal').modal('show');
        });
    }

    function update(id)
    {
        var name = $('#name').val();
        $.ajax({
            type: "get",
            url: "{{ ('update') }}/" + id,
            data: "name=" + name,
            success: function(data) {
                $(".btn-close").click();
                read();
            }
        });
    }

    function destroy(id)
    {
        confirm('Apakah yakin hapus data ?')
        var name = $('#name').val();
        $.ajax({
            type: "get",
            url: "{{ ('destroy') }}/" + id,
            data: "name=" + name,
            success: function(data) {
                $(".btn-close").click();
                read();
            }
        });
    }
</script>
</body>
</html>
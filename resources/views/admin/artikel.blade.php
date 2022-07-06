@extends('layoutsAdmin.index')

@section('content')
    <div class="content">

         <!-- MULAI TABLE -->
                
                     <div class="col-lg-12 col-sm-12 hero-feature" >
                        <div class="table-responsive">

                        <table class="table table-striped table-bordered table-sm" id="table_artikel" >
                        <button class="btn btn-primary" id="button-add" type="submit" style="float:right;margin-right:50px;height:30px;padding-bottom:25px;margin-top:15px">Add New</button>
                        <thead style=" background-image: linear-gradient(to bottom right, ##B0C4DE, #f7f7f7);" >
                            <tr>
                                <th>Image</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        </table>

                        </div>
                     </div> 
        <!-- AKHIR TABLE -->
        <!-- MULAI MODAL FORM TAMBAH/EDIT--> 
        <div class="modal fade" id="tambah-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-judul"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-tambah-edit" method="post" name="form-tambah-edit" enctype="multipart/form-data">
                         {{ csrf_field() }} {{ method_field('POST') }}
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label >Judul:</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Konten:</label>
                                <input type="text" class="form-control" id="konten" name="konten">
                            </div>
                            <div class="form-group">
                                <label >Image: </label>
                                <input type="file" class="form-control" id="image" name="image" onchange="loadFile(event)"  ><br>         
                                <input type='button' class='btn btn-info' value='Upload' id="image">
                                <img id="output" width="200" />
                            </div>
                            <div class="form-group">
                                <label>Kategori:</label>
                                 {!! Form::select('kategori_id', $category, null, ['class' => 'form-control select', 'placeholder' => '-- Choose Category --', 'id' => 'kategori_id','name' => 'kategori_id' ,'required']) !!}
                                <span class="help-block with-errors"></span>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="tombol-simpan">Simpan</button>
                    </div>
                    </div>
            </div>
        </div>
        <!-- AKHIR MODAL -->

        <!-- MULAI MODAL KONFIRMASI DELETE-->
            <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">PERHATIAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Jika menghapus DATA ARTIKEL maka</b></p>
                            <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                                Data</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- AKHIR MODAL -->
       
    </div>

      @section('javascript')
        <script>
          var authUser = {!! App\Models\User::where('id', auth()->id())->first(); !!};
          console.log(authUser.api_token);
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           
       
        });
         $('#button-add').click(function () {
            $('#form-tambah-edit').trigger("reset"); 
            $('#modal-judul').html("Tambah Artikel Baru"); 
            $('#tambah-edit-modal').modal('show');
        });

         $('#tombol-simpan').click(function () {
            console.log("kk");
           if ($("#form-tambah-edit").length > 0) {
                console.log("jjj");
                var actionType = $('#tombol-simpan').val();
                        $('#tombol-simpan').html('Sending..');
                        $.ajax({
                           
                            headers : {'Authorization' : 'Bearer '+authUser.api_token},
                            url: "/api/v1/admin/store", 
                            type: "POST", 
                            data: new FormData($("#tambah-edit-modal form")[0]),
                            contentType: false,
                            processData: false, 
                            success: function (data) { 
                                $('#form-tambah-edit').trigger("reset"); 
                                $('#tambah-edit-modal').modal('hide');
                                $('#tombol-simpan').html('Simpan'); 
                                var oTable = $('#table_artikel').dataTable(); 
                                oTable.fnDraw(false); 
                                
                            },
                            error: function (data) { 
                                console.log('Error:', data);
                                console.log($('#form-tambah-edit')
                                .serialize());
                                $('#tombol-simpan').html('Simpan');
                            }
                        });
           }
        });
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        $(document).ready(function () {
            $('#table_artikel').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
               
                ajax: {
                    
                    headers : {'Authorization' : 'Bearer '+authUser.api_token},
                    url: "/api/v1/upload/artikel",
                    type: 'GET',
                },
                columns: [
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    
                    {
                        data: 'konten',
                        name: 'konten'
                    },
                    {
                        data: 'kategori',
                        name: 'kategori'
                    },
                    
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });

        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            console.log("hty");
             $.ajax({
                url: "/edit/"+data_id+"",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-judul').html("Edit Post");
                    $('#tombol-simpan').val("edit-post");
                    $('#tambah-edit-modal').modal('show');
                                
                    $('#id').val(data.id);
                    $('#judul').val(data.judul);
                    $('#konten').val(data.konten);
                  
                    console.log(data.images);
                    console.log(data.id_kategori);
                    $('#kategori_id').val(data.id_kategori);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
           
        });

        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });

        $('#tombol-hapus').click(function () {
            $.ajax({
                headers : {'Authorization' : 'Bearer '+authUser.api_token},
                url: "/admin/delete/"+dataId, 
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); 
                },
                success: function (data) { 
                    $('#konfirmasi-modal').modal('hide'); 
                       
                    var oTable = $('#table_artikel').dataTable(); 
                    oTable.fnDraw(false); 
                    
                }
            })
        });

            
        </script>
      @stop
    
@endsection



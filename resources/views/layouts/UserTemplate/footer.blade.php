
<!-- Customer Review -->

<!-- #END# Customer Review -->

</section>
<!-- Plugins Js -->
<script src="{{asset('raja/js/app.min.js')}}"></script>
<script src="{{asset('raja/js/chart.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('raja/js/admin.js')}}"></script>
<script src="{{asset('raja/js/pages/index.js')}}"></script>
<script src="{{asset('raja/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('raja/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('raja/js/pages/medias/carousel.js')}}"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.tiny.cloud/1/4j9bq6sx1bfvu1ttvrzaiuyh0vum4x410pyov0w8w46sv6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.ckeditor',

        image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
        ],
        height: 200,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

        image_title: true,
        automatic_uploads: true,
        images_upload_url: '{{ url("/upload") }}',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blog' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });


        $(document).ready(function () {
        $('.Suggestion').css('display','none');
        $('.Request').css('display','none');
        $(document).on('change','#erp_request_type',function(){
        if($(this).val() == 'Suggestion'){
        $('.Suggestion').css('display','block');
        $('.Request').css('display','none');
    }
        else if($(this).val() == 'Request'){
        $('.Request').css('display','block');
        $('.Suggestion').css('display','none');
    }else{
        $('.Suggestion').css('display','none');
        $('.Request').css('display','none');
    }
    });
    });
</script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>

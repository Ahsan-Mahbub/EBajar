
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/colorpicker.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/charts/sparkline.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/uniform.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/inputmask.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/autosize.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/inputlimit.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/listbox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/multiselect.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/validate.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/tags.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/switch.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/uploader/plupload.full.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/uploader/plupload.queue.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/wysihtml5/wysihtml5.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/forms/wysihtml5/toolbar.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/daterangepicker.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/fancybox.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/moment.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/jgrowl.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/datatables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/fullcalendar.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/plugins/interface/timepicker.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/application.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/sweetalert.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('backend_assets/js/toastr.min.js')); ?>"></script>
<script>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.warning(<?php echo e($error); ?>);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type')); ?>";
    switch(type){
        case 'info':
            toastr.info(<?php echo e(Session::get('message')); ?>);
            break;

        case 'warning':
            toastr.warning(<?php echo e(Session::get('message')); ?>);
            break;

        case 'success':
            toastr.success(<?php echo e(Session::get('message')); ?>);
            break;

        case 'error':
            toastr.error(<?php echo e(Session::get('message')); ?>);
            break;
    }
    <?php endif; ?>
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previmage')
        .attr('src', e.target.result)
        .width(400)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script src="<?php echo e(asset('backend_assets/dist/plugins/dropify/dropify.min.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH C:\Users\Tanvir Hossen\Desktop\EBajara\resources\views/Backend/layouts/js.blade.php ENDPATH**/ ?>
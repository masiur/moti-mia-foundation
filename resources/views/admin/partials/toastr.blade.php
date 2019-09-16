@if($success = isset($success)?$success:Session::get('success'))
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    showMethod: 'slideDown',
                    timeOut: 3000
                };
                toastr.success('', "<?php echo $success ?>");

            }, 100);

        });
    </script>
@endif

@if($error =isset($error)?$error: Session::get('error'))
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    showMethod: 'slideDown',
                    timeOut: 3000
                };
                toastr.error('', "<?php echo $error ?>");

            }, 100);

        });
    </script>
@endif

@if($warning =isset($warning)?$warning: Session::get('warning'))
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    showMethod: 'slideDown',
                    timeOut: 3000
                };
                toastr.warning('', "<?php echo $warning ?>");

            }, 100);

        });
    </script>
@endif

@if($info =isset($info)?$info: Session::get('info'))
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: false,
                    positionClass: "toast-top-right",
                    showMethod: 'slideDown',
                    timeOut: 3000
                };
                toastr.info('', "<?php echo $info ?>");

            }, 100);

        });
    </script>
@endif

@if (!$errors->isEmpty())
    @foreach($errors->all() as $error)
        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: false,
                        positionClass: "toast-top-right",
                        showMethod: 'slideDown',
                        timeOut: 3000
                    };
                    toastr.error('', "<?php echo $error ?>");

                }, 100);

            });
        </script>
    @endforeach
@endif

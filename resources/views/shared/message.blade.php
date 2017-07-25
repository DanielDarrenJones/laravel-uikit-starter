@if (session('message'))
    <script type="text/javascript">
    UIkit.notification({
        message: '{{ session('message') }}',
        status: 'primary',
        pos: 'bottom-left',
        timeout: 5000
        });
    </script>
@endif

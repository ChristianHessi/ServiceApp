@if (session()->has("success"))
    <script> toastr.success("{{ session()->get('success') }}") </script>
@endif

@if (session()->has("warning"))
    <script> toastr.warning("{{ session()->get('warning') }}") </script>
@endif

@if (session()->has("error"))
    <script> toastr.error("{{ session()->get('error') }}") </script>
@endif

@if(session()->has('flashalert'))

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@endsection



@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    swal({
        title: "",
        text: "{{{session()->get('flashalert.message')}}}",
        type: "{{{session()->get('flashalert.level')}}}",
        timer: {{{config('flashalert.hide_timer')}}},
        showConfirmButton: {{{config('flashalert.show_confirmation_button')}}}
    });
</script>
@endsection

@endif
function postMessage(){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: "{{ url('/logout') }}",
        data: {
          _token: <?php echo csrf_token() ?>, // this is optional cause you already added it header
        },
        success:function(event){
            $("#msg").html(data.msg);
            $('logout-form').submit();
        }
    });
}    

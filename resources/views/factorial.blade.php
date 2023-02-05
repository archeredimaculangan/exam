@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Factorial') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label for="number" class="col-md-2 col-form-label text-md-end">{{ __('Enter Number') }}</label>

                        <div class="col-md-8">
                            <input id="number" type="text" name="number" class="numberOnly form-control">
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" id="compute">
                                {{ __('Calculate') }}
                            </button>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="result" class="col-md-2 col-form-label text-md-end">{{ __('Result') }}</label>

                        <div class="col-md-8">
                            <input id="result" type="text" name="result" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.numberOnly').keypress(function(event){
        if(event.which !=8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
        }
    });

    $('#compute').click(function(){
        var number = result = $('#number').val();

        if(number > 0)
        {
            do {
                number--;
                result = result * number;

                if(number == 1)
                    $('#result').val(result);
            }
            while (number != 0);  

        }
    });

</script>
@endsection

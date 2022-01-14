@if(!empty($errors->first('name')))
    <p class="error_message">{{ $errors->first('name') }}</p>
@endif
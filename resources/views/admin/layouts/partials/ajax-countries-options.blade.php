<option selected hidden>Select Country</option>
@if(!empty($countries))
    @foreach($countries as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
@endif
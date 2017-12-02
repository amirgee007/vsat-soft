<option>Select Asset</option>
@if(!empty($assets))
    @foreach($assets as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
@endif
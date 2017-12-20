@if(!empty($assets))
    @foreach($assets as $key => $value)
        <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
    @endforeach
@endif
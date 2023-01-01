<div class="form-group">
    <label for="{{$field}}">{{$label}}</label>
    <input type="{{$type}}" placeholder="{{ $placeholder ?? '' }}" class="form-control" id="{{$field}}" name="{{$field}}" 
    
    @isset($value)
    value="{{old($field) ? old($field) : $value}}"
    @else
    value="{{old($field)}}"
    @endisset    
    >
    
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
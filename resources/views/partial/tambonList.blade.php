<option selected>กรุณาเลือกตำบล...</option>
@foreach($tambon as $v)
    <option value="{{ $v->tambon_code }}">{{ $v->tambon_name }}</option>
    @endforeach
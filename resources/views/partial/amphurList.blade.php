<option selected>กรุณาเลือกอำเภอ...</option>
@foreach($amphur as $v)
    <option value="{{ $v->amphur_code }}">{{ $v->amphur_name }}</option>
    @endforeach
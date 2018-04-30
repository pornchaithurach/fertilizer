<option selected>กรุณาเลือกชนิดพืช...</option>
@foreach($plant as $v)
    <option value="{{ $v->detail_code }}">{{ $v->detail_name }}</option>
    @endforeach
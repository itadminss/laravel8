<div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
    <label for="student_id" class="control-label">{{ 'Student Id' }}</label>
    <input class="form-control" name="student_id" type="number" id="student_id" value="{{ isset($healcheck->student_id) ? $healcheck->student_id : ''}}" >
    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($healcheck->date) ? $healcheck->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('week') ? 'has-error' : ''}}">
    <label for="week" class="control-label">{{ 'Week' }}</label>
    <input class="form-control" name="week" type="text" id="week" value="{{ isset($healcheck->week) ? $healcheck->week : ''}}" >
    {!! $errors->first('week', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('result') ? 'has-error' : ''}}">
    <label for="result" class="control-label">{{ 'Result' }}</label>
    <input class="form-control" name="result" type="text" id="result" value="{{ isset($healcheck->result) ? $healcheck->result : ''}}" >
    {!! $errors->first('result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($healcheck->detail) ? $healcheck->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
    <label for="student_id" class="control-label">{{ 'Student Id' }}</label>
    <input class="form-control" name="student_id" type="number" id="student_id" value="{{ isset($inspect->student_id) ? $inspect->student_id : ''}}" >
    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($inspect->name) ? $inspect->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position_id') ? 'has-error' : ''}}">
    <label for="position_id" class="control-label">{{ 'Position Id' }}</label>
    <input class="form-control" name="position_id" type="number" id="position_id" value="{{ isset($inspect->position_id) ? $inspect->position_id : ''}}" >
    {!! $errors->first('position_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('result') ? 'has-error' : ''}}">
    <label for="result" class="control-label">{{ 'Result' }}</label>
    <input class="form-control" name="result" type="text" id="result" value="{{ isset($inspect->result) ? $inspect->result : ''}}" >
    {!! $errors->first('result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($inspect->detail) ? $inspect->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

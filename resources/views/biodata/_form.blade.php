{!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Nama') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                            {!! Form::label('no_hp', 'No HP') !!}
                            {!! Form::text('no_hp', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('no_hp', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                            {!! Form::label('tgl_lahir', 'Tanggal Lahir') !!}
                            {!! Form::text('tgl_lahir', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'E-Mail') !!}
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                   
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class'=>'btn btn-primary'])!!}
                            </div>
                        </div>

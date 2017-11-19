@extends('templates.main')

@section('heading')
Donate
@endsection

@section('subheading')
Help Us
@endsection

@section('content')
{!! Form::open() !!}
{!! Form::hidden('test', 'testing') !!}
{!! Form::label('amount','How much would you like to donate? ') !!}
<div class="row">
  <div class="col-md-5">
    {!! Form::text('amount-us', null, ['class'=>'form-control','id'=>'amt']) !!}
  </div>
  <div class="col-md-5">
    <div id="stripe"></div>
  </div>
</div>
{!! Form::close() !!}


@endsection

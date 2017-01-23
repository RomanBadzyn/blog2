@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <form action="/store" method="post">

                    
                    <div class="panel-heading">Назва</div>
                    <div class="panel-heading"><input type="text" name="title"></div>

                    <div class="panel-heading">Текст</div>
                    <div class="panel-body">
                        <textarea name="content" cols="50"></textarea>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel-heading"><input type="submit" value="Зберегти"></div>

                </form>
                </div>
            </div>
    </div>
</div>
@endsection

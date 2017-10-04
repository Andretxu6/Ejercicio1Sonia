@extends('master')

@section('sidebar')
<!--    @parent-->

    <div class="content">
        <form  action="/formAnswer" method="post" class="form-horizontal well formulario">
            {!! csrf_field() !!}
            <fieldset>
                <legend>Form!</legend>
                <div class="form-group">
                    <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellido" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edad" class="col-lg-2 control-label">Edad</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection

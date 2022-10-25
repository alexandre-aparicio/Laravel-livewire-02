@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="cart m-5" >
            <div class="card-header">
                <h3>Añadir Categoría
                    <a href="{{ url('admin/categoria') }}" class="btn btn-primary float-end">Atras</a>
                </h3>
            </div>
            <div class="cart-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    
                        <div class="col-md-6">
                            <label for="slug">Slug:</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="description">Descripción:</label>
                        <textarea  name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <label for="description">Status:</label><br/>
                        <div class="col-md-6 mb-3">
                            <input type="checkbox" name="status" >
                        </div>
                        <label for="description">Status:</label><br/>
                        <div class="col-md-6 mb-3">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>

                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>     
          
@endsection
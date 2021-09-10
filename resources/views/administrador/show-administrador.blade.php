<div class="card-body">
                        
    <div class="form-group">
        <strong>Nombre:</strong>
        {{ Session::get('admin')->nombre}}
    </div>
    <div class="form-group">
        <strong>Email:</strong>
        {{ Session::get('admin')->email }}
    </div>

</div>
<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-boxes"></i>
                    Modulo Productos
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="products" @if (kvfj($user->permissions, 'products')) checked @endif>
                    <label for="products">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="products_add" @if (kvfj($user->permissions, 'products_add')) checked @endif>
                    <label for="products_add">
                        Puede agregar productos.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="products_edit" @if (kvfj($user->permissions, 'products_edit')) checked @endif>
                    <label for="products_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="products_show" @if (kvfj($user->permissions, 'products_show')) checked @endif>
                    <label for="products_show">
                        Puede ver.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="products_delete" @if (kvfj($user->permissions, 'products_delete')) checked @endif>
                    <label for="products_delete">
                        Puede eliminar.
                    </label>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-globe"></i>
                    Modulo Subclasificaciones
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="subcategories" @if (kvfj($user->permissions, 'subcategories')) checked @endif>
                    <label for="subcategories">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="subcategories_add" @if (kvfj($user->permissions, 'subcategories_add')) checked @endif>
                    <label for="subcategories_add">
                        Puede agregar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="subcategories_edit" @if (kvfj($user->permissions, 'subcategories_edit')) checked @endif>
                    <label for="subcategories_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="subcategories_delete" @if (kvfj($user->permissions, 'subcategories_delete')) checked @endif>
                    <label for="subcategories_delete">
                        Puede elimiar.
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>

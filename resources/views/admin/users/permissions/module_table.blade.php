<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-utensils"></i>
                    Modulo Mesas
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="tables" @if (kvfj($user->permissions, 'tables')) checked @endif>
                    <label for="tables">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tables_add" @if (kvfj($user->permissions, 'tables_add')) checked @endif>
                    <label for="tables_add">
                        Puede agregar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tables_edit" @if (kvfj($user->permissions, 'tables_edit')) checked @endif>
                    <label for="tables_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tables_delete" @if (kvfj($user->permissions, 'tables_delete')) checked @endif>
                    <label for="tables_delete">
                        Puede elimiar.
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>

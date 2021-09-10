<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class=" fas fa-store-alt"></i>
                    Modulo Sedes
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="branchoffices" @if (kvfj($user->permissions, 'branchoffices')) checked @endif>
                    <label for="branchoffices">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="branchoffices_add" @if (kvfj($user->permissions, 'branchoffices_add')) checked @endif>
                    <label for="branchoffices_add">
                        Puede agregar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="branchoffices_edit" @if (kvfj($user->permissions, 'branchoffices_edit')) checked @endif>
                    <label for="branchoffices_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="branchoffices_delete" @if (kvfj($user->permissions, 'branchoffices_delete')) checked @endif>
                    <label for="branchoffices_delete">
                        Puede elimiar.
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>

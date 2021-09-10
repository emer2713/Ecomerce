<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-tags"></i>
                    Modulo tags
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="tags" @if (kvfj($user->permissions, 'tags')) checked @endif>
                    <label for="tags">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tags_add" @if (kvfj($user->permissions, 'tags_add')) checked @endif>
                    <label for="tags_add">
                        Puede agregar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tags_edit" @if (kvfj($user->permissions, 'tags_edit')) checked @endif>
                    <label for="tags_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="tags_delete" @if (kvfj($user->permissions, 'tags_delete')) checked @endif>
                    <label for="tags_delete">
                        Puede elimiar.
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>

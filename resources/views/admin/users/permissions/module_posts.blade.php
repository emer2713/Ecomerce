<div class="col-md-3 col-6 d-flex">
    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fab fa-uikit"></i>
                    Modulo posts
                </h2>
            </div>

            <div class="inside">
                <div class="form-check">
                    <input type="checkbox" value="true" name="posts" @if (kvfj($user->permissions, 'posts')) checked @endif>
                    <label for="posts">
                        Puede ver el listado.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="posts_add" @if (kvfj($user->permissions, 'posts_add')) checked @endif>
                    <label for="posts_add">
                        Puede agregar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="posts_edit" @if (kvfj($user->permissions, 'posts_edit')) checked @endif>
                    <label for="posts_edit">
                        Puede editar.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="posts_show" @if (kvfj($user->permissions, 'posts_show')) checked @endif>
                    <label for="posts_show">
                        Puede ver.
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="true" name="posts_delete" @if (kvfj($user->permissions, 'posts_delete')) checked @endif>
                    <label for="posts_delete">
                        Puede elimiar.
                    </label>
                </div>

            </div>

        </div>
    </div>
</div>

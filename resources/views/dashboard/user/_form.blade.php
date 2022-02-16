@csrf

<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$user->name) }}">
</div>

<div class="form-group">
    <label for="surname">Apellido</label>
    <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname',$user->surname) }}">
</div>

<div class="form-group">
    <label for="email">Correo</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$user->email) }}">
</div>

@if ($pass)
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input class="form-control" type="password" name="password" id="password" value="{{ old('password',$user->password) }}">
    </div>
@endif

<div class="row">
    <label for="roles" class="col-sm-2 col-form-label">Roles</label>
    <div class="col-sm-7">
        <div class="form-group">
            <div class="tab-content">
                <div class="tab-pane active">
                    <table class="table">
                        <tbody>
                            @foreach ($roles as $id => $role)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="roles[]"
                                                value="{{ $id }}"
                                            >
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    {{ $role }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="input-group">
    <select class="form-select" id="team_id" name="team_id" aria-label="Seleccionar equipo">
        <option selected>Seleccionar equipo...</option>
        <option value="1">Equipo de desarrollo</option>
        <option value="2">Equipo de markenting</option>
        <option value="3">Usuario común</option>
    </select>
    <button class="btn btn-outline-secondary" type="button">Button</button>
</div>
<input type="submit" value="Enviar">



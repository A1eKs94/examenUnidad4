<!-- Modal para Editar Usuario -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="editUserName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editUserName" name="name" required>
                    </div>

                    <!-- Campo de Apellido -->
                    <div class="mb-3">
                        <label for="editUserSurname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="editUserSurname" name="surname" required>
                    </div>

                    <!-- Campo de Correo -->
                    <div class="mb-3">
                        <label for="editUserEmail" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="editUserEmail" name="email" required>
                    </div>

                    <!-- Campo de Teléfono -->
                    <div class="mb-3">
                        <label for="editUserPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="editUserPhone" name="phone" required>
                    </div>

                    <!-- Campo de Nivel (aqui no ponemos nada solo hacemos get de los niveles) -->
                    <div class="mb-3">
                        <label for="editUserLevel" class="form-label">Nivel</label>
                        <select class="form-control" id="editUserLevel" name="level" disabled>
                            <option value="VIP">VIP</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>

                    <!-- Cargar Imagen -->
                    <div class="row mb-3 justify-content-center">
                        <label class="form-label">Ingrese su imagen</label>
                        <div class="col-md-6 d-flex flex-column align-items-center">
                            <div>
                                <img src="../../assets/images/user-default.jpg" alt="Imagen de usuario" style="width: 250px; height: auto; object-fit: contain;" />
                                <label class="btn btn-outline-secondary w-100 text-center mt-2" for="flupld">
                                    <i class="ti ti-upload me-2"></i>Cargar
                                </label>
                                <input type="file" id="flupld" class="d-none" name="cover" />
                            </div>
                        </div>
                    </div>


                    <!-- id -->
                    <input type="hidden" id="editUserId" name="id">

                    <!-- Botón Guardar Cambios -->
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
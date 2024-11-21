<div class="modal fade" id="editClientModal" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editClientForm" action="<?php echo BASE_PATH; ?>api" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="updateClient">
                    <input type="hidden" name="redirect_url" value="Clients/list/">
                    <input type="hidden" name="token" value="<?php echo  $token; ?>">
                    <input type="hidden" id="editClientId" name="id">


                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="editClientName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editClientName" name="name" required>
                    </div>

                    <!-- Campo de Apellido -->
                    <div class="mb-3">
                        <label for="editClientSurname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="editLastName" name="lastname" required>
                    </div>

                    <!-- Campo de Correo -->
                    <div class="mb-3">
                        <label for="editClientEmail" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="editClientEmail" name="email" required>
                    </div>

                    <!-- Campo de Teléfono -->
                    <div class="mb-3">
                        <label for="editClientPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="editClientPhone" name="phone_number" required>
                    </div>

                    <!-- Campo de Nivel (aqui no ponemos nada solo hacemos get de los niveles) -->
                    <div class="mb-3">
                        <label for="editClientLevel" class="form-label">Nivel</label>
                        <select class="form-control" id="editClientLevel" name="level" disabled>
                            <option value="VIP">VIP</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>

                    <!-- Botón Guardar Cambios -->
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
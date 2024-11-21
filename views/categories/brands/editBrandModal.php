<!-- Modal para Editar Etiqueta -->
<div class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="editBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBrandModalLabel">Editar Etiqueta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="<?= BASE_PATH ?>brands/edit/" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="editBrandId" name="id">

                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editName" name="name" placeholder="Ingrese el nombre de la etiqueta" required>
                    </div>

                    <!-- Campo de Descripción -->
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Descripción</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3" placeholder="Ingrese una breve descripción" required></textarea>
                    </div>

                    <!-- Campo de Slug -->
                    <div class="mb-3">
                        <label for="editSlug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="editSlug" name="slug" placeholder="Ingrese el slug de la etiqueta" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar Etiqueta</button>
                </div>
            </form>
        </div>
    </div>
</div>
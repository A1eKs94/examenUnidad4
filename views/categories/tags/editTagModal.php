<!-- Modal para Editar Etiqueta -->
<div class="modal fade" id="editTagModal" tabindex="-1" aria-labelledby="editTagModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTagModalLabel">Editar Etiqueta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="<?= BASE_PATH ?>categorias/etiquetas/" method="POST">
                <div class="modal-body">
                    <!-- Campo de ID (oculto) -->
                    <input type="hidden" id="editTagId" name="id">

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#editTagModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);  

            var tagId = button.data('id');
            var tagName = button.data('name');
            var tagDescription = button.data('description');
            var tagSlug = button.data('slug');



            var modal = $(this);
            modal.find('#editId').val(tagId);  
            modal.find('#editName').val(tagName); 
            modal.find('#editDescription').val(tagDescription); 
            modal.find('#editSlug').val(tagSlug); 


            modal.find('#flupld').val("");

    
        });
    });
</script>

<script>
    const editName = document.getElementById('editName');

    editName.addEventListener('input', (event) => {
        const value = event.target.value;
        event.target.value = value.replace(/[^a-zA-ZñÑ\s]/g, '').slice(0, 50);
    });

    const editDescription = document.getElementById('editDescription');

    editDescription.addEventListener('input', (event) => {
        const value = event.target.value;

        event.target.value = value.replace(/[^a-zA-ZñÑÁÉÍÓÚáéíóú0-9\s.,´]/g, '').slice(0, 185);
    });

    const editSlug = document.getElementById('editSlug');

    editSlug.addEventListener('input', (event) => {
        const value = event.target.value;
        event.target.value = value.replace(/[^a-z-ñ0-9\-_]/g, '').slice(0, 50);
    });
</script>
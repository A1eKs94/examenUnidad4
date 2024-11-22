<div class="modal fade" id="addCategorieModal" tabindex="-1" aria-labelledby="addCategorieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategorieModalLabel">Añadir Categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="<?= BASE_PATH ?>categorias/categorias/" method="POST">
                <input type="hidden" name="action" value="createCategory">
                <input type="hidden" name="redirect_url" value="categorias/categorias/">
                <input type="hidden" name="token" value="<?php echo  $token; ?>">
                <input type="hidden" name="created_by" value="<?php echo  $created_by; ?>">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre de la categoría" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ingrese una breve categoría" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Ingrese el slug de la categoría" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Categoría</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const name = document.getElementById('name');

    name.addEventListener('input', (event) => {
        const value = event.target.value;
        event.target.value = value.replace(/[^a-zA-ZñÑ\s]/g, '').slice(0, 50);
    });

    const description = document.getElementById('description');

    description.addEventListener('input', (event) => {
        const value = event.target.value;

        event.target.value = value.replace(/[^a-zA-ZñÑÁÉÍÓÚáéíóú0-9\s.,´]/g, '').slice(0, 185);
    });

    const slug = document.getElementById('slug');

    slug.addEventListener('input', (event) => {
        const value = event.target.value;
        event.target.value = value.replace(/[^a-z-ñ0-9\-_]/g, '').slice(0, 50);
    });
</script>
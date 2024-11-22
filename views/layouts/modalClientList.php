<div class="modal fade" id="editClientsModal" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClientModalLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editClientForm" action="<?php echo BASE_PATH; ?>api" method="POST">
                    <input type="hidden" name="action" value="updateClient">
                    <input type="hidden" name="redirect_url" value="clients/list/">
                    <input type="hidden" name="token" value="<?php echo  $token; ?>">
                    <input type="hidden" id="editClientId" name="id">
                    <input type="hidden" id="levelId" name="level_id">


                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="editClientName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editClientName" name="name" required>
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#editClientsModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);  

            var userId = button.data('id');
            var userName = button.data('name');
            var userEmail = button.data('email');
            var userPhone = button.data('phone');
            var levelId = button.data('level-id');


            var modal = $(this);
            modal.find('#editClientId').val(userId);  
            modal.find('#editClientName').val(userName); 
            modal.find('#editClientEmail').val(userEmail); 
            modal.find('#editClientPhone').val(userPhone); 
            modal.find('#levelId').val(levelId); 


            modal.find('#flupld').val("");

    
        });
    });
</script>

<script>
        const editClientName = document.getElementById('editClientName');

        editClientName.addEventListener('input', (event) => {
            const value = event.target.value;
            event.target.value = value.replace(/[^a-zA-ZñÑ\s]/g, '');
        });

        const editClientPhone = document.getElementById('editClientPhone');

        editClientPhone.addEventListener('input', (event) => {
            const value = event.target.value;
            event.target.value = value.replace(/[^0-9]/g, '').slice(0, 10);;
        });

        const form = document.getElementById('editClientForm');

        form.addEventListener('submit', (event) => {
            const phoneNumber = editClientPhone.value;

            if (phoneNumber.length < 10) {
                event.preventDefault();
                // alert('El número de teléfono debe contener exactamente 10 dígitos.');

                Swal.fire({
                    icon: "warning",
                    title: "Oops...",
                    text: "El número de teléfono debe contener exactamente 10 dígitos.",
                });

            }
        });
    </script>

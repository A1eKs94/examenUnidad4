<!-- Modal para Editar Usuario -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm" action="<?php echo BASE_PATH; ?>api" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="updateUser">
                            <input type="hidden" name="redirect_url" value="users/list/">
                            <input type="hidden" name="token" value="<?php echo  $token; ?>">
                            <input type="hidden" id="editUserId" name="id">


                    <!-- Campo de Nombre -->
                    <div class="mb-3">
                        <label for="editUserName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="editUserName" name="name" required>
                    </div>

                    <!-- Campo de Apellido -->
                    <div class="mb-3">
                        <label for="editUserSurname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="editLastName" name="lastname" required>
                    </div>

                    <!-- Campo de Correo -->
                    <div class="mb-3">
                        <label for="editUserEmail" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="editUserEmail" name="email" required>
                    </div>

                    <!-- Campo de Teléfono -->
                    <div class="mb-3">
                        <label for="editUserPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="editUserPhone" name="phone_number" required>
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
                                <!-- Imagen de Vista Previa -->
                                <img id="imagePreview" src="../../assets/images/user-default.jpg"  alt="Imagen de usuario" style="width: 250px; height: auto; object-fit: contain;" />
                                <label class="btn btn-outline-secondary w-100 text-center mt-2" for="flupld">
                                    <i class="ti ti-upload me-2"></i>Cargar
                                </label>
                                <!-- Input para cargar archivo de imagen -->
                                <input type="file" id="flupld" class="d-none" name="profile_photo_file" onchange="previewImage(event)" />
                                </div>
                        </div>
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
        $('#editUserModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);  

            var userId = button.data('id');
            var userName = button.data('name');
            var userLastname = button.data('lastname');
            var userEmail = button.data('email');
            var userPhone = button.data('phone');
            var userImage = button.data('image'); 

            var modal = $(this);
            modal.find('#editUserId').val(userId);  
            modal.find('#editUserName').val(userName); 
            modal.find('#editLastName').val(userLastname);  
            modal.find('#editUserEmail').val(userEmail); 
            modal.find('#editUserPhone').val(userPhone); 

            console.log("asdsdd");


            if(userImage == 'https://crud.jonathansoto.mx/storage/users/avatars/' || userImage == 'https://crud.jonathansoto.mx/storage/users/avatars/avantar.jpg'){
                modal.find('#imagePreview').attr('src', "../../assets/images/user-default.jpg");  

            }else{
                modal.find('#imagePreview').attr('src', userImage);  
            }
            modal.find('#flupld').val("");

    
        });
    });

    function previewImage(event) {
        var reader = new FileReader(); 
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result; 
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>


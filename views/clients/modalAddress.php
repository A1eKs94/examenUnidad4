<!-- Modal para editar dirección -->
<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAddressModalLabel">Editar Dirección</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAddressForm">
                    <div class="row">
                        <!-- Dirección -->
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Código Postal -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="postalCode" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="postalCode" value="" required>
                            </div>
                        </div>
                        <!-- Ciudad -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="city" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="city" value="" required>
                            </div>
                        </div>
                        <!-- Provincia -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="province" class="form-label">Provincia</label>
                                <input type="text" class="form-control" id="province" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Teléfono -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="phoneNumber" value="" required>
                            </div>
                        </div>
                        <!-- ¿Es dirección de facturación? -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="isBillingAddress" class="form-label">¿Es dirección de facturación?</label>
                                <select class="form-select" id="isBillingAddress" required>
                                    <option value="1" selected>Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="editAddressForm" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
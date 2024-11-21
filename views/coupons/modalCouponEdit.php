<!-- Modal de Edición -->
<div class="modal fade" id="editCouponModal" tabindex="-1" aria-labelledby="editCouponModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCouponModalLabel">Editar Cupón</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ruta-a-tu-backend" method="POST">
                    <!-- Nombre del cupón -->
                    <div class="mb-3">
                        <label for="couponName" class="form-label">Nombre del cupón:</label>
                        <input type="text" class="form-control" id="couponName" name="couponName" required>
                    </div>

                    <!-- Código del cupón -->
                    <div class="mb-3">
                        <label for="couponCode" class="form-label">Código del cupón:</label>
                        <input type="text" class="form-control" id="couponCode" name="couponCode" required>
                    </div>

                    <!-- Descuento -->
                    <div class="mb-3">
                        <label for="discount" class="form-label">Descuento (%)</label>
                        <input type="number" class="form-control" id="discount" name="discount" min="0" max="100" required>
                    </div>

                    <!-- Fecha de inicio -->
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Fecha de inicio:</label>
                        <input type="date" class="form-control" id="startDate" name="startDate" required>
                    </div>

                    <!-- Fecha de finalización -->
                    <div class="mb-3">
                        <label for="endDate" class="form-label">Fecha de finalización:</label>
                        <input type="date" class="form-control" id="endDate" name="endDate" required>
                    </div>

                    <!-- Monto mínimo -->
                    <div class="mb-3">
                        <label for="minAmount" class="form-label">Monto mínimo:</label>
                        <input type="number" class="form-control" id="minAmount" name="minAmount" min="0" required>
                    </div>

                    <!-- Cantidad mínima de productos -->
                    <div class="mb-3">
                        <label for="minProducts" class="form-label">Cantidad mínima de productos:</label>
                        <input type="number" class="form-control" id="minProducts" name="minProducts" min="1" required>
                    </div>

                    <!-- Estado del cupón (activoo no) -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="status" name="status" checked>
                        <label for="status" class="form-check-label">Activo</label>
                    </div>

                    <!-- Válido solo para la primera compra -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="validFirstPurchase" name="validFirstPurchase">
                        <label for="validFirstPurchase" class="form-check-label">Válido solo para la primera compra</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>
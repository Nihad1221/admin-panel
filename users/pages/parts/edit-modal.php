<div id="editModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Entry</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="form-group">
                        <label for="edit-name">Ad</label>
                        <input
                            type="text"
                            class="form-control"
                            id="edit-name"
                            name="name"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="edit-username">Soyad</label>
                        <input
                            type="text"
                            class="form-control"
                            id="edit-username"
                            name="username"
                            required
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Dəyişiklikləri saxlayın
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

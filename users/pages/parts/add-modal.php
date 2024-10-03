<div id="addModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yeni giriş əlavə et</h5>
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
                <form id="addForm">
                    <div class="form-group">
                        <label for="add-name">Ad</label>
                        <input
                                type="text"
                                class="form-control"
                                id="add-name"
                                name="name"
                                required
                        />
                    </div>
                    <div class="form-group">
                        <label for="add-username">Soyad</label>
                        <input
                                type="text"
                                class="form-control"
                                id="add-username"
                                name="username"
                                required
                        />
                    </div>
                    <button type="submit" class="btn btn-success">Əlavə ete</button>
                </form>
            </div>
        </div>
    </div>
</div>

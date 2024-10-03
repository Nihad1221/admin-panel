$(document).ready(function () {
    let data = JSON.parse(localStorage.getItem("tableData")) || [];

    let currentEditIndex = null;

    function populateTable() {
        $("#table-body").empty();
        data.forEach((entry, index) => {
            $("#table-body").append(`
                <tr data-index="${index}">
                    <td>${entry.name}</td>
                    <td>${entry.username}</td>
                    <td>
                        <button class="btn btn-primary btn-sm edit-btn" data-index="${index}">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn" data-index="${index}">Delete</button>
                    </td>
                </tr>
            `);
        });
        makeSortable(); // Sortable funksiyasını çağırın
    }

    function saveData() {
        localStorage.setItem("tableData", JSON.stringify(data));
    }

    function makeSortable() {
        $("#table-body").sortable({
            items: "tr",
            cursor: "move",
            stop: function (event, ui) {
                const newIndex = ui.item.index();
                const oldIndex = ui.item.data("index");

                // Yerini dəyiş
                const movedItem = data.splice(oldIndex, 1)[0];
                data.splice(newIndex, 0, movedItem);

                // Yeni indeksləri yeniləyin
                $("#table-body tr").each(function (index) {
                    $(this).find(".edit-btn, .delete-btn").data("index", index);
                });

                saveData();
                populateTable();
            }
        });
    }

    populateTable();

    $("#menu-toggle").click(function () {
        $("#sidebar").toggleClass("show");
        $(".main-content").toggleClass("shift");
    });

    $("#table-body").on("click", ".edit-btn", function () {
        currentEditIndex = $(this).data("index");
        const entry = data[currentEditIndex];
        $("#edit-name").val(entry.name);
        $("#edit-username").val(entry.username);
        $("#editModal").modal("show");
    });

    $("#editForm").submit(function (event) {
        event.preventDefault();
        const updatedName = $("#edit-name").val();
        const updatedUsername = $("#edit-username").val();

        data[currentEditIndex] = {
            name: updatedName,
            username: updatedUsername
        };

        $("#editModal").modal("hide");
        saveData();
        populateTable();
    });

    $("#table-body").on("click", ".delete-btn", function () {
        const index = $(this).data("index");
        Swal.fire({
            title: 'Silmək istədiyinizə əminsiniz?',
            text: "Bunu geri qaytara bilməyəcəksiniz!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Bəli, silin!'
        }).then((result) => {
            if (result.isConfirmed) {
                data.splice(index, 1);
                saveData();
                populateTable();
                Swal.fire(
                    'Silindi!',
                    'Girişiniz silindi.',
                    'Success'
                );
            }
        });
    });

    $("#add-entry-btn").click(function () {
        $("#addModal").modal("show");
    });

    // Add new entry form submission
    $("#addForm").submit(function (event) {
        event.preventDefault();
        const newName = $("#add-name").val();
        const newUsername = $("#add-username").val();

        data.push({
            name: newName,
            username: newUsername
        });

        $("#addModal").modal("hide");
        saveData();
        populateTable();
    });
});

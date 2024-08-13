document.addEventListener("DOMContentLoaded", function () {
    const statusModal = document.getElementById("statusModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalMessage = document.getElementById("modalMessage");
    const closeModalButton = document.getElementById("closeModalButton");
    const rejectButton = document.getElementById("rejectButton");
    const processButton = document.getElementById("processButton");
    const doneButton = document.getElementById("doneButton");

    const statusForm = document.getElementById("statusForm");
    const pengaduanIdInput = document.getElementById("pengaduanIdInput");
    const statusInput = document.getElementById("statusInput");

    function openModal(status, pengaduanId) {
        pengaduanIdInput.value = pengaduanId;

        if (status === 1) {
            modalTitle.innerText = "Pengaduan Belum Ditanggapi";
            modalMessage.innerText = "Pilih tindakan untuk pengaduan ini.";
            rejectButton.style.display = "inline-block";
            processButton.style.display = "inline-block";
            doneButton.style.display = "none";
        } else if (status === 3) {
            modalTitle.innerText = "Pengaduan Dalam Proses";
            modalMessage.innerText = "Tandai pengaduan ini sebagai selesai?";
            rejectButton.style.display = "none";
            processButton.style.display = "none";
            doneButton.style.display = "inline-block";
        }

        rejectButton.onclick = function () {
            statusInput.value = 2; // Status 2 untuk "Pengaduan Ditolak"
            statusForm.submit();
        };

        processButton.onclick = function () {
            statusInput.value = 3; // Status 3 untuk "Dalam Proses"
            statusForm.submit();
        };

        doneButton.onclick = function () {
            statusInput.value = 4; // Status 4 untuk "Selesai"
            statusForm.submit();
        };

        statusModal.classList.remove("hidden");
    }

    closeModalButton.addEventListener("click", function () {
        statusModal.classList.add("hidden");
    });

    const statusElements = document.querySelectorAll(".status-clickable");

    statusElements.forEach(function (element) {
        element.addEventListener("click", function () {
            const status = parseInt(this.dataset.status);
            const pengaduanId = this.dataset.id;
            openModal(status, pengaduanId);
        });
    });
});
document.getElementById('anonim').addEventListener('change', function () {
    const isAnonim = this.checked;
    const namaInput = document.getElementById('nama');
    const teleponInput = document.getElementById('telepon');
    const dukuhInput = document.getElementById('dukuh');
    const nikInput = document.getElementById('nik');

    if (isAnonim) {
        namaInput.value = 'Anonim';
        teleponInput.value = 'Anonim';
        dukuhInput.value = 'Anonim';
        nikInput.value = 'Anonim';
        namaInput.disabled = true;
        teleponInput.disabled = true;
        dukuhInput.disabled = true;
        nikInput.disabled = true;
        namaInput.placeholder = 'Anonim';
        teleponInput.placeholder = 'Anonim';
        dukuhInput.placeholder = 'Anonim';
        nikInput.placeholder = 'Anonim';
        namaInput.name = 'nama';
        teleponInput.name = 'telepon';
        dukuhInput.name = 'dukuh';
        nikInput.name = 'nik';
    } else {
        namaInput.value = '';
        teleponInput.value = '';
        dukuhInput.value = '';
        nikInput.value = '';
        namaInput.disabled = false;
        teleponInput.disabled = false;
        dukuhInput.disabled = false;
        nikInput.disabled = false;
        namaInput.placeholder = 'Masukkan Nama';
        teleponInput.placeholder = 'Masukkan No Telepon';
        dukuhInput.placeholder = 'Masukkan Asal Dukuh';
        nikInput.placeholder = 'Masukkan NIK';
    }
});
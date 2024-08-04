document.getElementById('anonim').addEventListener('change', function () {
    const isAnonim = this.checked;
    const namaInput = document.getElementById('nama');
    const teleponInput = document.getElementById('telepon');
    const dukuhInput = document.getElementById('dukuh');

    if (isAnonim) {
        namaInput.value = 'Anonim';
        teleponInput.value = 'Anonim';
        dukuhInput.value = 'Anonim';
        namaInput.disabled = true;
        teleponInput.disabled = true;
        dukuhInput.disabled = true;
        namaInput.placeholder = 'Anonim';
        teleponInput.placeholder = 'Anonim';
        dukuhInput.placeholder = 'Anonim';
    } else {
        namaInput.value = '';
        teleponInput.value = '';
        dukuhInput.value = '';
        namaInput.disabled = false;
        teleponInput.disabled = false;
        dukuhInput.disabled = false;
        namaInput.placeholder = 'Masukkan Nama';
        teleponInput.placeholder = 'Masukkan No Telepon';
        dukuhInput.placeholder = 'Masukkan Asal Dukuh';
    }
});
function login() {
    // Ambil nilai dari input form
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    // Username & password yang telah ditentukan
    let userBenar = "ahmad2017";
    let passBenar = "integrity";

    // Cek kecocokan
    if (username === userBenar && password === passBenar) {
        alert("Login sukses!");
        // Arahkan ke halaman baru
        window.location.href = "berhasil.html";
    } else {
        alert("Login gagal! Username atau password salah.");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.querySelector("button");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");

    loginButton.addEventListener("click", function () {
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        // Validasi input
        if (username === "" || password === "") {
            alert("Username dan password tidak boleh kosong!");
        } else {
            // Simulasi login sukses (untuk demo)
            if (username === "rosy" && password === "rosy") {
                alert("Login berhasil!");
                // Pindah ke halaman index.html setelah login berhasil
                window.location.href = "/";
            } else {
                alert("Username atau password salah!");
            }
        }
    });
});

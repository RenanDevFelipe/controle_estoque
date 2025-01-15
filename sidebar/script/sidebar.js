// Função para definir cookies
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); // Define a validade em dias
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
}

// Função para obter cookies
function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let cookie of cookies) {
        const [key, value] = cookie.split('=');
        if (key === name) {
            return value;
        }
    }
    return null; // Retorna null se o cookie não existir
}

// Referências ao DOM
const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

// Carrega o tema salvo nos cookies (se existir)
const savedTheme = getCookie('theme');
if (savedTheme === 'dark') {
    body.classList.add('dark');
    modeText.innerText = "Light mode";
} else {
    modeText.innerText = "Dark mode";
}

// Alternar visibilidade da sidebar
toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

// Alternar tema e salvar no cookie
modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
        setCookie('theme', 'dark', 365); // Salva o tema 'dark' no cookie por 365 dias
    } else {
        modeText.innerText = "Dark mode";
        setCookie('theme', 'light', 365); // Salva o tema 'light' no cookie por 365 dias
    }
});



var Logout = document.getElementById('logout');

Logout.addEventListener('click', () => {
    Swal.fire({
        title: "Deseja realmente sair?",
        icon: "question",
        confirmButtonText: "Sim",
        cancelButtonText: "Cancelar",
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        if (result.isConfirmed){
            window.location.href = '/controle_estoque/login/logout.php'
        }
    })
})
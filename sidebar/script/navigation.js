const Dashboard = document.getElementById('dashboard');
const Revenue = document.getElementById('revenue');

Dashboard.addEventListener('click',  (e) =>{
    e.preventDefault();
    window.location.href = '/controle_estoque/dashboard';
})

Revenue.addEventListener('click', (e) => {
    e.preventDefault;
    window.location.href = '/controle_estoque/dashboard/produtos';
})
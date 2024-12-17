function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const dashboard = document.getElementById("dashboard");
    
    sidebar.classList.toggle("hidden");
    dashboard.classList.toggle("sidebar-visible");
}

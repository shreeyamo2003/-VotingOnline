document.addEventListener("DOMContentLoaded", function() {
    // Check if user is an admin (this should be set dynamically based on login session)
    const isAdmin = false; // Set to true for admin
    if (isAdmin) {
        document.getElementById("adminOptions").style.display = "block";
    }
});

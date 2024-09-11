// External JavaScript file for handling logout

function handleLogout() {
    // Assuming session check is done server-side
    let isLoggedIn = false; 
    
    if (isLoggedIn) {

        alert("You have been logged out.");
        window.location.href = 'login.php';
    } else {
        alert("You need to log in first.");
    }
}

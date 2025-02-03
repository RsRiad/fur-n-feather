document.getElementById("addUserForm").addEventListener("submit", function (event) {
    event.preventDefault();
    let formData = new FormData(this);

    fetch("../control/dashboard_control.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("User added successfully!");
            location.reload();
        } else {
            alert("Error adding user.");
        }
    });
});

document.getElementById("updateUserForm").addEventListener("submit", function (event) {
    event.preventDefault();
    let formData = new FormData(this);

    fetch("../control/dashboard_control.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("User updated successfully!");
            location.reload();
        } else {
            alert("Error updating user.");
        }
    });
});

document.getElementById("deleteUserForm").addEventListener("submit", function (event) {
    event.preventDefault();
    let formData = new FormData(this);

    fetch("../control/dashboard_control.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("User deleted successfully!");
            location.reload();
        } else {
            alert("Error deleting user.");
        }
    });
});

document.getElementById("searchButton").addEventListener("click", function () {
    let searchInput = document.getElementById("searchInput").value;

    fetch(`../control/dashboard_control.php?search=${searchInput}`)
    .then(response => response.json())
    .then(data => {
        let searchResults = document.getElementById("searchResults");
        searchResults.innerHTML = "";
        data.forEach(vet => {
            searchResults.innerHTML += `<p>${vet.name} - ${vet.email} - ${vet.phone}</p>`;
        });
    });
});

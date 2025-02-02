document.addEventListener("DOMContentLoaded", function () {
    const email = "rsriad00@.com"; // Replace this with session/email from login

    fetch(`../control/msg_control.php?fetchVet=true&email=${email}`)
        .then(response => response.json())
        .then(data => {
            if (!data.error) {
                document.getElementById("name").value = data.name;
                document.getElementById("email").value = data.email;
                document.getElementById("phone").value = data.phone;
            } else {
                console.error("Vet not found:", data.error);
            }
        })
        .catch(error => console.error("Error fetching vet details:", error));
});

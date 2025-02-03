// Function to load pets from the server
function loadPets(query = '') {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../control/search_control.php?query=${query}`, true); // Send the query if any
    xhr.onload = function() {
        if (xhr.status === 200) {
            const pets = JSON.parse(xhr.responseText); // Parse the JSON response
            let tableRows = '';

            pets.forEach(pet => {
                tableRows += `
                    <tr>
                        <td>${pet.id}</td>
                        <td>${pet.name}</td>
                        <td>${pet.email}</td>
                        <td>${pet.password}</td>
                        <td>${pet.sp_field}</td>
                        <td>${pet.phone}</td>
                        
                    </tr>
                `;
            });

            // Update the table with the new rows
            document.getElementById('pets-tbody').innerHTML = tableRows;
        }
    };
    xhr.send(); // Send the request to the server
}

// Load all pets initially when the page loads
document.addEventListener('DOMContentLoaded', function() {
    loadPets(); // Initially load all available pets
});

// Add event listener for keyup on the search input
document.getElementById('search-input').addEventListener('keyup', function() {
    const query = document.getElementById('search-input').value; // Get search input value
    loadPets(query); // Load pets based on the search query
});

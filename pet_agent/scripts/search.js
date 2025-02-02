// Function to load pets from the server
function loadPets(query = '') {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../controllers/search-pets.php?query=${query}`, true); // Send the query if any
    xhr.onload = function() {
        if (xhr.status === 200) {
            const pets = JSON.parse(xhr.responseText); // Parse the JSON response
            let tableRows = '';

            pets.forEach(pet => {
                tableRows += `
                    <tr>
                        <td>${pet.pet_id}</td>
                        <td>${pet.name}</td>
                        <td>${pet.species}</td>
                        <td>${pet.breed}</td>
                        <td>${pet.age}</td>
                        <td>${pet.gender}</td>
                        <td>
                            <form action="../views/update-pet.php" method="POST">
                                <input type="hidden" name="pet_id" value="${pet.pet_id}">
                                <button type="submit" class="update-btn">Update</button>
                            </form>
                        </td>
                        <td>
                            <form action="../controllers/remove-pet.php" method="POST">
                                <input type="hidden" name="pet_id" value="${pet.pet_id}">
                                <button type="submit" class="remove-btn">Remove</button>
                            </form>
                        </td>
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

// Function to load pets from the server
function loadPets(query = '') {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `../control/search_control.php?query=${query}`, true); 
    xhr.onload = function() {
        if (xhr.status === 200) {
            const pets = JSON.parse(xhr.responseText); 
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

            
            document.getElementById('pets-tbody').innerHTML = tableRows;
        }
    };
    xhr.send(); 
}


document.addEventListener('DOMContentLoaded', function() {
    loadPets(); 
});


document.getElementById('search-input').addEventListener('keyup', function() {
    const query = document.getElementById('search-input').value; 
    loadPets(query); 
});

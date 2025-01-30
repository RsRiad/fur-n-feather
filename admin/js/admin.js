// Sample data (replace with data from the database)
let pets = [
    { id: 1, breed: "Labrador", age: 2, category: "Dog" },
    { id: 2, breed: "Persian", age: 1, category: "Cat" }
];

let vets = [
    { id: 1, name: "Dr. Smith", specialization: "General" },
    { id: 2, name: "Dr. Brown", specialization: "Surgery" }
];

let agents = [
    { id: 1, name: "John Doe", contact: "john@example.com" },
    { id: 2, name: "Jane Doe", contact: "jane@example.com" }
];

// Function to populate tables
function populateTables() {
    const petTableBody = document.querySelector("#pet-table tbody");
    const vetTableBody = document.querySelector("#vet-table tbody");
    const agentTableBody = document.querySelector("#agent-table tbody");

    // Clear existing rows
    petTableBody.innerHTML = "";
    vetTableBody.innerHTML = "";
    agentTableBody.innerHTML = "";

    // Populate pets table
    pets.forEach(pet => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${pet.id}</td>
            <td>${pet.breed}</td>
            <td>${pet.age}</td>
            <td>${pet.category}</td>
        `;
        petTableBody.appendChild(row);
    });

    // Populate vets table
    vets.forEach(vet => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${vet.id}</td>
            <td>${vet.name}</td>
            <td>${vet.specialization}</td>
        `;
        vetTableBody.appendChild(row);
    });

    // Populate agents table
    agents.forEach(agent => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${agent.id}</td>
            <td>${agent.name}</td>
            <td>${agent.contact}</td>
        `;
        agentTableBody.appendChild(row);
    });
}

// Function to add/update pet
document.getElementById("pet-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const petId = document.getElementById("pet-id").value;
    const breed = document.getElementById("breed").value;
    const age = document.getElementById("age").value;
    const category = document.getElementById("category").value;

    const existingPet = pets.find(pet => pet.id == petId);
    if (existingPet) {
        // Update existing pet
        existingPet.breed = breed;
        existingPet.age = age;
        existingPet.category = category;
    } else {
        // Add new pet
        pets.push({ id: petId, breed, age, category });
    }

    populateTables();
    this.reset();
});

// Function to delete pet
function deletePet() {
    const petId = document.getElementById("pet-id").value;
    pets = pets.filter(pet => pet.id != petId);
    populateTables();
}

// Populate tables on page load
populateTables();
document.addEventListener("DOMContentLoaded", fetchMessages);

function fetchMessages() {
    fetch("../control/msg_control.php?fetch=true")
        .then(response => response.json())
        .then(data => {
            const chatBox = document.getElementById("chatBox");
            chatBox.innerHTML = ""; // Clear existing messages

            data.forEach(msg => {
                const messageDiv = document.createElement("div");
                messageDiv.classList.add("chat-message");
                messageDiv.textContent = `${msg.type === "vet" ? "Vet" : "Customer"}: ${msg.msg}`;
                chatBox.appendChild(messageDiv);
            });
        })
        .catch(error => console.error("Error fetching messages:", error));
}

document.getElementById("chatForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch(this.action, {
        method: "POST",
        body: formData
    }).then(() => {
        fetchMessages(); // Refresh messages after sending
        document.getElementById("msg_input").value = ""; // Clear input field
    }).catch(error => console.error("Error sending message:", error));
});

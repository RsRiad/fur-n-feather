document.addEventListener("DOMContentLoaded", function() {
    // Chatbox functionality
    const chatBox = document.getElementById("chat-box");
    const messageBox = document.getElementById("message-box");

    function sendMessage() {
        const messageText = messageBox.value.trim();
        if (messageText === "") return;
        
        const messageElement = document.createElement("div");
        messageElement.classList.add("message", "vet-message");
        messageElement.textContent = `Vet: ${messageText}`;
        
        chatBox.appendChild(messageElement);
        chatBox.scrollTop = chatBox.scrollHeight;
        messageBox.value = "";
    }

    document.querySelector("button").addEventListener("click", sendMessage);

    // Treatment history confirmation
    document.querySelectorAll(".confirm-button").forEach(button => {
        button.addEventListener("click", function() {
            this.textContent = "Confirmed";
            this.style.backgroundColor = "#aaa";
            this.disabled = true;
        });
    });

    // Notification system (simulating new notifications)
    function addNotification(message) {
        const notificationList = document.getElementById("notification-list");
        const newNotification = document.createElement("li");
        newNotification.textContent = message;
        notificationList.appendChild(newNotification);
    }

    setTimeout(() => addNotification("New message from a Pet Owner"), 5000);
    setTimeout(() => addNotification("New appointment scheduled"), 10000);
});

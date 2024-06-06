document.getElementById('ticketForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const userName = document.getElementById('userName').value.trim();
    const userEmail = document.getElementById('userEmail').value.trim();
    const userQuery = document.getElementById('userQuery').value.trim();
    
    if (!userName || !userEmail || !userQuery) {
        alert("Please fill out all fields.");
        return;
    }

    const currentDate = new Date();
    const formattedDate = currentDate.toLocaleString();

    const notification = document.getElementById('notification');
    notification.innerHTML = `Thank you, ${userName}! Your ticket is recorded now with date: ${formattedDate}`;
    notification.style.display = 'block';

    document.getElementById('ticketForm').reset();
});
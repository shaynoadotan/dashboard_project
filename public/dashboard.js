document.addEventListener('DOMContentLoaded', function() {
    fetch('/messages')
    .then(response => response.json())
    .then(data => {
        let messagesList = document.querySelector('.messages ul');
        messagesList.innerHTML = '';

        data.forEach(message => {
            let li = document.createElement('li');
            li.innerHTML = `
                <div class="message-content">
                    <strong>${message.message_title}</strong>
                    <span>${message.message_body}</span>
                </div>
                <small>${new Date(message.message_time).toLocaleTimeString()}</small>
            `;
            messagesList.appendChild(li);
        });
    });
});

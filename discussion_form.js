const messageForm = document.querySelector('#message-form');
const messageList = document.querySelector('#message-list');

messageForm.addEventListener('submit', function(event) {
	event.preventDefault();

	const nameInput = document.querySelector('#name');
	const messageInput = document.querySelector('#message');

	const name = nameInput.value;
	const message = messageInput.value;

	if (!name || !message) {
		alert('Please enter a name and message');
		return;
	}

	const messageItem = document.createElement('div');
	messageItem.classList.add('message-item');

	const messageHeader = document.createElement('div');
	messageHeader.classList.add('message-header');
	messageHeader.innerHTML = `<strong>${name}</strong> - ${new Date().toLocaleString()}`;

	const messageBody = document.createElement('div');
	messageBody.classList.add('message-body');
	messageBody.textContent = message;

	messageItem.appendChild(messageHeader);
	messageItem.appendChild(messageBody);

	messageList.appendChild(messageItem);

	nameInput.value = '';
	messageInput.value = '';
});

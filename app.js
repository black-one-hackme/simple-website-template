// Function to fetch and display apps
function fetchApps() {
    fetch('apps.json') // Fetch the apps data
        .then(response => response.json())
        .then(data => {
            const appContainer = document.getElementById('app-container');
            data.forEach(app => {
                const appCard = document.createElement('div');
                appCard.classList.add('app-card');
                appCard.innerHTML = `
                    <h3>${app.name}</h3>
                    <img src="images/${app.image}" alt="${app.name}">
                    <p>${app.description}</p>
                    ${app.payment_required === 1 ? 
                        `<a href="payment.html" class="button">Pay to Download</a>` :
                        `<a href="${app.download_link}" class="button">Download Now</a>`
                    }
                `;
                appContainer.appendChild(appCard);
            });
        })
        .catch(error => console.error('Error fetching apps:', error));
}

// Fetch apps on page load
window.onload = fetchApps;

function addToFavorites(name, code, image, price) {
    // AJAX request to save the favorite
    // Use the appropriate endpoint and method for your server-side code
    // Example using fetch API
    fetch('save_favorite.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            name: name,
            code: code,
            image: image,
            price: price,
        }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle response from the server (if needed)
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}

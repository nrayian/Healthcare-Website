// Attach an event listener to the search input
document.getElementById('search').addEventListener('input', function () {
    // Get the search query entered by the user
    const searchQuery = this.value;

    // Check if the search query is not empty
    if (searchQuery.trim() !== '') {
        // Send an AJAX request to the PHP script for live search
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'search.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Display the search results
                document.getElementById('search-results').innerHTML = xhr.responseText;
            }
        };
        xhr.send('query=' + encodeURIComponent(searchQuery));
    } else {
        // Clear the search results if the search query is empty
        document.getElementById('search-results').innerHTML = '';
    }
});
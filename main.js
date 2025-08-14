// This file contains JavaScript code for client-side functionality, such as form validation, dynamic content loading, and user interactions.

document.addEventListener('DOMContentLoaded', function() {
    // Form validation for user registration
    const registrationForm = document.getElementById('registrationForm');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!username || !email || !password) {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }

    // Dynamic content loading for posts
    const loadPostsButton = document.getElementById('loadPosts');
    if (loadPostsButton) {
        loadPostsButton.addEventListener('click', function() {
            fetch('/src/views/posts/index.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('postsContainer').innerHTML = data;
                })
                .catch(error => console.error('Error loading posts:', error));
        });
    }

    // Comment submission
    const commentForm = document.getElementById('commentForm');
    if (commentForm) {
        commentForm.addEventListener('submit', function(event) {
            const commentText = document.getElementById('commentText').value;

            if (!commentText) {
                event.preventDefault();
                alert('Please enter a comment.');
            }
        });
    }
});
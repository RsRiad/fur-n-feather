document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById('myModal1');
    const openLoginModalBtn = document.querySelector('.btn-primary1'); // Target Log In button
    const closeLoginModalBtn = document.getElementById('closeModalBtn1');

    openLoginModalBtn.addEventListener('click', () => {
        loginModal.style.display = 'block';
    });

    closeLoginModalBtn.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            loginModal.style.display = 'none';
        }
    });
});

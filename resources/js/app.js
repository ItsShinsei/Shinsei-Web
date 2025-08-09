import './bootstrap';

document.getElementById('toggleTheme').addEventListener('click', () => {
    document.body.classList.toggle('bg-gray-900');
    document.body.classList.toggle('text-white');
});

document.getElementById('toggleSound').addEventListener('click', () => {
    alert('Sound toggled! (placeholder)');
});

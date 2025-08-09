// Load dark mode preference
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark')
}

document.getElementById('toggleTheme').addEventListener('click', () => {
    document.documentElement.classList.toggle('dark')
    if (document.documentElement.classList.contains('dark')) {
        localStorage.theme = 'dark'
    } else {
        localStorage.theme = 'light'
    }
})

document.getElementById('toggleSound').addEventListener('click', () => {
    alert('Sound toggled! (placeholder)')
})

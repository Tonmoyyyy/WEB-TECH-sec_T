const display = document.getElementById('display');
const buttonsContainer = document.querySelector('.buttons');

buttonsContainer.addEventListener('click', (event) => {
    // Check if the clicked element is a button
    if (!event.target.classList.contains('btn')) return;

    const value = event.target.dataset.value;

    if (value === 'C') {
        // Clear display
        display.value = '';
    } else if (value === '=') {
        // Calculate result
        try {
            // eval() takes the string "2+2" and returns 4
            display.value = eval(display.value);
        } catch {
            display.value = "Error";
        }
    } else {
        // Append value to display
        display.value += value;
    }
});
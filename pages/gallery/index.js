// Get the HTML element with the ID "gallery" and assign it to the gallery constant
const gallery = document.getElementById("gallery");

// Add an event listener to the window object that listens for the mousemove event
window.onmousemove = e => {
    // Extract the x and y coordinates of the mouse pointer from the event object and store them in constants
    const mouseX = e.clientX,
        mouseY = e.clientY;

    // Calculate the percentage of the horizontal and vertical distances the mouse has traveled relative to the width and height of the browser window
    const xDecimal = mouseX / window.innerWidth,
        yDecimal = mouseY / window.innerHeight;

    // Calculate the maximum values the gallery element can be moved horizontally and vertically based on its width and height relative to the width and height of the browser window
    const maxX = gallery.offsetWidth - window.innerWidth,
        maxY = gallery.offsetHeight - window.innerHeight;

    // Calculate the amount the gallery element should be moved horizontally and vertically based on the percentage of distance the mouse has traveled and the maximum values calculated earlier
    const panX = maxX * xDecimal * -1,
        panY = maxY * yDecimal * -1;

    // Animate the gallery element using the animate method, which takes a keyframe object and an options object as parameters
    gallery.animate({
        // The keyframe object specifies the transform property of the gallery element, which is set to a CSS translate transformation that moves the element by the panX and panY values calculated earlier
        transform: `translate(${panX}px, ${panY}px)`
    }, {
        // The options object specifies the duration of the animation, the fill mode, which ensures the element remains in its final position after the animation, and the easing function, which specifies the timing of the animation
        duration: 4000,
        fill: "forwards",
        easing: "ease"
    });
};

const tiles = document.querySelectorAll('.tile');

tiles.forEach(tile => {
    const width = Math.floor(Math.random() * 200) + 250; // generates a random number between 100 and 300
    const height = Math.floor(Math.random() * 200) + 250; // generates a random number between 100 and 300

    tile.style.width = `${width}px`;
    tile.style.height = `${height}px`;
});
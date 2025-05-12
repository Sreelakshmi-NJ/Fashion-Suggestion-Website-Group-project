// Track current image indices for each body type
let imageIndices = {
    hourglass: 0,
    rectangle: 0,
    inverted: 0,
    pear: 0,
    apple: 0
};

// Arrays of image sources for each body type
const images = {
    hourglass: [
        'osug/Hourglass shape - necklines.jpg',
        'osug/Hourglass shape - sleeves.jpg',
        'osug/Hourglass shape - shirts.jpg',
        'osug/Hourglass shape - jackets.jpg',
        'osug/Hourglass shape - coats.jpg',
        'osug/Hourglass shape - bottoms.jpg',
        'osug/Hourglass shape - jeans.jpg',
        'osug/Hourglass shape - skirts.jpg',
        'osug/Hourglass shape - dresses.jpg'
    ],
    rectangle: [
        'osug/Rectangle shape - necklines.jpg',
        'osug/Rectangle shape - sleeves.jpg',
        'osug/Rectangle shape - shirts.jpg',
        'osug/Rectangle shape - jackets.jpg',
        'osug/Rectangle shape - coats.jpg',
        'osug/Rectangle shape - trousers.jpg',
        'osug/Rectangle shape - jeans.jpg',
        'osug/Rectangle shape - skirts.jpg',
        'osug/Rectangle shape - dresses.jpg'
    ],
    inverted: [
        'osug/Inverted triangle shape - necklines.jpg',
        'osug/Inverted triangle shape - sleeves.jpg',
        'osug/Inverted triangle shape - shirts.jpg',
        'osug/Inverted triangle shape - jackets.jpg',
        'osug/Inverted triangle shape - coats.jpg',
        'osug/Inverted triangle shape - trousers.jpg',
        'osug/Inverted triangle shape - jeans.jpg',
        'osug/Inverted triangle shape - skirts.jpg',
        'osug/Inverted triangle shape - dresses.jpg'
    ],
    pear: [
        'osug/pear shape - necklines.jpg',
        'osug/pear shape - sleeves.jpg',
        'osug/pear shape - shirts.jpg',
        'osug/pear shape - jackets.jpg',
        'osug/pear shape - coats.jpg',
        'osug/pear shape - bottom.jpg',
        'osug/pear shape - jeans.jpg',
        'osug/pear shape - skirts.jpg',
        'osug/pear shape - dresses.jpg'
    ],
    apple: [
        'osug/Round shape - necklines.jpg',
        'osug/Round shape - sleeves.jpg',
        'osug/Round shape - shirts.jpg',
        'osug/Round shape - jackets.jpg',
        'osug/Round shape - coats.jpg',
        'osug/Round shape - trousers.jpg',
        'osug/Round shape - jeans.jpg',
        'osug/Round shape - skirts.jpg',
        'osug/Round shape - dresses.jpg'
    ]
};

/*const descriptions = {
    hourglass		*/

// Function to change images based on the body type and direction (left/right)
function changeImage(bodyType, direction) {
    // Update the current image index for the selected body type
    imageIndices[bodyType] += direction;

    // Loop around the images for each body type
    if (imageIndices[bodyType] < 0) {
        imageIndices[bodyType] = images[bodyType].length - 1; // Go to the last image
    } else if (imageIndices[bodyType] >= images[bodyType].length) {
        imageIndices[bodyType] = 0; // Go back to the first image
    }

    // Change the image source for the selected body type
    document.getElementById(bodyType + 'Image').src = images[bodyType][imageIndices[bodyType]];
 }
 let touchStartX = 0;
            let touchEndX = 0;

            const galleryContainer = document.getElementById('galleryContainer');

            galleryContainer.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            galleryContainer.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                if (touchEndX < touchStartX) {
                    // Left swipe
                    changeImage(1); // Move to next image
                }
                if (touchEndX > touchStartX) {
                    // Right swipe
                    changeImage(-1); // Move to previous image
                }
            }
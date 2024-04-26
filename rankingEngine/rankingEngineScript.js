let options = ["Option A", "Option B", "Option C", "Option D"]; // Example options
let rankings = [];

let currentIndex = 0;
let swapped = false;

const option1Element = document.getElementById("option1");
const option2Element = document.getElementById("option2");
const rankingsElement = document.getElementById("rankings");

function chooseOption(index) {
    if (index === 1) {
        // Swap elements if user chooses the second option
        [options[currentIndex], options[currentIndex + 1]] = [options[currentIndex + 1], options[currentIndex]];
        swapped = true;
    }

    // Apply clicked animation
    option1Element.classList.add("clicked");
    option2Element.classList.add("clicked");
    setTimeout(() => {
        option1Element.classList.remove("clicked");
        option2Element.classList.remove("clicked");
    }, 200); // Remove clicked class after 0.2s

    currentIndex++;

    if (currentIndex >= options.length - 1) {
        // All options in the current iteration ranked, reset currentIndex and check for sorting
        currentIndex = 0;
        if (!swapped) {
            // All options ranked and no swaps made in this iteration, list is sorted
            displayRankings();
            return;
        }
        swapped = false; // Reset swapped flag for the next iteration
    }

    // Update displayed options for next comparison
    option1Element.textContent = options[currentIndex];
    option2Element.textContent = options[currentIndex + 1];
}

function displayRankings() {
    // Display rankings
    rankingsElement.innerHTML = "<h2>Rankings:</h2>";
    options.forEach((option, index) => {
        rankingsElement.innerHTML += `<p>${index + 1}. ${option}</p>`;
    });
}

// Initial display of options
option1Element.textContent = options[currentIndex];
option2Element.textContent = options[currentIndex + 1];

// Define an array of roles
const roles = [
  "Front-end Developer",
  "Back-end Developer",
  "UI/UX Designer",
  "wordpress developer",
];
let currentRoleIndex = 0;
let currentRole = "";
let letterIndex = 0;
let typingInterval;

// Function to update the role text letter by letter
function typeRole() {
  // Reset letter index when the role is fully typed
  if (letterIndex >= roles[currentRoleIndex].length) {
    clearTimeout(typingInterval);
    setTimeout(eraseRole, 1000); // Pause before erasing the text
    return;
  }

  currentRole += roles[currentRoleIndex].charAt(letterIndex);
  document.getElementById("role").textContent = currentRole;
  letterIndex++;
  typingInterval = setTimeout(typeRole, 100); // Adjust typing speed as needed (milliseconds)
}

// Function to erase the role text letter by letter
function eraseRole() {
  // Check if the current role text is fully erased
  if (currentRole.length === 0) {
    currentRoleIndex = (currentRoleIndex + 1) % roles.length; // Move to the next role
    letterIndex = 0; // Reset letter index
    setTimeout(typeRole, 600); // Pause before typing the next role
    return;
  }

  currentRole = currentRole.slice(0, -1);
  document.getElementById("role").textContent = currentRole;
  typingInterval = setTimeout(eraseRole, 50); // Adjust erasing speed as needed (milliseconds)
}

// Start the typing animation
setTimeout(typeRole, 1000); // Initial delay before starting the animation
// Get the circle element
var circle = document.getElementById("circle");

// Add event listener for mousemove
document.addEventListener("mousemove", function (e) {
  // Get the mouse coordinates
  var x = e.clientX;
  var y = e.clientY;

  // Update the position of the circle
  circle.style.left = x + "px";
  circle.style.top = y + "px";
});

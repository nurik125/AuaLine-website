function showToxicPopup(duration = 4000) {
    const popup = document.getElementById("toxicPopup");
    const progress = popup.querySelector(".toxic-progress-bar");

    // Reset progress bar
    progress.style.transition = "none";
    progress.style.transform = "scaleX(1)";

    // Set progress bar to shrink
    progress.style.transition = `transform ${duration}ms linear`;
    progress.style.transform = "scaleX(0)";

    popup.style.display = "block";

    setTimeout(() => {
        popup.classList.add("activate");
    }, 10);
    
    // Hide popup after timer
    setTimeout(() => {
        popup.classList.remove("activate");
        setTimeout(() => popup.style.display = "none", 400);
    }, duration-10);
}

/* EXAMPLE: automatically show after URL ?status=success */
document.addEventListener("DOMContentLoaded", () => {
  const params = new URLSearchParams(window.location.search);
  if (params.get("status") === "1") {
      showToxicPopup(5000); // 5 seconds
  }
});
document.getElementById('view-content-btn').addEventListener('click', function(event) {
    event.preventDefault();
    const target = document.getElementById('navbar');
    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition;
    const duration = 1000; // 1 second

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function scrollStep(timestamp) {
        const currentTime = timestamp - startTime;
        const progress = Math.min(currentTime / duration, 1);
        const scrollEased = startPosition + distance * easeOutCubic(progress);
        window.scrollTo(0, scrollEased);

        if (currentTime < duration) {
            requestAnimationFrame(scrollStep);
        }
    }

    let startTime;
    requestAnimationFrame(function(timestamp) {
        startTime = timestamp;
        scrollStep(timestamp);
    });
});
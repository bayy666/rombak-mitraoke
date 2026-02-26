/**
 * MitraOKE — TV Showcase Auto-Scroll
 * requestAnimationFrame loop for featured cards row
 */
(function () {
    const track = document.getElementById('tvTrack');
    if (!track) return;

    const section = track.closest('.tv-section');
    let paused = false;
    const speed = 0.6; // px per frame

    function step() {
        if (!paused) {
            track.scrollLeft += speed;
            if (track.scrollLeft >= track.scrollWidth / 2) {
                track.scrollLeft = 0;
            }
        }
        requestAnimationFrame(step);
    }

    if (section) {
        section.addEventListener('mouseenter', () => { paused = true; });
        section.addEventListener('mouseleave', () => { paused = false; });
    }

    // Manual arrow navigation
    window.tvScroll = function (dir) {
        const item = track.querySelector('.tv-featured-item');
        if (!item) return;
        const w = item.offsetWidth + 12;
        track.scrollLeft += dir * w;
        if (track.scrollLeft >= track.scrollWidth / 2) {
            track.scrollLeft = 0;
        }
        if (track.scrollLeft < 0) {
            track.scrollLeft = track.scrollWidth / 2 - w;
        }
    };

    requestAnimationFrame(step);
})();

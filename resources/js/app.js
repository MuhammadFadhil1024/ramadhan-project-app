import "./bootstrap";
import "slick-carousel/slick/slick.min.js";
import "slick-carousel/slick/slick.css";
import "slick-carousel";

document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname;

    if (/^\/surah/.test(currentPage)) {
        import("./al-quran/index.js");
    }
});

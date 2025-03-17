import $ from "jquery";

$(function () {
    const page = $(".page-alquran-index");
    const wrapperLastReadSurah = page.find(".wrapper-last-read-surah");

    // onload
    getAllSurah();

    wrapperLastReadSurah.slick({
        slidesToShow: 3,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                },
            },
        ],
    });

    function getAllSurah() {
        $.ajax({
            url: "/api/v1/al-quran/surah",
            method: "GET",
            success: function (response) {
                // const surahList = page.find(".surah-list");
                // surahList.html(response);
                console.log(response);
            },
            error: function (error) {
                console.log(error);
            },
        });
    }
});

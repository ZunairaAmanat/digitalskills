// $(document).ready(function(){
//     $(function(){
//         $("#playlist li").on("click", function(){
//             $("#videoarea").attr({
//                 src: $(this).attr("movieurl"),
//             });
//         });
//         $("#videoarea").attr({
//           src: $("#playlist li").eq(0).attr("movieurl"),
//         });
        
//     });
// });

// $(document).ready(function() {
//     // Load the first video on page load
//     let firstVideo = $("#playlist li").eq(0);
//     if (firstVideo.length) {
//         let videoUrl = firstVideo.data("movieurl");
//         $("#videoarea").attr("src", videoUrl);
//         $("#videoarea")[0].load();
//     }

//     // Set up click event for each lesson
//     $("#playlist li").on("click", function() {
//         let videoUrl = $(this).data("movieurl");
//         $("#videoarea").attr("src", videoUrl);
//         $("#videoarea")[0].load(); // Load the new video
//         $("#videoarea")[0].play(); // Play the video immediately
//     });
// });


$(document).ready(function() {
    $("#playlist li").on("click", function() {
        const movieUrl = $(this).attr("movieurl");
        if (movieUrl) {
            $("#videoarea source").attr("src", movieUrl);
            $("#videoarea")[0].load(); // Load the new video
            $("#videoarea")[0].play(); // Play the video
        }
    });

    // Set initial video
    const initialMovieUrl = $("#playlist li").eq(0).attr("movieurl");
    if (initialMovieUrl) {
        $("#videoarea source").attr("src", initialMovieUrl);
        $("#videoarea")[0].load();
        $("#videoarea")[0].play();
    }
});
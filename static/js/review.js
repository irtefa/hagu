$(document).ready(function()
{
    $('#submit-review').click(function(event) {
        // post this
        var review_text = $('#review-text').val();
        // select male and female here, remove comment once done
        var gender = "male";
        // find yelp id
        var yelp_id = "pretty-good";
        // post it here
        var post_data = {"review_text": review_text, "gender": gender, "yelp_id": yelp_id};

        $.ajax({
            type: "POST",
            url: "post_review.php",
            data: post_data,
            success: function(result) {
                $('#review-list').prepend(post_data);
            }
        });
    });
});

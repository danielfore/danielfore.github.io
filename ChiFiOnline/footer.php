<a href="#">
    <div class="scroll-up mobile-no-show">
        <img src="/images/arrow-up.svg">
        <p>top</p>
    </div>
</a>
<footer>
    <img class="logo" src="/images/logo-woc.svg">
    <div class="links">
        Copyright 2014 © West of Chicago Restaurants Inc.
        <a href="/privacy.php">Privacy Policy</a>
    </div>
</footer>
<script>
$(document).ready(function () {
    $('.scroll-up').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>
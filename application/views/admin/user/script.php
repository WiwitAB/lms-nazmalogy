<!--=============== External JS ===============-->
<script type="text/javascript" src="<?= base_url('assets/js/new_script.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/search.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/user_class.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/form.js') ?>"></script>


<!--=============== AOS JS ===============-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    // multiselect dropdown input
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2();
    });
</script>
<!-- ============== Splide Js =============== -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
    });

    splide.mount();
</script>
<script>
    function SupportFunction() {
        window.location.href =
            "<?= site_url('front/support') ?>";
    }
</script>

</html>
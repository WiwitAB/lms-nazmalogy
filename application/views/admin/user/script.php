<!--=============== External JS ===============-->
<script type="text/javascript" src="<?= base_url('assets/js/script.js') ?>"></script>
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
    var widths = [0, 992, 2000];

    function resizeFn() {
        if (window.innerWidth >= widths[0] && window.innerWidth < widths[1]) {
            var splide = new Splide('.splide', {
                type: 'loop',
                padding: '2rem',
            });

            splide.mount();
        } else if (window.innerWidth >= widths[1] && window.innerWidth < widths[2]) {
            var splide = new Splide('.splide', {
                type: 'loop',
                padding: '20rem',
            });

            splide.mount();
        } else {
            var splide = new Splide('.splide', {
                type: 'loop',
                padding: '25rem',
            });

            splide.mount();
        }
    }
    window.onresize = resizeFn;
    resizeFn();
</script>
<script>
    function SupportFunction() {
        window.location.href =
            "http://localhost/lms-nazma-office-codeigniter/front/support";
    }
</script>

</html>
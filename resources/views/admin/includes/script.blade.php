<!-- Fonts and icons -->
<script src="{{ asset('admin/js/plugin/webfont/webfont.min.js') }}"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Open+Sans:300,400,600,700"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
            urls: ['{{ asset('admin/css/fonts.css') }}']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>
<!--   Core JS Files   -->
<script src="{{ asset('admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
<!-- jQuery Scrollbar -->
<script src="{{ asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Moment JS -->
<script src="{{ asset('admin/js/plugin/moment/moment.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{ asset('admin/js/plugin/chart.js/chart.min.js') }}"></script>
<!-- jQuery Sparkline -->
<script src="{{ asset('admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Chart Circle -->
<script src="{{ asset('admin/js/plugin/chart-circle/circles.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('admin/js/plugin/datatables/datatables.min.js') }}"></script>
<!-- Bootstrap Notify -->
<script src="{{ asset('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- Bootstrap Toggle -->
<script src="{{ asset('admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<!-- jQuery Vector Maps -->
<script src="{{ asset('admin/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<!-- Google Maps Plugin -->
<script src="{{ asset('admin/js/plugin/gmaps/gmaps.js') }}"></script>
<!-- Sweet Alert -->
<script src="{{ asset('admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<!-- JS -->
<script src="{{ asset('admin/js/ready.min.js') }}"></script>
<!-- Login - Register -->
<script src="{{ asset('admin/js/ready.js') }}"></script>
<!-- Raja Ongkir Jquery -->
<script src="{{ asset('admin/js/rajaongkir-jquery.js') }}"></script>
<!-- Get Sub Category -->
<script src="{{ asset('admin/js/app.js') }}"></script>
<!-- TinyMCE5 -->
<script src="{{ asset('vendor/tinyMCE5/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/tinyMCE5/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function() {
        // Text Editor TinyMCE5
        $(".markdown-input").tinymce({
            relative_urls: false,
            language: "en",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern",
            ],
            toolbar1: "fullscreen preview",
            toolbar2:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document
                    .getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                let cmsURL = /* route */ + '?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        });
    });
</script>

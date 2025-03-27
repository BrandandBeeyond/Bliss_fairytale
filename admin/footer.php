<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Upzet.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://brandandbeeyond.com/"
                        target="_blank" style="color:#F9B000">Brand and Beeyond</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->

<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
<script src="assets/js/pages/form-editor.init.js"></script>
<script src="assets/libs/quill/quill.min.js"></script>
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- <script src="assets/ckeditor/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>


<script>
    // Function to initialize CKEditor with custom configuration
    function initCkeditorOnAllTextareas() {
        // Select all textareas on the page
        const textareas = document.querySelectorAll('textarea');

        // Loop through each textarea and initialize CKEditor
        textareas.forEach((textarea, index) => {
            const wrapper = textarea.closest('.ckeditor-container'); // Get the closest container
            ClassicEditor
                .create(textarea, {
                    toolbar: {
                        items: [
                            'fontFamily', 'fontSize',
                            'bold', 'italic', 'underline', 'strikethrough',
                            'fontColor', 'fontBackgroundColor',
                            'superscript', 'subscript',
                            'heading', 'blockquote', 'codeBlock',
                            'numberedList', 'bulletedList', 'outdent', 'indent',
                            'alignment',
                            'link', 'imageUpload', 'mediaEmbed',
                            'undo', 'redo',
                            'removeFormat'
                        ]
                    },
                    htmlSupport: {
                        allow: [
                            {
                                name: /.*/, // Allow all elements and attributes
                                attributes: true,
                                classes: true,
                                styles: true
                            }
                        ]
                    },
                    placeholder: 'Type your content here...',
                })
                .then(editor => {
                    // Resize observer to adjust editor height based on container size
                    const resizeObserver = new ResizeObserver(entries => {
                        for (let entry of entries) {
                            const height = entry.contentRect.height;
                            editor.ui.view.editable.element.style.height = `${height - 30}px`; // Adjust for padding/border
                        }
                    });

                    // Observe the wrapper for resizing
                    resizeObserver.observe(wrapper);

                    // Set initial editor height based on container size
                    editor.ui.view.editable.element.style.height = `${wrapper.clientHeight - 30}px`;
                })
                .catch(error => {
                    console.error(error);
                });
        });
    }

    // Initialize CKEditor on all textareas when the page loads
    initCkeditorOnAllTextareas();
</script>

</body>

</html>
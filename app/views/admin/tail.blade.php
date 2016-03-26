<!-- FOOTER -->
	<!-- PAGE FOOTER -->
<div class="page-footer">
	<div class="row">
		
	</div>
</div>
<!-- END PAGE FOOTER --><!-- END FOOTER -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="http://localhost:8080/new/js/plugin/pace/pace.min.js"></script>-->
	
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->


<!-- IMPORTANT: APP CONFIG -->
<script src="{{url('backend/js/app.config.js')}}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="{{url('backend/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{url('backend/smartadmin/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{url('backend/smartadmin/js/notification/SmartNotification.min.js')}}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{url('backend/smartadmin/js/smartwidgets/jarvis.widget.min.js')}}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{url('backend/smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

<!-- SPARKLINES -->
<script src="{{url('backend/smartadmin/js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{url('backend/smartadmin/js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{url('backend/smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{url('backend/smartadmin/js/plugin/select2/select2.min.js')}}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{url('backend/smartadmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

<!-- browser msie issue fix -->
<script src="{{url('backend/smartadmin/js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

<!-- FastClick: For mobile devices: you can disable this in app.js -->
<script src="{{url('backend/smartadmin/js/plugin/fastclick/fastclick.min.js')}}"></script>

<!-- redactor -->
<script src="{{url('backend/plugins/redactor/redactor.js')}}"></script>
<script src="{{url('backend/plugins/redactor/fontfamily.js')}}"></script>
<script src="{{url('backend/plugins/redactor/textdirection.js')}}"></script>
<script src="{{url('backend/plugins/redactor/fullscreen.js')}}"></script>
<script src="{{url('backend/plugins/redactor/fontcolor.js')}}"></script>
<script src="{{url('backend/plugins/redactor/fontsize.js')}}"></script>
<!-- datatables -->
<script src="{{url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables/dataTables.colVis.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables/dataTables.tableTools.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('backend/plugins/datatable-responsive/datatables.responsive.min.js')}}"></script>

<!--[if IE 8]>
<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="{{url('backend/js/app.js')}}"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="{{url('backend/smartadmin/js/speech/voicecommand.min.js')}}"></script>


<script>

    function renderEditor(){



        $('.editor').redactor({

            buttons: ['html', 'formatting','underline','bold', 'italic', 'deleted',

                'unorderedlist', 'orderedlist', 'outdent', 'indent',

                'image', 'video', 'file', 'table', 'link', 'alignment', 'horizontalrule'],

            minHeight: 200,
            imageUpload: "redactorupload",

           

            convertDivs: false,

            plugins: ['fontfamily','fontsize','fullscreen','fontcolor']

        });

    }

    var slug = function(str) {

        str = str.replace(/^\s+|\s+$/g, ''); // trim

        str = str.toLowerCase();



        // remove accents, swap ñ for n, etc

        var from = "ặãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";

        var to   = "aaaaaaeeeeeiiiiooooouuuunc------";

        for (var i=0, l=from.length ; i<l ; i++) {

            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));

        }



        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars

                .replace(/\s+/g, '-') // collapse whitespace and replace by -

                .replace(/-+/g, '-'); // collapse dashes



        return str;

    };

    function getSlug(fromE,forE){



        function updateSlug(){

            var text = slug($(fromE).val());

            $(forE).val(text);

        }

        $(fromE).keyup(updateSlug).change(updateSlug);

    }

</script>


	</body>

</html>